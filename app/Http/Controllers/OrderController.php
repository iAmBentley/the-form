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
        $vendors = Vendor::all();
        $categories = Category::all();
        $stores = Store::all();
        $items = Item::with('sizes')->get();
        $dripline = Item::where('is_drip', 1)->get();

        $products = Category::with('items')->where('name', 'products')->get();
        $flavors = Category::with('items')->where('name', 'flavors')->get();
        $juices = Category::with('items')->where('name', 'juices')->get();
        $labels = Category::with('items')->where('name', 'labels')->get();
        $supplies = Category::with('items')->where('name', 'supplies')->get();

        $labelSizes = Size::where('category_id', 2)->get();
        $juiceSizes = Size::where('category_id', 4)->get();

        // return response()->json($juices);
        
        return view('orders.create', 
            compact(
                'orders', 'vendors',
                'categories', 'stores',
                'items', 'products', 'supplies',
                'flavors', 'juices', 'labels',
                'labelSizes', 'juiceSizes', 'dripline'
            ));
    }


    /** SAVE NEW ORDER TO DATABASE (STORE) */
    public function store(Request $request)
    {
        //
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
