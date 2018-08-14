<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// HOME / LOGIN ROUTE
Route::get('/', function () {
    return view('auth/login');
});

// LOGIN/LOGOUT AUTHENTICATION ROUTES...
// Prevented Guest Registration by Breaking out Auth Routes Required for login/logout only
$this->get('/', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// ORDERS
Route::get('/orders/storesbycat', 'OrderController@storesbycat');
Route::resource('orders', 'OrderController');

/* ADMIN SECTION  ---  Managers + Admin Roles Only */
Route::prefix('admin')->group(function () {
	/* ADMIN INDEX */
	Route::view('/', 'admin.index');

	/* ITEMS INDEX + CRUD */
	Route::resource('items', 'ItemController');

	/* CATEGORIES INDEX + CRUD  ---  Admin Roles Only */
	Route::resource('categories', 'CategoryController');

	/* VENDORS INDEX + CRUD  ---  Admin Roles Only */
	Route::resource('vendors', 'VendorController');

	/* STORES INDEX + CRUD */
	Route::resource('stores', 'StoreController');

	/* SIZES INDEX + CRUD */
	Route::resource('sizes', 'SizeController');

	/* USERS INDEX + CRUD  ---  Admin Roles Only */
	Route::resource('users', 'UserController');

	/* ROLES INDEX + CRUD  ---  Admin Roles Only */
	Route::resource('roles', 'RoleController');
});
