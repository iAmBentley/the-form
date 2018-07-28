<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
