 @extends('layouts.index')
 @section('content')
  <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/guest/images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower-1"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">Our Blog</h1>
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
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-list">

                    @foreach($program as $data)
                        <!-- News Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="/berita/{{$data->slug}}"><img src="{{asset('/assets/images/avatar/'.$data->gambar.'') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="title">
                                        <h3><a href="/berita/{{$data->slug}}">{{$data->judul}}</a></h3>
                                        <ul class="post-info">
                                            <li>
                                                <span class="fa fa-user"></span>
                                                By <a href="/berita/{{$data->slug}}">{{ $data->nama_penulis}}</a>
                                            </li>
                                           <!--  <li>
                                                <span class="fa fa-tags"></span>
                                                Tags <a href="/berita/{{$data->slug}}">Celebrate</a>,
                                                <a href="/berita/{{$data->slug}}">Infanrs</a>
                                            </li> -->
                                          <!--   <li>
                                                <span class="fa fa-comment"></span>
                                                <a href="/berita/{{$data->slug}}">81 Comments</a>
                                            </li>
                                            <li>
                                                <span class="fa fa-heart"></span> 
                                                <a href="/berita/{{$data->slug}}">45 Likes</a>
                                            </li>
                                        </ul> -->
                                    </div>
                                    <p>{{$data->deskripsi}} </p>
                                    <a href="/berita/{{$data->slug}}" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Styled Pagination -->
                        <div class="styled-pagination text-center">
                            <ul class="clearfix">
                                <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <p>Pages 1 of 35</p>
                        </div>
                    </div><!-- Blog List -->
                </div>
                
                <!--Sidebar Side-->
                @include('frontend.blog.side')
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
         @endsection