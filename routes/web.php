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



Route::get('/home', 'PagesController@home');
Route::get('/register', 'PagesController@register');
Route::get('/contactus', 'PagesController@contactus');
Route::get('/about', 'PagesController@aboutus');
Route::get('/services', 'PagesController@services');


