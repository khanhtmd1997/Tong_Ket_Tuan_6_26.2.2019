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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', 'IndexController@index');
Route::get('/caculator', function () {
    return view('caculator');
});
Route::get('/caculator', 'CaculatorController@Caculator');
// Route::get('/caculator', 'CaculatorController@subtraction');