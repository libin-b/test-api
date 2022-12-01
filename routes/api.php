<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    
    Route::post('/expense_heads/test', 'ExpenseHeadController@test');
    Route::post('/customers/store', 'CustomerController@store_customer')->name('customers.store');
    
    
    Route::get('/customers', 'CustomerController@index')->name('customers.index');
    Route::get('/customers/edit/{id}', 'CustomerController@edit')->name('customers.edit');
    });
Route::post("login",'UserController@index');

