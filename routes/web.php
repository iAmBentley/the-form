<?php

// LOGIN - Redirects to orders.index after login
Route::get('/', function () {
    return view('auth/login');
});

// LOGIN/LOGOUT (AUTHENTICATION ROUTES)
// Prevented Guest Registration by Breaking out Auth Routes Required for login/logout only
// This replaces the default...  Auth::routes();
$this->get('/', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// ORDERS
Route::get('/orders/getStoresByCat', 'OrderController@getStoresByCat'); // Used on Orders.Create for store data
Route::get('/orders/getFormItems', 'OrderController@getFormItems'); // Used on Orders.Create for form item data
Route::resource('orders', 'OrderController');

/* ADMIN SECTION */
Route::prefix('admin')->group(function () {
	/* ADMIN INDEX */
	Route::view('/', 'admin.index');
	/* ITEMS INDEX + CRUD */
	Route::resource('items', 'ItemController');
	/* CATEGORIES INDEX + CRUD */
	Route::resource('categories', 'CategoryController');
	/* VENDORS INDEX + CRUD */
	Route::resource('vendors', 'VendorController');
	/* STORES INDEX + CRUD */
	Route::resource('stores', 'StoreController');
	/* SIZES INDEX + CRUD */
	Route::resource('sizes', 'SizeController');
	/* USERS INDEX + CRUD */
	Route::get('users/{user}/edit-pw', 'UserController@editPassword'); // Change Password view
	Route::put('users/{user}/update-pw', 'UserController@updatePassword'); // Change Password save
	Route::delete('users/{user}', 'UserController@destroy');
	Route::resource('users', 'UserController');
	/* ROLES INDEX + CRUD */
	Route::resource('roles', 'RoleController');
});
