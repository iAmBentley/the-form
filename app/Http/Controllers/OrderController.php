<?php

namespace App\Http\Controllers;

use App\Order;
use App\Store;
use App\Category;
use App\Vendor;
use App\Item;
use App\Size;
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
		$orders = Order::all();
		return view('orders.index', compact('orders'));
	}


	/** CREATE NEW ORDER FORM (CREATE) */
	public function create(Request $request)
	{
		/* CORE VARIABLES */
		$categories = Category::all();
		$stores = Store::all();
		$items = Item::with('sizes')->get();
		$dripline = Item::where('is_drip', 1)->get();

		/* ITEM FILTERING BY CATEGORY */
		$products = Category::with('items')->where('name', 'products')->get();
		$flavors = Category::with('items')->where('name', 'flavors')->get();
		$juices = Category::with('items')->where('name', 'juices')->get();
		$labels = Category::with('items')->where('name', 'labels')->get();
		$supplies = Category::with('items')->where('name', 'supplies')->get();

		/* SIZE FILTERING BY CATEGORY */
		$labelSizes = Size::where('category_id', 2)->get();
		$juiceSizes = Size::where('category_id', 4)->get();
		
		return view('orders.create', 
			compact(
				'orders', 'categories', 'stores', 'items', 'dripline',
				'products', 'flavors', 'juices', 'labels', 'supplies',
				'labelSizes', 'juiceSizes'
			)
		);
	}


	/** GET STORES BY CATEGORY (AJAX - DROPDOWN ON.CHANGE) */
	public function getStoresByCat(Request $request)
	{

		$selectedCatId = $request->selectedCat;

		$storesByCat = Category::with('stores')->where('id', $selectedCatId)->get(); 

		return response()->json($storesByCat->toArray());
		
	}

	/** GET ITEMS BY STORE BASED ON CATEGORY (AJAX - DROPDOWN ON.CHANGE) */
	public function getFormItems(Request $request)
	{

		$selectedStoreId = $request->selectedStore;
		$formItems = Category::with('items')->where('id', $selectedStoreId)->get();
		return response()->json($formItems->toArray());
		
	}


	/** SAVE NEW ORDER TO DATABASE (STORE) */
	public function store(Request $request)
	{
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
