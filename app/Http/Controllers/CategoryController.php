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
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.categories.index', compact('categories'));
    }


    /** CREATE NEW CATEGORY FORM (CREATE) */
    public function create()
    {
       return view('admin.categories.create');
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
        return redirect()->route('categories.index');
    }


    /** EDIT A CATEGORY FORM (EDIT) */
    public function edit(Category $category)
    {
        /* SHOW THE EDIT FORM FOR THE CATEGORY */
        return view('admin.categories.edit', compact('category'));
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
        if(!$category->save()) {
            session()->flash('message', 'Contact Manager. ERROR: Category did not update');
        } else {
            session()->flash('message', 'Category Updated Successfully');
        }
        return redirect()->route('categories.index');
    }
}
