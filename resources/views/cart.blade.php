@extends('layouts.site')

@section('main')


<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th class="shoping__product">Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <!-- <th>Tổng</th> -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n = 1; ?>
                            @foreach ($cart->items as $item)
                            <tr>
                                <td class="shoping__cart__price">
                                    <h5>{{$n}}</h5>
                                </td>

                                <td class="shoping__cart__item">
                                    <img src="{{$item['image']}}" alt="">
                                    <h5>{{$item['name']}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{number_format($item['price'])}} đ
                                </td>
                                <td class="">
                                    <form action="{{route('cart.update',['id'=>$item['id']])}}" method="get">
                                        <input type="number" name="quantity" value="{{$item['quantity']}}">
                                        <input class="btn btn-success" type="submit" value="Cập nhật">
                                    </form>
                                </td>
                                <!-- <td class="shoping__cart__total">
                                {{$item['quantity']}}
                                </td> -->
                                <td class="shoping__cart__item__close">
                                    <a href="{{route('cart.remove',['id'=>$item['id']])}}"><span class="icon_close"></span></a>

                                </td>
                            </tr>
                            <?php $n++ ?>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="{{route('home.index')}}" class="primary-btn cart-btn cart-home">Trở về trang chủ</a>
                    <a href="{{route('cart.clear')}}" class="primary-btn cart-btn cart-clear cart-btn-right  ">Xoá hết</a>
                </div>
            </div>


        </div>
        <div class="shoping__checkout">

            <ul>
                <h2>
                    <li>Tổng tiền:<span>{{number_format($cart->total_price)}}đ</span></li>
                </h2>
            </ul>

            <a href="{{route('checkout')}}" class="primary-btn">Đặt hàng</a>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<!-- Product Section End -->

@endsection