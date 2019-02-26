<?php

Route::get('/', function () {
    return view('welcome');
});
//vô thẳng action http://localhost/25.2.2019-LARAVEL/greeting/public/greeting
Route::get("greeting",function(){
	echo "Hello world";
});
//cập nhật lại name = ? nếu nhập tên sau action là gì thì nó sẽ hiển thị tên đó
Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});