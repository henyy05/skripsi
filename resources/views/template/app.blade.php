<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BPP SULUH TANI ABADI KEC.PALARAN</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    
    <style>
        #load{
            width: 100%;
            height:100%;
            position: fixed;
            text-indent: 100%;
            background: #e0e0e0 url('./AdminLTE/loading.gif') no-repeat center;
            z-index: 1;
            opacity:0.4;
            background-size: 8%;
        }
    </style>

</head>

<body>
    
    <div id="load">Loading...</div>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <p class="font-weight-bold"><h3><font color="green">SIG PEMETAAN LAHAN</font> <br> <font color="red">PERTANIAN KECAMATAN PALARAN </font></h3></p>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    <ul class="nav-menu nav navbar-nav">
                        <li class="cat-1"><a href="/">Home</a></li>
                        <li class="cat-2"><a href="/profile">Profile</a></li>
                        <li class="cat-3"><a href="/peta">Peta</a></li>
                    </ul>
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div class="search-form">
                            <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                            <button class="search-close"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row">
                    <ul class="nav-aside-menu">
                        <li><a href="/login">Login</a></li>

                    </ul>
                </div>
                <!-- /nav -->


                <!-- social links -->
                <div class="section-row">
                    <h3>Follow us</h3>
                    <ul class="nav-aside-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <!-- /social links -->

                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    @yield('content')


    <!-- Footer -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget ">
                        <div class="footer-logo">
                            <a href="#" class="logo"><img src="{{ asset('front/img/bpp.png') }}" alt="" style="width: 100px !important"></a>
                            <a href="#" class="logo"><img src="{{ asset('front/img/logo1.png') }}" alt="" style="width: 100px !important"></a>
                        </div>
                        <div class="d-flex justify-content-right ">
                            <p class="font-weight-bold">
                               BALAI PENYULUHAN PERTANIAN<br> SULUH TANI ABADI KECAMATAN PALARAN <br>
                               JL. AMPERA KM.14 KELURAHAN BUKUAN
                            </p>
                        </div>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                                2021 - BPP Suluh Tani Abadi Kecamatan Palaran<script>
                                </script>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-widget">
                                <h3 class="footer-title">Contacts</h3>
                                <ul class="footer-links">
                                    <li><a href="#">email: henynurauliah904@gmail.com</a></li>
                                    <li><a href="#">address: Jl.P.Bendahara Gg. Karya Muharram</a></li>
                                    <li><a href="#">contact person: +622123456789</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/profile">Profile</a></li>
                                    <li><a href="/peta">Peta</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
        <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="footer-title">Join our Newsletter</h3>
            <div class="footer-newsletter">
                <form>
                    <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                    <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

<script>
    $("#load").fadeOut(1000);
    </script>
@yield('script')

</body>

</html>