<?php

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
Route::get('/orders/getStoresByCat', 'OrderController@getStoresByCat');
Route::get('/orders/getFormItems', 'OrderController@getFormItems');
Route::resource('orders', 'OrderController');

// FORMS
Route::get('/forms/juices', 'FormController@getJuiceForm');
Route::get('/forms/flavors', 'FormController@getFlavorForm');
Route::get('/forms/products', 'FormController@getProductForm');
Route::get('/forms/supplies', 'FormController@getSupplyForm');
Route::get('/forms/labels', 'FormController@getLabelForm');

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
	Route::resource('users', 'UserController');
	/* ROLES INDEX + CRUD */
	Route::resource('roles', 'RoleController');
});
