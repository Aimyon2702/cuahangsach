<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aimyon</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('public/site')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top text-success bg-image" style="background-image: url(https://www.pixeden.com/media/k2/galleries/220/005-wood-melamine-subttle-pattern-background-pat.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li class="text-success"><i class="fa fa-envelope text-success"></i> nqthanh</li>
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


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{route('home.index')}}"><img src="{{url('public/site')}}/img/logo4.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <!-- <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                            <li><a href="{{route('home.shop')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <div class="container ">
        @yield('main')
    </div>

    <br>
    <!-- Footer Section Begin -->
    <footer class="footer spad center-text bg-image" style="background-image: url(https://www.pixeden.com/media/k2/galleries/220/005-wood-melamine-subttle-pattern-background-pat.jpg);">
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
    <script src="{{url('public/site')}}/js/main.js"></script>



</body>

</html>