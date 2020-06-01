<?php

use Illuminate\Http\Request;
use App\Customer;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customer/register', 'Auth\CustomerRegisterController@showCustomerRegisterForm')->name('customer-register'); 
Route::post('customer/register', 'Auth\CustomerRegisterController@createCustomer');

