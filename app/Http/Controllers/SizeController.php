<?php

namespace App\Http\Controllers;

use App\Size;
use App\Category;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL SIZES (INDEX) */
    public function index()
    {
        $sizes = Size::orderBy('created_at', 'desc')->get();
        return view('admin/sizes.index', compact('sizes'));
    }


    /** CREATE NEW SIZE FORM (CREATE) */
    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('admin.sizes.create', compact('categories'));
    }


    /** SAVE NEW SIZE TO DATABASE (STORE) */
    public function store()
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'is_active' => 'required',
            'category_id' => 'required'
        ]);
        /* CREATE AND SAVE NEW SIZE TO DATABASE */
        Size::create([
            'name' => request('name'),
            'category_id' => request('category_id'),
            'is_active' => request('is_active')
        ]);
        /* CONFIRM CREATION AND REDIRECT USER */
        session()->flash('message', 'Size Created Successfully');
        return redirect()->route('sizes.index');
    }


    /** EDIT A SIZE FORM (EDIT) */
    public function edit(Size $size)
    {
        /* GET THE CATEGORIES */
        $categories = Category::where('is_active', 1)->get();
        /* SHOW THE EDIT FORM FOR THE SIZE */
        return view('admin.sizes.edit', compact('size', 'categories'));
    }
    

    /** SAVE EDITED SIZE TO DATABASE (UPDATE) */
    public function update(Request $request, Size $size)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'is_active' => 'required'
        ]);
        /* SAVE VALIDATED DATA TO DATABASE */
        $size->fill($data);
        $size->save();
        /* CONFIRM UPDATE AND REDIRECT USER */
        if(!$size->save()) {
            session()->flash('message', 'Contact Manager. ERROR: Size did not update');
        } else {
            session()->flash('message', 'Size Updated Successfully');
        }
        return redirect()->route('sizes.index');
    }

}
