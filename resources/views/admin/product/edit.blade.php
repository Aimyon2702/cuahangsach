@extends('layouts.admin')
@section('title','Edit Product')
@section('main')

<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-md-8">

            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Tác giả</label>
                <input type="text" class="form-control" name="author" value="{{$product->author}}">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Thông tin chi tiết</label>
                <textarea name="description" id="description" rows="8" class="form-control" value=""><?php echo $product->description; ?></textarea>
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Trạng thái</label>
                <div class="radio">
                    <label for="">
                        <input type="radio" name="status" value="1" <?php echo $product->status == 1 ? 'checked' : '' ?>>
                        Hiện
                    </label>
                    <label for="">
                        <input type="radio" name="status" value="0" <?php echo $product->status == 0 ? 'checked' : '' ?>>
                        Ẩn
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
        </div>
        <div class="col-md-4">

            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="category_id" class="form-control" required="required">
                    <option value="">Chọn danh mục</option>
                    @foreach($cats as $cat)
                    <?php $selected = $cat->id  == $product->category_id ? 'selected' : ''; ?>
                    <option {{$selected}} value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" class="form-control" name="available" value="{{$product->available}}">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}">
                        @error('price')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Giá khuyến mãi</label>
                        <input type="text" class="form-control" name="sale_price" value="{{$product->sale_price}}">
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
                        <input type="text" class="form-control" name="page" value="{{$product->page}}">
                        @error('price')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Trọng lượng</label>
                        <input type="text" class="form-control" name="weight" value="{{$product->weight}}">
                        @error('sale_price')
                        <small class="help-block">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" name="image" id="image" value="{{$product->image}}">

                @error('image')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div> -->

            <img src="{{url('public/uploads')}}/{{$product->image}}" alt="" id="show_img" style="width:93%">
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