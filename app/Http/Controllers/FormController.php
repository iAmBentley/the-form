<?php

namespace App\Http\Controllers;

use App\Category;
use App\Size;
use App\Item;
use App\Vendor;
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
		$items = Item::whereHas('categories', function ($query) {
			$query->where('name','=','flavors');
		})
		->whereHas('stores', function ($query) {
			$query->where('id','=', 1);
		})
		->with(['categories','stores'])
		->where('is_active', 1)
		->orderBy('vendor_id', 'asc')
		->get();

		// $flavors = Category::with('items')->where('name', 'flavors')->get();
		return view('forms.flavors', compact('items'));
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
