<div class="container">
    <div class="section-title">
        <h2>Top sản phẩm</h2>
    </div>
    <div class="row">
        <div class="categories__slider owl-carousel">

            @foreach($product_recommend as $pr)
            <div class="col-lg-3">
                <div class="categories__item set-bg" data-setbg="{{url('public/uploads')}}/{{$pr->image}}">
                </div><br>
                <div class="recommend-name">
                    <h6><a href="{{route('product_detail',['id'=>$pr->id])}}">{{$pr->name}}</a></h6>
                </div>
                <h6><a href="" class="smail" style="color: green;">{{$pr->author}}</a></h6>
                @if($pr->sale_price > 0)
                <strong><span style="color:orange; font-size: 18px">{{number_format($pr->sale_price)}} Đ</span></strong> &nbsp;
                <s>{{ number_format($pr->price)}} đ </s>
                @else
                <b> {{number_format($pr->sale_price)}} đ</b>
                @endif
            </div>

            @endforeach
        </div>
    </div>
</div>