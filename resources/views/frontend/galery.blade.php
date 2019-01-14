 @extends('layouts.index')
@section('content')
		 <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/guest/images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower-1"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-orange">Images Gallery</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Gallery Section-->
    <section class="gallery-grid-section">
    @php
    $kategori = App\Kategorigaleri::all();
    $galeris = App\Galeri::all();
    @endphp
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                         @foreach($kategori as $data)
                        <li class="filter" data-role="button" data-filter=".web{{$data->id}}">{{$data->nama_kategori}}</li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="filter-list row clearfix">
                    
                    <!--Gallery Item Two-->
                     @foreach($galeris as $data)
                    <div class="gallery-item mix all campus video col-md-4 col-sm-6 col-xs-12 web{{$data->Kategorigaleri->id}}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('/assets/images/avatar/'.$data->gambar.'') }}" alt="">
                                <!--Overlay Box-->
                                <div class="caption-box clearfix">
                                    <div class="title">
                                        <h3><a href="#">{{$data->nama}}</a></h3>
                                    </div>
                                    <div class="icon-box">
                                        <a href="{{asset('/assets/images/avatar/'.$data->gambar.'') }}" class="link" data-fancybox="gallery" data-caption="{{$data->nama}}"><span class="icon fa fa-search"></span></a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    @endforeach

                   
                </div>

                <!-- Styled Pagination -->
                <div class="styled-pagination text-center">
                    <ul class="clearfix">
                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->
    @endsection