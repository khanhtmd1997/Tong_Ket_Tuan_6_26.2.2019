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
    echo "<h2>This is Home page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});
//http://localhost/25.2.2019-LARAVEL/RouteCoBan/public/user
Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});
//Chúng ta cũng có thể truyền tham số trên thanh địa chỉ khi chạy web, tại routes/web.php tạo thêm route như sau
//http://localhost/25.2.2019-LARAVEL/RouteCoBan/public/user/khanh //khanh là tự đánh thì nó sẽ hiện thị khanh còn nếu đánh chữ khác thì nó sẽ hiển thị chữ khác
Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});
// truyền $name mặc định
//http://localhost/25.2.2019-LARAVEL/RouteCoBan/public/user-name
Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});
//tạo controller cho trang index thì bỏ dòng đầu
// Route::get('/', 'HomeController@index');

//xem gio the gioi
Route::get('/time_world', function () {
    return view('time_world');
});
//xử lý múi giờ
Route::get('/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {

        // Khởi tạo giá trị giờ theo múi giờ UTC
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

        // Thay đổi về múi giờ được chọn
        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

        // Hiển thị giờ theo định dạng mong muốn
        echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
    }
    return view('time_world');
});