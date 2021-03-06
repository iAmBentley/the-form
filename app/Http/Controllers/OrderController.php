<?php

namespace App\Http\Controllers;

use App\Order;
use App\Store;
use App\Category;
use App\User;
use App\Item;
use App\Mail\OrderEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

use Exception;

class OrderController extends Controller
{
	/** CHECK IF USER IS LOGGED IN */
	public function __construct()
	{
		$this->middleware('auth');
	}


	/** SHOW TABLE OF ALL ORDERS (INDEX) */
	public function index()
	{
		/* SET CORE VARIABLES */
		$orders = Order::orderBy('created_at', 'desc')->get();
		/* RETURN VIEW AND PASS VARIABLES */
		return view('orders.index', compact('orders'));
	}


	/** CREATE NEW GENERIC ORDER FORM (CREATE) */
	public function create(Request $request)
	{
		/* SET CORE VARIABLES */
		$categories = Category::where('is_active', 1)->get();
		$stores = Store::where('is_active', 1)->get();
		/* RETURN VIEW AND PASS VARIABLES */
		return view('orders.create', compact('categories', 'stores'));
	}


	/** GET STORES BY CATEGORY (AJAX - DROPDOWN ON.CHANGE) */
	public function getStoresByCat(Request $request)
	{
		/* SET CORE VARIABLES */
		$selectedCatId = $request->selectedCat;
		$storesByCat = Store::whereHas('categories', function ($query) use ($selectedCatId){
			$query->where('id', $selectedCatId);
		})
		->with('categories')
		->where('is_active', 1)
		->orderBy('name', 'asc')
		->get();
		/* PASS JSON BACK TO AJAX FILE WITH VARIABLES */
		return response()->json($storesByCat);
	}


	/** GET ITEMS BY STORE BASED ON CATEGORY (AJAX - DROPDOWN ON.CHANGE) */
	public function getFormItems(Request $request)
	{
		/* SET CORE VARIABLES */
		$selectedCatId = $request->selectedCat;
		$selectedStoreId = $request->selectedStore;
		/* QUERY ITEMS WITH SELECTED CAT_ID AND SELECTED STORE_ID */
		$items = Item::whereHas('categories', function ($query) use ($selectedCatId){
			$query->where('id','=',$selectedCatId);
		})
		->whereHas('stores', function ($query) use ($selectedStoreId) {
			$query->where('id','=',$selectedStoreId);
		})
		->with(['categories','stores'])
		->where('is_active', 1)
		->orderBy('vendor_id', 'asc')
		->orderBy('name')
		->get();
		/* SET CATNAME VARIABLE DEPENDING ON SELECTED CAT ID - USED FOR VIEW URL BELOW */
		switch ($selectedCatId) {
			case 1: $catName = "flavors"; break;
			case 2: $catName = "labels"; break;
			case 3: $catName = "supplies"; break;
			case 4: $catName = "juices"; break;
			case 5: $catName = "products"; break;
		};
		/* RETURN THE FORM FILE TO THE ORDER FORM WITH THE ITEMS VARIABLE */
		return view("/forms/".$catName , compact('items'));
	}


	/** SAVE NEW ORDER TO DATABASE (STORE) */
	public function store(Request $request)
	{
		/* VALIDATE DATA COMING IN FROM FORM */
		$this->validate(request(), [
			'user_id' => 'required',
			'store_id' => 'required',
			'is_filled' => 'required',
			'category_id' => 'required',
			'notes' => 'nullable',
			'items' => 'required'   
		]);
		/* CREATE NEW ORDER */
		$order = new Order(
			[
				'user_id' => $request->user_id,
				'store_id' => $request->store_id,
				'is_filled' => $request->is_filled,
				'category_id' => $request->category_id,
				'notes' => $request->notes,
				'items' => $request->items,
			]
		);
		/* SAVE NEW ORDER TO DATABASE */
		$order->save();
		/* SET VARIABLES FOR EMAIL */
		$manager = User::findOrFail('1');
		$items = $order['items'];
		/* IF ORDER DOESNT SAVE */
		if(!$order->save()) {
			/* SET FLASH MESSAGE */
			$message = 'Contact manager. ERROR: Order could not be saved';
		} else {
			try {
				/* SEND EMAIL */
				$message = 'Order Sent Successfully';
				Mail::to($manager)->send(new OrderEmail($order, $items));
			} catch (Exception $e){
				/* SET FLASH AND ERROR MESSAGES */
	        	$message = 'Contact manager. ERROR: Order could not be emailed';
	        	$errorMsg = 'Order #'. $order->id . ' was unable to send - '. "\r\n". $e->getMessage();
	        	/* WRITE ERROR TO EMERGENCY ERROR LOG */
				Log::emergency($errorMsg);
	        }
		};
		/* REDIRECT USER AND SHOW CONFIRMATION */
		session()->flash('message', $message);
		return redirect()->route('orders.index');
	}


	/** SHOW A SINGLE ORDER (SHOW) */
	public function show(Order $order)
	{
		return view('orders.show', compact('order'));
	}


	/** UPDATE ORDER FROM IS_FILLED=0 TO IS_FILLED=1 + UPDATE ON DB
		This is done via ajax - see orders-ajax.js
		Triggered by button click on orders.show and/or orders.index
	*/
	public function update(Request $request, Order $order)
	{
		/* VALIDATE DATA COMING IN FROM FORM */
		$this->validate(request(), [
			'user_id' => 'required',
			'store_id' => 'required',
			'is_filled' => 'required',
			'category_id' => 'required',
			'notes' => 'nullable',
			'items' => 'required'   
		]);
		/* CREATE UPDATED ITEM */
		$order->update( [
			'user_id' => $request->user_id,
			'store_id' => $request->store_id,
			'is_filled' => 1,
			'category_id' => $request->category_id,
			'notes' => $request->notes,
			'items' => $request->items,
		]);
		/* REDIRECT USER AND CONFIRM EDIT  */
		if(!$order->update()) {
			session()->flash('message', 'Contact Manager. ERROR: Order did not get marked filled');
		} else {
			session()->flash('message', 'Order Marked as Filled');
		}
		return redirect()->route('orders.index');
	}

}
