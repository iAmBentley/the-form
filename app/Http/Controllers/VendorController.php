<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL VENDORS (INDEX) */
    public function index()
    {
        $vendors = Vendor::all();
        return view('admin/vendors.index', compact('vendors'));
    }


    /** CREATE NEW VENDOR FORM (CREATE) */
    public function create()
    {
        return view('admin/vendors.create', compact('vendor'));
    }


    /** SAVE NEW VENDOR TO DATABASE (STORE) */
    public function store(Request $request)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'short_name' => 'required',
            'is_active' => 'required'
        ]);
        /* CREATE AND SAVE NEW VENDOR TO DATABASE */
        Vendor::create([
            'name' => request('name'),
            'short_name' => request('short_name'),
            'is_active' => request('is_active')
        ]);
        /* REDIRECT USER AFTER SAVE */
        session()->flash('message', 'Vendor Added Successfully');
        return redirect('admin/vendors');
    }


    /** EDIT A VENDOR FORM (EDIT) */
    public function edit($id)
    {
        /* GET THE CATEGORY */
        $vendor = Vendor::find($id);
        /* SHOW THE EDIT FORM FOR THE CATEGORY */
        return view('admin/vendors.edit', compact('vendor'));
    }


    /** SAVE EDITED VENDOR TO DATABASE (UPDATE) */
    public function update(Request $request, Vendor $vendor)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $data = $request->validate([
            'name' => 'required',
            'short_name' => 'required',
            'is_active' => 'required'
        ]);

        /* SAVE VALIDATED DATA TO DATABASE */
        $vendor->fill($data);
        $vendor->save();

        /* CONFIRM UPDATE AND REDIRECT USER */
        session()->flash('message', 'Vendor Updated Successfully');
        return redirect('admin/vendors');
    }
}
