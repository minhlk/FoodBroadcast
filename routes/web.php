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
    return view('index');
});
Route::get('/itemdetails', function() {

	return view('itemdetails');
});
Route::get('/search',"searchcontroller@getQuery");
Route::get('/cart', function(){
	return view('cart');
});