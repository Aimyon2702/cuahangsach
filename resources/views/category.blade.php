@extends('layouts.site')

@section('main')


<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all bg-image" style="background-image: url(https://www.pixeden.com/media/k2/galleries/220/005-wood-melamine-subttle-pattern-background-pat.jpg);">
                        <i class="fa fa-bars text-success"></i>
                        <span class="text-success">Danh mục</span>
                    </div>
                    @foreach($category as $cat)
                    <ul>
                        <li class=>
                            <a href="{{route('category',['id'=>$cat->id])}}">{{$cat->name}}</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="home-hover">
                    <h5><a href="{{route('home')}}">
                            Trang chủ
                        </a>&ensp;/&ensp;{{$cats->name}}
                    </h5><br>

                </div>
                <div class="row featured__filter">
                    @foreach($product as $pro)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="featured__item">

                            <div class="featured__item__pic">

                                <a href="{{route('product_detail',['id'=>$pro->id])}}">
                                    <img src="{{url('public/uploads')}}/{{$pro->image}}" alt="">
                                </a>
                                <ul class="featured__item__pic__hover">
                                    <li><a href="{{route('product_detail',['id'=>$pro->id])}}"><i class="fa fa-info-circle"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>

                            <div class="featured__item__text">
                                <h6><a href="#">{{$pro->name}}</a></h6>
                                <h6><a href="" class="smail" style="color: green;">{{$pro->author}}</a></h6>
                                @if($pro->sale_price > 0)
                                <strong><span style="color:orange; font-size: 18px">{{number_format($pro->sale_price)}}&nbsp;Đ</span></strong>
                                <p class="bg-white"><del>{{ number_format($pro->price)}}&nbsp;Đ</del></p>
                                @else
                                <b> {{number_format($pro->sale_price)}} Đ</b>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

<!-- Product Section End -->

@endsection