@extends('layouts.admin')
@section('title','Add Category')
@section('main')

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">

            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Tác giả</label>
                <input type="text" class="form-control" name="author" placeholder="Nhập tác giả">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Chi tiết</label>
                <textarea name="description" rows="8" class="form-control" placeholder="Nhập chi tiết"></textarea>
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

        </div>
        <div class="col-md-4">

            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="category_id" class="form-control" required="required">
                    <option value="">Chọn danh mục</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" class="form-control" name="available" placeholder="Nhập số lượng">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="text" class="form-control" name="price" placeholder="Nhập giá">
                        @error('price')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Giá khuyến mãi</label>
                        <input type="text" class="form-control" name="sale_price" placeholder="Nhập giá khuyến mãi">
                        @error('sale_price')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Số trang</label>
                        <input type="text" class="form-control" name="page" placeholder="Nhập số trang">
                        @error('price')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Trọng lượng</label>
                        <input type="text" class="form-control" name="weight" placeholder="Nhập khối lượng">
                        @error('sale_price')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" class="form-control" name="file_upload" placeholder="Chèn ảnh">
                        @error('image')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="radio">
                            <label for="">
                                <input type="radio" name="status" value="1" checked>
                                Hiện
                            </label>
                            <label for="">
                                <input type="radio" name="status" value="0">
                                Ẩn
                            </label>
                        </div>
                    </div>
                </div>              
            </div>
            
            <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
        </div>
    </div>
</form>

@stop()
@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{url('public/AD')}}/plugins/summernote/summernote-bs4.min.css">
@stop()
@section('js')
<!-- Summernote -->
<script src="{{url('public/AD')}}/plugins/summernote/summernote-bs4.min.js"></script>

<script>
    $(function() {
        $('#content').summernote({
            height: 250,
            placeholder: "Chi tiết sản phẩm"
        });

    })
</script>
@stop()