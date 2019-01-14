@extends('layouts.admin')
@section('content')
<h1><center>Galeri</center></h1>
	<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('galeri.create') }}"><i class="fa fa-flus-square">&nbsp</i> Add++</a>
		</div>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark">
		<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>nama</th>
					<th>Kategori Galeri</th>
					<th colspan="3">Action</th>
				</tr>	
	           </thead>
	             <tbody>
		            
		  		@php $no = 1; @endphp
		  		@foreach($galeris as $data)
                         <tr>
                            <td>{{$no++}}</td>
							<td><img src="{{asset('/assets/images/avatar/'.$data->gambar.'') }}" style="max-width: 80px; "></td>
							<td>{{$data->nama}}</td>
							<td>{{ $data->Kategorigaleri->nama_kategori}}</td>
							
	<td>
		<a href=" {{ route('galeri.edit',$data->id)}} " class="btn btn-outline-primary"><i class="fa fa-file-text">&nbsp</i>edit</a>
	</td>
	<td>
		<form method="post" action="{{ route('galeri.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-outline-danger">
			<i class="fa fa-remove">&nbsp</i> delete</button>
	</form>
	</td>
	</tr>
	@endforeach
	</tbody> 
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	@endsection