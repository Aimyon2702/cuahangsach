@extends('layouts.admin')    
@section('title','Category List')
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
            <th>Tổng sản phẩm</th>
            <th>Trạng thái</th>
            <th>Ngày thêm</th>
            <th class="text-right">Hành động </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->products ? $cat->products->count() : 0 }}</td>
            <td>
                @if($cat->status == 0)
                    <span class="badge badge-danger">Private</span>
                @else
                    <span class="badge badge-success">Publish</span>
                @endif
            </td>
            <td>{{$cat->created_at->format('m-d-Y')}}</td>           
            <td class="text-right">       

                <a href="{{route('category.edit',$cat->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('category.destroy',$cat->id)}}" class="btn btn-sm btn-danger btndelete">
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