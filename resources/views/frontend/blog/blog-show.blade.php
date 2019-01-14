@extends('layouts.index')
@section('content')
   <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">Blog Post</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Blog</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side blog-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <!-- News Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><img src="{{asset('/assets/images/avatar/'.$program->gambar.'') }}" alt=""></div>
                                </div>
                                <div class="lower-content">
                                    <div class="title">
                                        <h3>{{$program->judul}}</h3>
                                        <ul class="post-info">
                                            <li>
                                                <span class="fa fa-user"></span>
                                                By <a href="blog-single.html">{{$program->nama_penulis}}</a>
                                            </li>
                                           <!--  <li>
                                                <span class="fa fa-tags"></span>
                                                Tags <a href="blog-single.html">Celebrate</a>,
                                                <a href="blog-single.html">Infanrs</a>
                                            </li>
                                            <li>
                                                <span class="fa fa-comment"></span>
                                                <a href="blog-single.html">81 Comments</a>
                                            </li>
                                            <li>
                                                <span class="fa fa-heart"></span> 
                                                <a href="blog-single.html">45 Likes</a>
                                            </li>
                                        </ul> -->
                                    </div>
                                    <div class="text">
                                        <p>{{$program->deskripsi}}.</p>
                                    </div>

                                    <!-- <div class="other-options clearfix">
                                        <ul class="default-tags clearfix pull-left">
                                            <li><a href="#">Learning</a></li>
                                            <li><a href="#">Kids</a></li>
                                            <li><a href="#">School</a></li>
                                        </ul>

                                        <ul class="social-icon-two pull-right clearfix">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div><!-- Blog List -->

                    <!--Author Box-->
                    <div class="author-box">
                        <div class="inner clearfix">
                            <div class="author-info">
                                <img src="{{asset('assets/guest/images/resource/author-thumb.jpg')}}" alt="" class="thumb">
                                <h3 class="name">Jane Matthews</h3>  
                                <span class="designation">School Principal</span>
                                <ul class="social-icon-three clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="text">Dolor sit amet consectetur elit sadu eiusmod tempor dunt aliqua enim veniam tempore quish sed ipsum nostrud stant ipsume amet onsectetur adipisicing elit sedo eiusmod.</div>
                        </div>
                    </div>
                    <!--End Author Box-->

                    <!-- Post Pagination -->
                    <div class="post-pagination clearfix">
                    @if(isset($previous))
                        <div class="pull-left text-left">
                            <span class="by">By <strong>{{ $previous->nama_penulis}}</strong></span>
                            <h3><a href="{{ URL::to( 'berita/' . $previous->slug) }}">{{ $previous->judul }}</a></h3>
                            <a href="{{ URL::to( 'berita/' . $previous->slug) }}" class="prev-post"><span class="fa fa-angle-left"></span>Prev Post</a>
                        </div>
                        @endif
                        @if(isset($next))   
                        <div class="pull-right text-right">
                            <span class="by">By <strong>{{ $next->nama_penulis}}</strong></span>
                            <h3><a href="{{ URL::to( 'berita/' . $next->slug) }}">{{ $next->judul }}</a></h3>
                            <a href="{{ URL::to( 'berita/' . $next->slug) }}" class="next-post">Next Post <span class="fa fa-angle-right"></span></a>
                        </div>
                    @endif
                    </div>
                    <!--Comments Area-->
                    
                        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://tk-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                    <!-- Comment Form -->
                    
                    <!--End Comment Form -->
                </div>

                <!--Sidebar Side-->
                @include('frontend.blog.side')
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
         @endsection