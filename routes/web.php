<?php


Route::get('/', function () {
    return view('auth.login');
});
// Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Auth\RegisterController@register');


// Route::get('customer/register', 'Auth\CustomerRegisterController@showCustomerRegisterForm')->name('customer-register'); 
// Route::post('customer/register', 'Auth\CustomerRegisterController@createCustomer');


// Route::get('customer/register','Backend\CustomerController@create')->name('customer.register');
// Route::post('customer/register','Backend\CustomerController@store')->name('customer.register.store');


Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']], function(){



	Route::get('dashboard','Backend\DashboardController@index')->name('dashboard');

	// Route::resource('users','Backend\UserController');

	// Customer
	Route::get('customers','Backend\CustomerController@index')->name('customers.index');

	//Dealer
	Route::resource('dealers','Backend\DealerController');


    
	
});

