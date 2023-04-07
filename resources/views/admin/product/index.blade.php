@extends('layouts.admin')    
@section('title','Product List')
@section('main')


<form action="" class="form-inline">

    <div class="form-group">
        <input class="form-control" name="key" placeholder="Tìm kiếm">
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
</form>

<hr>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Tác giả</th>
            <th>Số lượng</th>
            <th>Danh mục</th>
            <th class="text-center">Giá/ Giảm giá</th>
            <th>Trạng thái</th>
            <th>Ngày thêm</th>
            <th class="text-center">Ảnh</th>
            <th class="text-center">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->author}}</td>
            <td>{{$model->available}}</td>
            <td>{{$model->cat->name}}</td>
            <td>{{$model->price}}/ <span class="badge badge-success"> {{$model->sale_price}} </span></td>
            <td>
                @if($model->status == 0)
                    <span class="badge badge-danger">Ẩn</span>
                @else
                    <span class="badge badge-success">Hiện</span>
                @endif
            </td>
            <td>{{$model->created_at->format('m-d-Y')}}</td>           
            <td>
                <img src="{{url('public/uploads')}}/{{$model->image}}" width="60">
            </td>           
            <td class="text-right row row-flex">       

                <a href="{{route('product.edit',$model->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('product.destroy',$model->id)}}" class="btn btn-sm btn-danger btndelete">
                    <i class="fas fa-trash"></i>
                </a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<form method="POST" action="" id="form-delete">
    @csrf @method('DELETE')
</form>

<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>
@stop();

@section('js')

<script>
    $('.btndelete').click(function(ev){
        ev.preventDefault();
        var _href = $(this).attr('href');
        $('form#form-delete').attr('action',_href); 
        if(confirm('Bạn có chắc muốn xoá không ?')){
            $('form#form-delete').submit();
        }
    })
</script>

@stop()