@extends('layouts.sitelogin')

@section('main')
<div class="container">
    @if($errors->all())      
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>            
    @endif
    <form action="" method="POST" role="form">
        <legend>Đăng ký tài khoản</legend>
        @csrf
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhập tên">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Nhập email">
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                </div>

                <div class="form-group">
                    <label for="">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Đăng ký</button>
        <hr>
        <a href="{{route('customer.login')}}">Đăng nhập ngay</a>
    </form>


</div>

@endsection