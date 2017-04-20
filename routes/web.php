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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/','homePageController@load');
Route::get('/itemdetails', function() {

	return view('itemdetails');
});
Route::get('/search',"searchcontroller@getQuery");
Route::get('/cart', function(){
	return view('cart');
});
//for login logout
Auth::routes();

//upload image start 
// Route::get('/test1',function(){
// 	return view('hello');

// });
// Route::post('/test','uploadcontroller@uploadImage');
//upload image end
Route::get('database', function(){
	$t = DB::table('monan') -> join('chitietmonan','monan.idMonAn','=','chitietmonan.idMonAn')-> join('khuvuc','khuvuc.idKhuVuc','=','chitietmonan.idKhuVuc')->get();
	return $t;
});
