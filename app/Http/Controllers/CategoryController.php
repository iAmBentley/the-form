<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL CATEGORIES (INDEX) */
    public function index()
    {
        $categories = Category::all();
        return view('admin/categories.index', compact('categories'));
    }


    /** CREATE NEW CATEGORY FORM (CREATE) */
    public function create()
    {
       return view('admin/categories.create', compact('category'));
    }


    /** SAVE NEW CATEGORY TO DATABASE (STORE) */
    public function store()
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'is_active' => 'required'
        ]);
        /* CREATE AND SAVE NEW CATEGORY TO DATABASE */
        Category::create([
            'name' => request('name'),
            'is_active' => request('is_active')
        ]);
        /* REDIRECT USER AFTER SAVE */
        session()->flash('message', 'Category Added Successfully');
        return redirect('admin/categories');
    }


    /** EDIT A CATEGORY FORM (EDIT) */
    public function edit($id)
    {
        /* GET THE CATEGORY */
        $category = Category::find($id);
        /* SHOW THE EDIT FORM FOR THE CATEGORY */
        return view('admin/categories.edit', compact('category'));
    }


    /** SAVE EDITED CATEGORY TO DATABASE (UPDATE) */
    public function update(Request $request, Category $category)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $data = $request->validate([
            'name' => 'required',
            'is_active' => 'required'
        ]);

        /* SAVE VALIDATED DATA TO DATABASE */
        $category->fill($data);
        $category->save();

        /* CONFIRM UPDATE AND REDIRECT USER */
        session()->flash('message', 'Category Updated Successfully');
        return redirect('admin/categories');
    }
}
