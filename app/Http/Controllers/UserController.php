<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL USER (INDEX) */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin/users.index', compact('users'));
    }


    /** CREATE NEW USER FORM (CREATE) */
    public function create()
    {
        $role = Role::all();
        return view('admin/users.create', compact('user', 'role'));
    }


    /** SAVE NEW USER TO DATABASE (STORE) */
    public function store(Request $request)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'nullable',
            'password' => 'required|min:4',
            'role_id' => 'required',
            'is_active' => 'required|boolean',
        ]);
        /* CREATE AND SAVE NEW USER TO DATABASE */
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => request('role_id'),
            'is_active' => request('is_active')
        ]);
        /* REDIRECT USER AFTER SAVE */
        session()->flash('message', 'User Added Successfully');
        return redirect('admin/users');
    }


    /** EDIT A USER FORM (EDIT) */
    public function edit($id)
    {
        /* GET THE USER */
        $user = User::find($id);
        /* SHOW THE EDIT FORM FOR THE USER */
        return view('admin/users.edit', compact('user'));
    }


    /** SAVE EDITED USER TO DATABASE (UPDATE) */
    public function update(Request $request, User $user)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'password' => 'required|min:4',
            'role_id' => 'required',
            'is_active' => 'required|boolean'
        ]);
        /* SAVE VALIDATED DATA TO DATABASE */
        $user->fill([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => request('role_id'),
            'is_active' => request('is_active')
        ])->save();
        /* CONFIRM UPDATE AND REDIRECT USER */
        session()->flash('message', 'User Updated Successfully');
        /* IF LOGGED IN USER IS NOT STAFF - REDIRECT TO USERS.INDEX - ELSE - GO TO THEIR PROFILE EDIT PAGE */
        if(\Auth::user()->role_id != 3) {
            return redirect('admin/users');
        } else {
            return back();
        };
    }


    /** DELETE USER FROM DATABASE */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        session()->flash('message', 'User Deleted Successfully');
        return redirect('admin/users');
    }

}
