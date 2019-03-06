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


Route::get('/', [
	'uses' => 'CustomerController@index',
	'as' =>'index'
]);

  Route::get('/create', function () {
      return view('create');
  });

 Route::post('/create', [
	'uses' => 'CustomerController@store',
	'as' =>'store'
]);
Route::get('/show/{id}', [
	'uses' => 'CustomerController@show',
	'as' =>'show'
]);


 Route::get('/showEdit/{id}', [
	'uses' => 'CustomerController@showEdit',
	'as' =>'showEdit'
]);

 Route::post('/showEdit/{id}', [
	'uses' => 'CustomerController@update',
	'as' =>'update'
]);

 Route::get('/{id}', [
	'uses' => 'CustomerController@delete',
	'as' =>'delete'
]);

Route::group(['prefix' => 'logins'], function () {
	Route::get('/index','LoginController@index')->name('logins.index');
	Route::get('/login', 'LoginController@showLogin')->name('logins.login');
	Route::post('/login', 'LoginController@login')->name('logins.login');

});
Route::group(['prefix' => 'blogs'], function () {
	Route::get('/index', 'BlogController@index')->name('blogs.index');
});


Route::group(['prefix' => 'logout'], function () {
	Route::get('/', 'LogoutController@logout')->name('logout'); 
});