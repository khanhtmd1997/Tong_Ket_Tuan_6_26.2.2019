<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
class LoginController extends Controller
{
	public function index(){
		return view('logins.index');
	}
    public function showLogin(){
    	return view('logins.login');
	}

	public function login(Request $request){
		$username = $request->inputUsername;
   	 	$password = $request->inputPassword;

   	 	if ($username == 'admin' && $password == '123456') {
   	 		$request->session()->push('login', true);
   	 		return redirect()->route('blogs.index');
		}
		$message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
    	$request->session()->flash('login-fail', $message);
    	return view('logins.login');
    }
}
