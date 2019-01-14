@extends('layouts.guest')
@section('content')
<section class="dcare__team__area section-padding--lg bg-image--22">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title--2 line--white">
							<h2 class="title__line white--title" data-shadow="Our Teacher">Our
							 <span class="theme-color">T</span><span class="theme-color-2">e</span>acher</h2>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row mt--40">
					<!-- Start Single Team -->
					@foreach($gurus as $data)
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div>
							<div class="team__thumb">
								<img src="{{asset('/assets/images/avatar/'.$data->gambar.'') }}" style="width: 350px; height: 250px;" alt="team image">
							</div>
							<div class="team__hover__action">
								<div class="team__details">
									<div class="team__info">
										<h4 style="color: black; margin-left: 100px;">{{$data->nama}}</h4>
									</div>
									<h4 style="color: black; margin-left: 100px;">{{$data->jabatan}}</h4>

									<!-- <ul class="dacre__social__link--2 d-flex justify-content-center"> -->
										<!-- <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
 -->										
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- End Single Team -->
					<!-- Start Single Team -->
					
				</div>
			</div>
		</section>
		@endsection