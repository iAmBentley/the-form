<?php

namespace App\Http\Controllers;

use App\Category;
use App\Size;
use App\Item;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
	public function __construct()
	{
		$this->middleware('auth');
	}


	/** SHOW TABLE OF ALL ORDERS (INDEX) */
	public function getJuiceForm(Request $request)
	{

		$juices = Category::with('items')->where('name', 'juices')->get();
		return view('forms.juices', compact('juices'));
	}


	/** SHOW TABLE OF ALL ORDERS (INDEX) */
	public function getFlavorForm(Request $request)
	{
		/* SET CORE VARIABLES */
		// $category_id = $request->selectedCat;
		// $store_id = $request->selectedStore;

		/* QUERY ITEMS WITH SELECTED CAT_ID AND SELECTED STORE_ID */
		// $flavors = Item::whereHas('categories', function ($query) use ($category_id) {
		// 	$query->where('id','=',$category_id);
		// })
		// ->whereHas('stores', function ($query) use ($store_id) {
		// 	$query->where('id','=',$store_id);
		// })
		// ->with(['categories','stores'])
		// ->where('is_active', 1)
		// ->get();

		// echo '<pre>';
		// print_r($flavors);
		// exit();
		// echo '</pre>';

		/* PASS JSON BACK TO AJAX FILE */
		// return response()->json($items);
		// return view('forms.flavors', compact('flavors'));

		// $flavors = \Session::get($items);

		// echo '<pre>';
		// print_r($flavors);
		// exit();
		// echo '</pre>';

		$flavors = Category::with('items')->where('name', 'flavors')->get();
		return view('forms.flavors', compact('flavors'));
	}


	/** SHOW TABLE OF ALL ORDERS (INDEX) */
	public function getProductForm(Request $request)
	{
		$products = Category::with('items')->where('name', 'products')->get();
		return view('forms.products', compact('products'));
	}


	/** SHOW TABLE OF ALL ORDERS (INDEX) */
	public function getSupplyForm(Request $request)
	{
		$supplies = Category::with('items')->where('name', 'supplies')->get();
		return view('forms.supplies', compact('supplies'));
	}


	/** SHOW TABLE OF ALL ORDERS (INDEX) */
	public function getLabelForm(Request $request)
	{
		$labels = Category::with('items')->where('name', 'labels')->get();
		return view('forms.labels', compact('labels'));
	}
}
