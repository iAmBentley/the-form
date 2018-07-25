<?php

namespace App\Http\Controllers;

use App\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL USER ROLES (INDEX) */
    public function index()
    {
        $userRoles = UserRole::all();
        return view('admin/user-roles.index', compact('userRoles'));
    }


    /** CREATE NEW CATEGORY FORM (CREATE) */
    public function create()
    {
        return view('admin/user-roles.create', compact('userRole'));
    }


    /** SAVE NEW CATEGORY TO DATABASE (STORE) */
    public function store()
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required'
        ]);
        /* CREATE AND SAVE NEW USER ROLE TO DATABASE */
        UserRole::create([
            'name' => request('name')
        ]);
        /* REDIRECT USER AFTER SAVE */
        session()->flash('message', 'User Role Added Successfully');
        return redirect('admin/user-roles');
    }


    /** EDIT A USER ROLE FORM (EDIT) */
    public function edit($id)
    {
        /* GET THE USER ROLE */
        $userRole = UserRole::find($id);
        /* SHOW THE EDIT FORM FOR THE USER ROLE */
        return view('admin/user-roles.edit', compact('userRole'));
    }


    /** SAVE EDITED USER ROLE TO DATABASE (UPDATE) */
    public function update(Request $request, UserRole $userRole)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $data = $request->validate([
            'name' => 'required'
        ]);

        /* SAVE VALIDATED DATA TO DATABASE */
        $userRole->fill($data);
        $userRole->save();

        /* CONFIRM UPDATE AND REDIRECT USER */
        session()->flash('message', 'User Role Updated Successfully');
        return redirect('admin/user-roles');
    }

}
