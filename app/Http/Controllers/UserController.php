<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePassword;

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
        $users = User::orderBy('name')->get();
        return view('admin.users.index', compact('users'));
    }


    /** CREATE NEW USER FORM (CREATE) */
    public function create()
    {
        $role = Role::all();
        return view('admin.users.create', compact('role'));
    }


    /** SAVE NEW USER TO DATABASE (STORE) */
    public function store(Request $request)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'nullable',
            'is_active' => 'required|boolean',
            'password' => 'required|min:4',
            'role_id' => 'required',
        ]);
        /* CREATE AND SAVE NEW USER TO DATABASE */
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'is_active' => request('is_active'),
            'password' => Hash::make(request('password')),
            'role_id' => request('role_id'),
        ]);
        /* REDIRECT USER AFTER SAVE */
        session()->flash('message', 'User Added Successfully');
        return redirect()->route('users.index');
    }


    /** EDIT A USER FORM (EDIT) */
    public function edit($id)
    {
        /* GET THE USER */
        $user = User::find($id);
        /* SHOW THE EDIT FORM FOR THE USER */
        return view('admin.users.edit', compact('user'));
    }


    /** SAVE EDITED USER TO DATABASE (UPDATE) */
    public function update(Request $request, User $user)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'is_active' => 'required|boolean',
            'role_id' => 'required',
        ]);
        /* SAVE VALIDATED DATA TO DATABASE */
        $user->fill([
            'name' => request('name'),
            'email' => request('email'),
            'is_active' => request('is_active'),
            'role_id' => request('role_id'),
        ])->save();
        /* CONFIRM UPDATE AND REDIRECT USER */
        if(!$user->save()) {
            session()->flash('message', 'Contact Manager. ERROR: User did not update');
        } else {
            session()->flash('message', 'User Updated Successfully');
        }
        /* REDIRECT USER */
        if(\Auth::user()->role_id != 3) {
            /* IF ADMIN OR MANAGER GO BACK TO USERS INDEX */
            return redirect()->route('users.index');
        } else {
            /* IF STAFF GO BACK TO ORDERS INDEX */
            return redirect()->route('orders.index');
        };
    }


    /** SHOW FORM FOR EDITING USER PASSWORD */
    public function editPassword(User $user)
    {
        return view('admin.users.edit-pw', compact('user'));
    }


    /** SAVE UPDATED PASSWORD TO DATABASE */
    public function updatePassword(UpdatePassword $request, User $user)
    {
        /* SAVE VALIDATED DATA TO DATABASE */
        $user->password = request('password');
        /* SET SESSION MESSAGE AND REDIRECT USER */
        if (!$user->save()) { 
            session()->flash('message', 'Contact Manager: ERROR: Password did not update');
        } else {
            session()->flash('message', 'Password Updated Successfully');
        }
        if(\Auth::user()->role_id != 3) {
            /* IF ADMIN OR MANAGER GO BACK TO USERS INDEX */
            return redirect()->route('users.index');
        } else {
            /* IF STAFF GO BACK TO ORDERS INDEX */
            return redirect()->route('orders.index');
        };
    }

}
