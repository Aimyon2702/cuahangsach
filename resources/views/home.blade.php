@extends('layouts.site')

@section('main')
<!-- Hero Section Begin -->
<section class="hero ">

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

            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">

                            <input type="text" placeholder="Bạn muốn tìm kiếm gì">
                            <button type="submit" class="site-btn ">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="{{url('public/site')}}/img/hero/banner2.jpg">
                    <div class="hero__text">
                        <span style="color:green;">AIMYON SHOP</span>
                        <h2>Giảm giá <br />đến 33%</h2>
                        <h4>Khuyến mãi xuyên mùa dịch</h4>
                        <hr>
                        <a href="#" class="primary-btn">ĐẶT HÀNG NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->



<!-- Categories Section End -->

<!-- Featured Section Begin -->
<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm mới nhất</h2>
                </div>
                <div class="featured__controls">
                    <ul>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($new_product as $np)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <a href="{{route('product_detail',['id'=>$np->id])}}">
                            <img src="{{url('public/uploads')}}/{{$np->image}}" alt="">
                        </a>
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{route('product_detail',['id'=>$np->id])}}"><i class="fa fa-info-circle"></i></a></li>
                            <li><a href="{{route('cart.add',['id'=>$np->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('product_detail',['id'=>$np->id])}}">{{$np->name}}</a></h6>
                        <h6><a href="" class="smail" style="color: green;">{{$np->author}}</a></h6>
                        @if($np->sale_price > 0)
                        <strong><span style="color:orange; font-size: 18px">{{number_format($np->sale_price)}}&nbsp;đ</span></strong> 
                        <p class="bg-white"><del>{{ number_format($np->price)}}&nbsp;đ</del></p>
                        @else
                        <b> {{number_format($np->sale_price)}}&nbsp;đ</b>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->
@include('layouts.recommend') <br><br><br>
<!-- Featured Section End -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tất cả Sản phẩm</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($all_product as $ap)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                        <a href="{{route('product_detail',['id'=>$ap->id])}}">
                            <img src="{{url('public/uploads')}}/{{$ap->image}}" alt="">
                        </a>
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{route('product_detail',['id'=>$ap->id])}}"><i class="fa fa-info-circle"></i></a></li>
                            <li><a href="{{route('cart.add',['id'=>$np->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('product_detail',['id'=>$ap->id])}}">{{$ap->name}}</a></h6>
                        <h6><a href="" class="smail" style="color: green;">{{$ap->author}}</a></h6>
                        @if($ap->sale_price > 0)
                        <strong><span style="color:orange; font-size: 18px">{{number_format($ap->sale_price)}} đ</span></strong> &nbsp;
                        <s>{{ number_format($ap->price)}} đ</s>
                        @else
                        <b> {{number_format($ap->sale_price)}} đ</b>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Banner Begin -->

<!-- Banner End -->

<br>

@endsection