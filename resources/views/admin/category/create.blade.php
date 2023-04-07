@extends('layouts.admin')    
@section('title','Add Category')
@section('main')

<form action="{{route('category.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục" >
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        <div class="radio">
            <label for="">
                <input type="radio" name="status" value="1" checked>
                Hiện
            </label>
            <label for="">
                <input type="radio" name="status" value="0">
                Ấn
            </label>
        </div>
        <!-- <div class="form-group">
          <label for="">Prioty</label>
          <input type="number" class="form-control" name="prioty">
          @error('prioty')
          <small class="help-block">{{$message}}</small>
          @enderror
        </div> -->
    </div>
    <button type="submit" class="btn btn-primary" >Lưu</button>
</form>

@stop()