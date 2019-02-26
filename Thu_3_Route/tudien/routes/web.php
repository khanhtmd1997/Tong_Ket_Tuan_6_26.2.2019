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

Route::get('/tudien',function(){
	return view('tudien');
});

Route::post('/tudien',function(Illuminate\Http\Request $request){
	$searchVietNam = $request->vietnamese;
	$searchEnglish = $request->english;
	$array = array("xin chào"=> "hello","tạm biệt"=>"goodbye");
	foreach ($array as $key => $value) {
		if($key == $searchVietNam){
			return view('traketqua', compact(['value']));
		}
		else return "không có";
	}

});