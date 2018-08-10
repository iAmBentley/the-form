<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth/login');
});

//break the routes out of the helper to kill registration
// Auth::routes();

// Authentication Login/Logout Routes...
$this->get('/', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes... //these get commented out
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orders', 'OrderController');
// Route::get('orders/create', 'OrderController@StoresByCat');

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
