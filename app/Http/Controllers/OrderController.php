<?php

namespace App\Http\Controllers;

use App\Order;
use App\Store;
use App\Category;
use App\User;
use App\Mail\OrderEmail;
use Illuminate\Http\Request;

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
		$categories = Category::all();
		$stores = Store::all();
		/* RETURN VIEW AND PASS VARIABLES */
		return view('orders.create', compact('orders', 'categories', 'stores'));

	}


	/** GET STORES BY CATEGORY (AJAX - DROPDOWN ON.CHANGE) */
	public function getStoresByCat(Request $request)
	{
		/* SET CORE VARIABLES */
		$selectedCatId = $request->selectedCat;
		$storesByCat = Category::with('stores')->where('id', $selectedCatId)->get();
		/* PASS JSON BACK TO AJAX FILE */
		return response()->json($storesByCat->toArray());
		
	}

	/** GET ITEMS BY STORE BASED ON CATEGORY (AJAX - DROPDOWN ON.CHANGE) */
	public function getFormItems(Request $request)
	{
		/* SET CORE VARIABLES */
		$selectedStoreId = $request->selectedStore;
		$formItems = Category::with('items')->where('id', $selectedStoreId)->get();
		/* PASS JSON BACK TO AJAX FILE */
		return response()->json($formItems);
		
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

        /* SEND ITEMS REQUEST EMAIL TO MANAGER */
        $manager = User::where('name', 'bentley')->get();
        $items = $order['items'];
        \Mail::to($manager)->send(new OrderEmail($order, $items));

		/* REDIRECT USER AND SHOW CONFIRMATION */
		session()->flash('message', 'Order Created Successfully');
		return redirect('orders');

	}


	/** SHOW A SINGLE ORDER (SHOW) */
	public function show(Order $order)
	{
		$items = $order['items'];
		return view('orders.show', compact('order', 'items'));
	}


	/** EDIT AN ORDER FORM (EDIT) */
	public function edit(Order $order)
	{
		//
	}


	/** SAVE EDITED ORDER TO DATABASE (UPDATE) */
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
        session()->flash('message', 'Order Marked as Filled');
        return redirect('orders');
	}

}
