@extends('layouts.site')

@section('main')


<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <div class="">
                    <div class="">
                        <img class="" style="width:440px;height:430px" src="{{url('public/uploads')}}/{{$pro->image}}" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$pro->name}}</h3>
                    <h4><a href="" class="smail" style="color: green;">{{$pro->author}}</a></h4><br>
                    @if($pro->sale_price > 0)
                    <div class="product__details__price">
                        {{number_format($pro->sale_price)}}&nbsp;đ<br>
                        <span>
                            <p class="bg-white" style="font-size: 20px;">
                                Giá thị trường: {{number_format($pro->price)}}&nbsp;đ <br><br>
                                Tình trạng:
                                <span style="color: #FE642E;font-size:18px">
                                    <?php echo $pro->status == 1 ? 'Còn hàng' : '' ?>
                                </span>
                            </p>
                        </span>
                    </div>
                    @else
                    <b> {{number_format($pro->sale_price)}} Đ</b>
                    @endif

                    <div class="product__details__quantity">
                        <div class="quantity">
                            <span style="font-size: 20px;color:#757575">Số lượng:&ensp;</span>
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                            <span style="font-size: 18px;color:#757575">&ensp; {{$pro->available}} sản phẩm có sẵn </span>
                        </div>
                    </div><br><br>
                    
                    
                    <a href="{{route('cart.add',['id'=>$pro->id])}}" class="btn btn-lg btn-success">Thêm vào giỏ hàng</a>
                    <a href="{{route('checkout')}}" class="btn btn-lg btn-danger">Đặt hàng ngay</a>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Giới thiệu sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Thông tin chi tiết</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h5>{{$pro->name}}</h5><br>
                                <p>{{$pro->description}}</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                
                                <p style="background-color: #f7f7f7;padding: 5px;">Ngày xuất bản: Đang cập nhật </p> <br>
                                <p style="padding: 5px;">Số lượng: <span>{{$pro->available}} sản phẩm</span></p><br>
                                <p style="background-color: #f7f7f7;padding: 5px;">Số trang: <span>{{$pro->page}} trang</span></p> <br>
                                <p style="padding: 5px;">Trọng lượng:<span>{{$pro->weight}} gram</span></p> 

                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
@include('layouts.recommend') <br>
<!-- Related Product Section End -->


@endsection