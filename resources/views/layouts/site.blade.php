<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aimyon Shop</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('resources')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('resources')}}/css/app.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>




    <!-- Header Section Begin -->
    <header class="header ">
        <div class="header__top text-success bg-image" style="background-image: url(https://www.pixeden.com/media/k2/galleries/220/005-wood-melamine-subttle-pattern-background-pat.jpg);">
            <div class="container text-success">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left text-success">
                            <ul class="text-success">
                                <li class="text-success"><i class="fa fa-envelope text-success"></i> nqthanh.20it9@vku.udn.vn</li>
                                <li class="text-success"><i class="fa fa-phone text-success"></i> 0325713103</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook text-success"></i></a>
                                <a href="#"><i class="fa fa-twitter text-success"></i></a>
                                <a href="#"><i class="fa fa-linkedin text-success"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p text-success"></i></a>
                            </div>

                            @if(Auth::guard('cus')->check())
                            <div class="header__top__right__auth ">
                                <a href="{{route('customer.profile')}}" class="text-success"><i class="fa fa-user text-success"></i>
                                    Chào {{Auth::guard('cus')->user()->name}} &nbsp;
                                </a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{route('customer.logout')}}" class="text-success"><i class="fa fa-sign-out text-success"></i>
                                    Đăng xuất
                                </a>
                            </div>
                            @else
                            <div class="header__top__right__auth">
                                <a href="{{route('customer.login')}}" class="text-success"><i class="fa fa-user text-success"></i>
                                    Đăng nhập &nbsp;
                                </a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{route('customer.register')}}" class="text-success"><i class="fa fa-sign-in text-success"></i>
                                    Đăng ký
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="header__logo">
                        <a href="{{route('home.index')}}"><img src="{{url('public/site')}}/img/logo4.png " alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <!-- <ul>
                            <li class="active"><a href="{{route('home.index')}}">Trang chủ</a></li>
                            <li><a href="{{route('home.shop')}}">Sản phẩm</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul> -->
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{route('cart.view')}}"><i class="fa fa-shopping-bag"></i> <span>{{$cart->total_quantity}}</span></a></li>
                        </ul>
                        <div class="header__cart__price">Giỏ hàng: <span>{{number_format($cart->total_price)}}đ</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('main')
    <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Liên hệ</h2>
          <br>
        </div>
      </div>

       <div data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1137.7812748089736!2d107.58000963530309!3d16.4235677723201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a398847baa4f%3A0x9b12e81d5ef20929!2sCafe%20TINO!5e0!3m2!1svi!2s!4v1624215127369!5m2!1svi!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    <!-- Footer Section Begin -->
    <footer class="footer spad  bg-image" style="background-image: url(https://www.pixeden.com/media/k2/galleries/220/005-wood-melamine-subttle-pattern-background-pat.jpg);">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="footer-info">
                        <div class="header__logo">
                            <a href="{{route('home.index')}}"><img src="{{url('public/site')}}/img/logo4.png " alt=""></a>
                        </div>
                        <p>
                            <b class="text-success" style="font-size:20px;">Địa chỉ: </b> <span class="text-success" style="font-size:17px;"> 6 Khải Định, Thuỷ Bằng, Hương Thuỷ, TT.Huế</span><br>
                            <b class="text-success" style="font-size:20px;">Số điện thoại: </b> <span class="text-success" style="font-size:17px;"> 0912847303</span><br>
                            <b class="text-success" style="font-size:20px;">Email: </b> <span class="text-success" style="font-size:17px;"> thanhnguyen1569@gmail.com</span><br>
                            
                        </p>

                        <div class="social-links mt-3">
                            <a href="#" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{url('public/site')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public/site')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery.nice-select.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery-ui.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery.slicknav.js"></script>
    <script src="{{url('public/site')}}/js/mixitup.min.js"></script>
    <script src="{{url('public/site')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('resources')}}/js/app.js"></script>



</body>

</html>