<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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


Route::get('/mail', function () {
    Mail::to('libinb4401@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/create', 'HomeController@create')->name('home.create');


Route::resource('/excel', 'ExcelController');

Route::resource('/customers', 'CustomerController');

Route::post('/vehicles/getUnit', 'VehicleController@getUnit');
Route::resource('/vehicles', 'VehicleController');