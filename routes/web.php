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
/**
 * Landing page routes
 */
Route::view('/','landing');

/**
 *  Authorization routes
 */
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/**
 * Main Controllers routes
 */
Route::group(['prefix' => 'home'], function(){
	
	Route::get('/', 'HomeController@index')->name('home');
	Route::view('investments','working')->name('investments');
	Route::view('payments','payment')->name('payment'); 
	Route::view('loans','working')->name('loans');
});
Route::group(['prefix' => 'accounts'], function(){
	Route::get('/','AccountController@index')->name('accounts');
	Route::get('/{number}','AccountController@show')->name('account');
});
Route::group(['prefix' => 'transfers'], function(){
	Route::get('/','TransferController@index')->name('transfers');
	Route::get('/new','TransferController@create')->name('newTransfer');
	Route::post('/','TransferController@store')->name('sendTransfer');
});
Route::group(['prefix' => 'profile'], function(){

	Route::get('/',"ProfileController@edit")->name('profile.edit');
	Route::post('/','ProfileController@update')->name('profile.update');
});
Route::group(['prefix' => 'cards'],function(){
	Route::get('/','CardController@index')->name('cards');
});
