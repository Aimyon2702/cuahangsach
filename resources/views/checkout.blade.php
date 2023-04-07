@extends('layouts.site')

@section('main')

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Chi tiết thanh toán</h4>
            <form action="" method="POST" class="form" rule="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="checkout__input">
                            <p>Họ và tên<span>*</span></p>
                            <input name="name" placeholder="Nhập họ và tên">
                        </div>
                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <input name="address" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input name="phone" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email" placeholder="Nhập địa chỉ email">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Ghi chú</p>
                            <textarea rows="6" cols="42" name="note" ></textarea>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="checkout__order">

                            <h4>Chi tiết đơn hàng:</h4>
                            <div class="checkout__order__products">Sản phẩm <span>Thành tiền</span></div>
                            @foreach ($cart->items as $item)
                            <ul>
                                <li>{{$item['name']}} x{{$item['quantity']}} <span>{{number_format($item['price'])}} đ</span></li>
                            </ul>
                            @endforeach
                            <div class="checkout__order__total">Tổng tiền <span>{{number_format($cart->total_price)}}đ</span></div>
                            <button type="submit" class="site-btn">Đặt hàng</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
<!-- Shoping Cart Section End -->

<!-- Product Section End -->

@endsection