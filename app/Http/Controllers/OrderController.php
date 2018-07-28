<?php

namespace App\Http\Controllers;

use App\Order;
use App\Store;
use App\Category;
use App\Vendor;
use App\Item;
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
        // dd($orders);
        return view('orders.index', compact('orders'));
    }


    /** CREATE NEW ORDER FORM (CREATE) */
    public function create()
    {
        $orders = Order::all();
        $vendors = Vendor::all();
        $categories = Category::all();
        $stores = Store::all();
        return view('orders.create', compact('orders', 'vendors', 'categories', 'stores'));
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
