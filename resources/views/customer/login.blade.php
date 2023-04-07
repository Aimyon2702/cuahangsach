@extends('layouts.sitelogin')

@section('main')

<div class="div-center">
    <div class="content">
        <h3>Đăng nhập tài khoản</h3>       
        <hr />
        <form method="POST" role="form">
            @if($errors->all())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                @endforeach
            </div>
            @endif
            @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" value="1">
                        Ghi nhớ mật khẩu
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
            <hr />
            <a href="{{route('customer.register')}}">Đăng ký tài khoản mới</a>


        </form>
    </div>
</div>

@endsection