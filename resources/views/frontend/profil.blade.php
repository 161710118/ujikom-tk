@extends('layouts.index')
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/guest/images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower-1"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- School Info Section -->
    <section class="info-section">
        <div class="auto-container">
            <div class="intro-text text-center">
                <h4>RA NURUL IMAN ...</h4>
                <div class="anim-icon"><span class="icon icon-star"></span></div>
                <p>RA NURUL IMAN merupakan Pendidikan anak usia dini. Dengan menggunakan metode pembelajaran High Quality Early Childhood Education sesuai dengan standar The National Association for the Education of Young Children dan Fun Global Islamic Learning, kami berharap bahwa siswa|/siswi dapat bermain, belajar,kreatif, bereksplorasi, berakhlak mulia dan tumbuh bersama dengan baik.

RA NURUL IMAN berupaya untuk mengembangkan seluruh aspek yang dimiliki oleh anak yang meliputi: aspek sosial, emosi, kognitif, fisik, moral, kreatif & spiritual. </p>
            </div>
            <div class="row clearfix">
                <!-- Info Block -->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets/guest/images/resource/info-1.png')}}" alt=""></div>
                        <h3><a href="about.html">Learning Environment</a></h3>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip aute irure dolor repreh derit.</p>
                    </div>
                </div>

                <!-- Info Block -->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets/guest/images/resource/info-2.png')}}" alt=""></div>
                        <h3><a href="about.html">Professional Teachers</a></h3>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip aute irure dolor repreh derit.</p>
                    </div>
                </div>

                <!-- Info Block -->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets/guest/images/resource/info-3.png')}}" alt=""></div>
                        <h3><a href="about.html">Programs for Everyone</a></h3>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip aute irure dolor repreh derit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Info Section -->

    <!-- Video Feature Section -->
    <!-- <section class="video-feature-sec">
        <div class="clearfix">
            <div class="video-column">
                <div class="inner-column clearfix">
                    <div class="layer-image" style="background-image: url(assets/guest/images/resource/video-bg.jpg);"></div>
                    <div class="video-box wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <img src="images/resource/video-img.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn" data-fancybox="gallery" data-caption=""><span class="play-icon"></span>Play Video </a>
                    </div>
                </div>
            </div>
 -->
           <!--  <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>We are <span class="text-parrot">Confident</span> &amp; Develop <span class="text-sky">Skills for Life</span></h2>
                    </div>
                    <h4>EveryDay Care for your Children ...</h4>
                    <p>Dolor sit amet consectetur elit eiusmod tempor dunt aliqua utas enim veniam tempore quis sed ipsum nostrud ipsume amet consectetur adipisicing elit sedo eiusmod tempor incididunt ut labore et dolore magna aliquat enim.</p>
                    <div class="btn-box">
                        <a href="#" class="theme-btn btn-style-one">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Video Feature Section -->

    <!--Fun Facts Section-->
    <section class="fact-counter-section" style="background-image:url(assets/guest/images/background/7.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-pencil"></span>
                <span class="icon icon-star-2"></span>
                <span class="icon icon-moon"></span>
                <span class="icon icon-star"></span>
                <span class="icon icon-flower-2"></span>
            </div>

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-3 col-sm-6 col-xs-12">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1000" data-stop="206">0</span>
                            <h4 class="counter-title">Happy Students</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-md-3 col-sm-6 col-xs-12">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3500" data-stop="5684">0</span>
                            <h4 class="counter-title">Teaching Hours</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-md-3 col-sm-6 col-xs-12">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="730">0</span>
                            <h4 class="counter-title">Days of Learning</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-md-3 col-sm-6 col-xs-12">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2500" data-stop="1572">0</span>
                            <h4 class="counter-title">Innovative Methods</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts -->

    <!-- Learning Skills -->
    <section class="learning-skills">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="icon-1 doll-4 wow tada" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
                <span class="icon-2 icon-star-2 wow zoomInStable" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
                <h2><span class="text-orange">Aktivitas </span> Sekolah </h2>
                  <p>Dolor sit amet consectetur elit eiusmod tempor dunt aliqua utas enim veniam tempore quis nostrud ipsume<br> amet  onsectetur adipisicing elit sedo eiusmod tempor incididunt labore</p>
            </div>

            <div class="row clearfix">
                <div class="left-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-column">
                        <div class="skill-block">
                            <div class="inner">
                                <img src="{{asset('assets/guest/images/resource/skill-1.png')}}" alt="" class="icon">
                                <h4><a href="#">Membaca</a></h4>
                                <p>Dengan anak sering membaca bisa menambah wawasan dan bisa melatih anak juga.</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="{{asset('assets/guest/images/resource/skill-2.png')}}" alt="" class="icon">
                                <h4><a href="#">Bermain</a></h4>
                                <p>Dengan anak bermain dengan teman sekelas nya bisa membuat anak jadi lebih bersosialisasi dengan teman dan guru.</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="{{asset('assets/guest/images/resource/skill-3.png')}}" alt="" class="icon">
                                <h4><a href="#">Mengambar</a></h4>
                                <p>Dengan mengambar anak bisa ber imajinasi lewat gamabar nya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="right-column pull-right col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-column">
                        <div class="skill-block">
                            <div class="inner">
                                <img src="{{asset('assets/guest/images/resource/skill-4.png')}}" alt="" class="icon">
                                <h4><a href="#">Menghitung</a></h4>
                                <p>Dengan berhitung anak bisa lebih aktif dan lebih cerdas.</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="{{asset('assets/guest/images/resource/skill-5.png')}}" alt="" class="icon">
                                <h4><a href="#">Menulis</a></h4>
                                <p>Dengan menulis anak bisa berlatih menulis atau bisa membuat naak lebih letur dalam menulis.</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="{{asset('assets/guest/images/resource/skill-6.png')}}" alt="" class="icon">
                                <h4><a href="#">Sosial</a></h4>
                                <p>Dengan anak besosial anak bisa lebih menganal tentang teman,guru,orang tua maupun dengan lingkungan sekitar nya.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="center-image col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/guest/images/resource/image-3.jpg')}}" alt=""></figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Learning Skills -->

    <!-- Staff Section -->
    <section class="staff-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="icon-1 doll-5"></span>
                <span class="icon-2 icon-pencil-2"></span>
                <h2><span class="text-sky">Teachers</span> Staff</h2>
                <p>Sit amet consectetur elit usmod tempor dunt aliqua utas enim veniam tempore quis</p>
            </div>

            <div class="row clearfix">
                <!-- Staff Block -->
                <div class="staff-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="0ms"><a href="#"><img src="{{asset('assets/guest/images/resource/staff-1.jpg')}}" alt=""></a></div>
                        <div class="info-box">
                            <h3><a href="about.html">Maria Thomas</a></h3>
                            <p>Founder &amp; Head</p>
                        </div>
                    </div>
                </div>

                <!-- Staff Block -->
                <div class="staff-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="300ms"><a href="#"><img src="{{asset('assets/guest/images/resource/staff-2.jpg')}}" alt=""></a></div>
                        <div class="info-box">
                            <h3><a href="about.html">Anna Victoria</a></h3>
                            <p>Sports Instructor</p>
                        </div>
                    </div>
                </div>

                <!-- Staff Block -->
                <div class="staff-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="600ms"><a href="#"><img src="{{asset('assets/guest/images/resource/staff-3.jpg')}}" alt=""></a></div>
                        <div class="info-box">
                            <h3><a href="about.html">Kate Nathan</a></h3>
                            <p>Primary Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Staff Section -->
    
    <!-- Subscribe Section -->
    <section class="subscribe-section" style="background-image: url(assets/guest/images/background/5.jpg);">
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
    </section>
    <!-- End Subscribe Section -->

   
    
</div>
<!--End pagewrapper-->
@endsection