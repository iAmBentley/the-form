<?php

namespace App\Http\Controllers;

use App\Item;
use App\Store;
use App\Category;
use App\Vendor;
use App\Size;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL CATEGORIES (INDEX) */
    public function index()
    {
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('admin/items.index', compact('items'));
    }


    /** CREATE NEW ITEM FORM (CREATE) */
    public function create()
    {
        /* GET THE CATEGORIES + STORES + VENDORS */
        $categories = Category::where('is_active', 1)->get();
        $stores = Store::where('is_active', 1)->get();
        $vendors = Vendor::where('is_active', 1)->get();
        $sizes = Size::where('is_active', 1)->get();
        /* SHOW THE CREATE FORM FOR THE ITEM */
        return view('admin/items.create', compact('item', 'categories', 'stores', 'vendors', 'sizes'));
    }


    /** SAVE NEW ITEM TO DATABASE (STORE) */
    public function store(Request $request)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'is_drip' => 'nullable',
            'vendor_id' => 'nullable',
            'is_active' => 'required',   
        ]);
        /* CREATE NEW ITEM */
        $item = new Item(
            [
                'name' => $request->name,
                'is_drip' => $request->is_drip,
                'vendor_id' => $request->vendor_id,
                'is_active' => $request->is_active,
            ]
        );
        /* SAVE NEW ITEM TO DATABASE */
        $item->save();
        $item->categories()->attach($request->category);
        $item->sizes()->attach($request->size);
        $item->stores()->attach($request->store);
        /* CONFIRM CREATION AND REDIRECT USER */
        if (!$item->save()) {
            session()->flash('message', 'Contact Manager. ERROR: Item did not saved');
        } else {
            session()->flash('message', 'Item Created Successfully');
        }
        return redirect('/admin/items');
    }


    /** EDIT A ITEM FORM (EDIT) */
    public function edit(Item $item)
    {
        /* GET THE CATEGORIES + STORES + VENDORS */
        $categories = Category::where('is_active', 1)->get();
        $stores = Store::where('is_active', 1)->get();
        $vendors = Vendor::where('is_active', 1)->get();
        $sizes = Size::where('is_active', 1)->get();
        /* SHOW THE EDIT FORM FOR THE ITEM */
        return view('admin/items.edit', compact('item', 'categories', 'stores', 'vendors', 'sizes'));
    }


    /** SAVE EDITED ITEM TO DATABASE (UPDATE) */
    public function update(Request $request, Item $item)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'is_drip' => 'nullable',
            'vendor_id' => 'nullable',
            'is_active' => 'required',   
        ]);
        /* CREATE UPDATED ITEM */
        $item->update( [
            'name' => $request->name,
            'is_drip' => $request->is_drip,
            'vendor_id' => $request->vendor_id,
            'is_active' => $request->is_active,
        ]);
        /* SAVE UPDATED ITEM TO DATABASE */
        $item->categories()->sync($request->category);
        $item->sizes()->sync($request->size);
        $item->stores()->sync($request->store);
        /* CONFIRM CREATION AND REDIRECT USER */
        if(!$item->update()) {
            session()->flash('message', 'Contact Manager. ERROR: Item did not update');
        } else {
            session()->flash('message', 'Item Updated Successfully');
        }
        return redirect('/admin/items');
    }

}
