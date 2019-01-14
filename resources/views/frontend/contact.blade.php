 @extends('layouts.guest')
 @section('content')
  <div class="blog jumbotron">
            <div class="container">
               <div class="col-lg-6 col-centered well text-center">
                  <h1>Blog Home</h1>
                  <!-- Breadcrumb -->
                  <ol class="breadcrumb text-center">
                     <li><a href="index-2.html">Home</a></li>
                     <li class="active">Blog Home</li>
                  </ol>
               </div>
            </div>
            <!-- /.container -->
         </div>
 <section id="contact" class="color-section">
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2>Contact us</h2>
                  </div>
               </div>
               <!-- Contact -->
               <div class="col-lg-4 text-center">
                  <h4>Information</h4>
                  <!-- contact info -->			   
                  <div class="contact-info">
                     <p><i class="flaticon-back"></i><a href="mailto:youremailaddress">daycare@site.com</a></p>
                     <p><i class="fa fa-phone margin-icon"></i>Call us +1 456 7890</p>
                  </div>
                  <!-- address info -->
                  <p>We are located at Imaginary Fun City, 304.</p>
                  <!-- Map -->
                  <div id="map-canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.6087878685!2d107.5940939!3d-6.961791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e99f82491d6349a!2sMTs.+Nurul+Iman!5e0!3m2!1sid!2sid!4v1542522353717" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
               </div>
               <!-- Contact Form -->
               <div class="col-lg-7 col-lg-offset-1">
                  <h4>Write us</h4>
                  <!-- Form Starts -->
                  <div id="contact_form">

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
                            
                  <!-- Contact results -->
                  <div id="contact_results"></div>
               </div>
               <!--/Contact form -->
            </div>
            <!-- /container-->
         </section>
         @endsection