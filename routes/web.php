<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/customers', 'CustomerController');

Route::resource('/vendors', 'VendorController');

Route::resource('/expense_heads', 'ExpenseHeadController');

Route::resource('/expenses', 'ExpenseController');

Route::resource('/items', 'ItemsController');

Route::resource('/tax_purchases', 'TaxPurchasesController');

Route::resource('/orders', 'OrderController');

Route::resource('/bills', 'BillController');

Route::resource('/purchases', 'PurchaseController');

Route::post('/vehicles/getUnit', 'VehicleController@getUnit');
Route::resource('/vehicles', 'VehicleController');