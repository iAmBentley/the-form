<?php

// LOGIN - Redirects to orders.index after login
Route::get('/', function () {
    return view('auth/login');
});

// LOGIN/LOGOUT (AUTHENTICATION ROUTES)
Auth::routes(['register' => false]);

// ORDERS
Route::get('/orders/getStoresByCat', 'OrderController@getStoresByCat')->name('orders.stores-by-cat'); // Used on Orders.Create for store data
Route::get('/orders/getFormItems', 'OrderController@getFormItems')->name('orders.form-items'); // Used on Orders.Create for form item data
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
	Route::get('users/{user}/edit-pw', 'UserController@editPassword')->name('users.edit-pw'); // Change Password view
	Route::put('users/{user}/update-pw', 'UserController@updatePassword')->name('users.update-pw'); // Change Password save
	Route::delete('users/{user}', 'UserController@destroy');
	Route::resource('users', 'UserController');
	/* ROLES INDEX + CRUD */
	Route::resource('roles', 'RoleController');
});
