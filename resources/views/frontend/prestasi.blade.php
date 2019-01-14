@extends('layouts.guest')
@section('content')
<section class="junior__classes__area section-lg-padding--top section-padding--md--bottom bg--white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="section__title text-center">
							<h2 class="title__line">Prestasi</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
						</div>
					</div>
				</div>
				<div class="row classes__wrap activation__one owl-carousel owl-theme clearfix mt--40">
					@foreach($prestasi as $data)
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="class-details.html">
									<img src="{{asset('/assets/images/avatar/'.$data->foto.'') }}	" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="class__details">
									<h4><a href="class-details.html">{{$data->nama}}</a></h4>
									<ul class="class__time">
										<li>{{$data->tgl}}</li>
										<li>{{$data->deskripsi}}</li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		@endsection