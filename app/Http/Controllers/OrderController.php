<?php

namespace App\Http\Controllers;

use App\Order;
use App\Store;
use App\Category;
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
		$orders = Order::all();
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
		return response()->json($formItems->toArray());
		
	}


	/** SAVE NEW ORDER TO DATABASE (STORE) */
	public function store(Request $request)
	{
		// return response()->json($request);

		/* VALIDATE DATA COMING IN FROM FORM */
		$this->validate(request(), [
			'user_id' => 'required',
			'store_id' => 'required',
			'is_active' => 'required',
			'category_id' => 'required',
			'items' => 'required'   
		]);
		/* CREATE NEW ITEM */
		$order = new Order(
			[
				'user_id' => $request->user_id,
				'store_id' => $request->store_id,
				'is_active' => $request->is_active,
				'category_id' => $request->category_id,
				'items' => $request->items,
			]
		);
		/* SAVE NEW ITEM TO DATABASE */
		$order->save();
		/* CONFIRM CREATION AND REDIRECT USER */
		session()->flash('message', 'Order Created Successfully');
		return redirect('orders');
		// return response()->json($request);

	}


	/** SHOW A SINGLE ORDER (SHOW) */
	public function show($id)
	{
		//
	}


	/** EDIT AN ORDER FORM (EDIT) */
	public function edit($id)
	{
		//
	}


	/** SAVE EDITED ORDER TO DATABASE (UPDATE) */
	public function update(Request $request, Order $order)
	{
		//
	}

}
