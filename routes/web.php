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



Route::get('/','FrontController@index')->name('home');
Route::get('/product','FrontController@product')->name('product');
Route::get('/detail','FrontController@detail')->name('detail');



Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('/', function (){
		return view('admin.index');
	})->name('admin.index');
	
	Route::resource('product','ProductController');
	Route::get('category/create','CategoryController@index')->name('categoryCreate');
	Route::post('category/create','CategoryController@store');
});
