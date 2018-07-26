<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL ROLES (INDEX) */
    public function index()
    {
        $roles = Role::all();
        return view('admin/roles.index', compact('roles'));
    }


    /** CREATE NEW ROLE FORM (CREATE) */
    public function create()
    {
        return view('admin/roles.create', compact('role'));
    }


    /** SAVE NEW ROLE TO DATABASE (STORE) */
    public function store()
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required'
        ]);
        /* CREATE AND SAVE NEW ROLE TO DATABASE */
        Role::create([
            'name' => request('name')
        ]);
        /* REDIRECT ROLE AFTER SAVE */
        session()->flash('message', 'Role Added Successfully');
        return redirect('admin/roles');
    }


    /** EDIT A ROLE FORM (EDIT) */
    public function edit($id)
    {
        /* GET THE ROLE */
        $role = Role::find($id);
        /* SHOW THE EDIT FORM FOR THE ROLE */
        return view('admin/roles.edit', compact('role'));
    }


    /** SAVE EDITED ROLE TO DATABASE (UPDATE) */
    public function update(Request $request, Role $role)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $data = $request->validate([
            'name' => 'required'
        ]);

        /* SAVE VALIDATED DATA TO DATABASE */
        $role->fill($data);
        $role->save();

        /* CONFIRM UPDATE AND REDIRECT USER */
        session()->flash('message', 'Role Updated Successfully');
        return redirect('admin/roles');
    }
}
