<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRole;
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
        $users = User::with('userRoles')->get();
        dd($users);
        return view('admin/users.index', compact('users', 'userRoles'));

    }


    /** CREATE NEW USER FORM (CREATE) */
    public function create()
    {
        $userRoles = UserRole::all();
        return view('admin/users.create', compact('user', 'userRoles'));
    }


    /** SAVE NEW USER TO DATABASE (STORE) */
    public function store()
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'nullable|email',
            'password' => 'required|min:4',
            'user_role_id' => 'required',
            'is_active' => 'required|boolean'
        ]);
        /* CREATE AND SAVE NEW USER TO DATABASE */
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt('password'),
            'user_role_id' => request('user_role_id'),
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
        $data = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'password' => 'required|min:4',
            'user_role_id' => 'required',
            'is_active' => 'required|boolean'
        ]);

        /* SAVE VALIDATED DATA TO DATABASE */
        $user->fill($data);
        $user->save();

        /* CONFIRM UPDATE AND REDIRECT USER */
        session()->flash('message', 'User Updated Successfully');
        return redirect('admin/users');
    }

}
