@extends('layouts.guest')
@section('content')
 <!-- /jumbotron -->
         <div class="blog jumbotron">
            <div class="container">
               <div class="col-lg-6 col-centered well text-center">
                  <h1>Testimoni Orang Tua</h1>
                  <!-- Breadcrumb -->
                  <ol class="breadcrumb text-center">
                     <li><a href="index-2.html">Home</a></li>
                     <li class="active">Blog Home</li>
                  </ol>
               </div>
            </div>
            <!-- /.container -->
         </div>
         <!-- /jumbotron -->

         	   @php
   			   $testimoni = App\Testimoni::all();
    		   @endphp
               <div class="col-lg-12 col-sm-12 paper_block">
                  <h3 class="text-center">What Parents Think</h3>
                  <div id="owl-testimonials" class="owl-carousel">
                     <!-- testimonial 1-->
                  @foreach($testimoni as $data)
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="{{asset('/assets/images/avatar/'.$data->foto.'') }}" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1 quote-test">
                           <!-- quote -->
                           <p>{{$data->deskripsi}}</p>
                           <small><i class="fa fa-user"></i>{{$data->nama}}</small>
                        </div>
                     </blockquote>
                  @endforeach
                  </div>
                  <!--owl testimonials-->
               </div>

		@endsection