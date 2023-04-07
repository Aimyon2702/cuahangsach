@extends('layouts.admin')
@section('title','Dashboard')
@section('main')

    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$order_count}}</h3>

            <p>Tổng đơn hàng</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$cus_count}}</h3>

            <p>Tổng người đăng ký</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$category_count}}</h3>

            <p>Tổng số danh mục sản phẩm</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{route('category.index')}}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$product_count}}</h3>

            <p>Tổng số sản phẩm</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{route('product.index')}}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>


    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Đơn hàng</div>
      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã khách hàng</th>
            <th>Ngày đặt</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $od)
          <tr>
            <td>{{$od->id}}</td>
            <td>{{$od->customer_id}}</td>
            <td>{{$od->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@stop('main');