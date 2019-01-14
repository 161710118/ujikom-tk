@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{$profils->judul}}</h1>\
		<h5>Published: {{date('M j,Y', strtotime($profils->created_at)) }}</h5>
		<img src="{{asset('assets/images/avatar/' .$profils->gambar.'') }}" style="width=100px;
		height=100px;" alt="">
		<p>{!! $profils->isi !!}</p>
		<hr>
	</div>
	<div id="disqus_thread"></div>
	@push('scripts')
	<script>

		(funcition(){
			var d = document, s = d.createdElement('script');
			s.src = 'https://pkl-1.disqus.com/embed.js';
			s.setAttribute('data-timetamp', +new Date());
			(d.head || d.body).appendChild(s);
		})();
	</script>
	<noscript>Please enable JavaScript to view the<a href="https://disqus.com/?ref_noscript">comment powered by Disqus.</a></noscript>

	@endpush
	@endsection