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
    return view('welcome');
});
Route::get('/home',function(){
	return view('home');
});
Route::post('/home',function(Illuminate\Http\Request $request){
	$productDescription =	$request->ProductDescription;
	$listPrice = $request->ListPrice;
	$discountPercent = $request->DiscountPercent/100;
	$DiscountAmount  = $listPrice*$discountPercent*0.1;
	$listPriceAfter = $listPrice - $DiscountAmount;
	return view('show', compact(['productDescription','listPrice','discountPercent',"DiscountAmount","listPriceAfter"]));
});