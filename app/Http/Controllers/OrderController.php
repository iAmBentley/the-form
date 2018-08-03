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
    public function create()
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

        /* STORE FILTERING BY CATEGORY */
        $productStores = Category::with('stores')->where('name', 'products')->get();
        $flavorStores = Category::with('stores')->where('name', 'flavors')->get();
        $juiceStores = Category::with('stores')->where('name', 'juices')->get();
        $labelStores = Category::with('stores')->where('name', 'labels')->get();
        $supplyStores = Category::with('stores')->where('name', 'supplies')->get();

        /* SIZE FILTERING VARIABLES */
        $labelSizes = Size::where('category_id', 2)->get();
        $juiceSizes = Size::where('category_id', 4)->get();

        // return response()->json($flavorStores);
        
        return view('orders.create', 
            compact(
                'orders', 'categories', 'stores',
                'items', 'products', 'supplies',
                'flavors', 'juices', 'labels',
                'labelSizes', 'juiceSizes', 'dripline',
                'productStores', 'flavorStores', 'juiceStores',
                'labelStores', 'supplyStores'
            )
        );
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
