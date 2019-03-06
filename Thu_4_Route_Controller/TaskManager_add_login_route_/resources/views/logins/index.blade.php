@extends('logins/master')
@section('content')
    <div class="title m-b-md">
        Laravel Session
    </div>

    <div class="links">
        <a href="{{ route('logins.login') }}">
            <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
    	</a>
    </div>
@endsection