@extends('layouts.admin')
@section('content')
<h1><center>Program</center></h1>
	<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('program.create') }}"><i class="fa fa-flus-square">&nbsp</i> Add++</a>
		</div>
		</div>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark">
		<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Gambar</th>					
					<th>Deskripsi</th>
					<th>Nama Penulis</th>
					<th>Kategori</th>
					<th colspan="3">Action</th>
				</tr>	
	           </thead>
	             <tbody>
		           <?php $nomor =1; ?> 
		  		@php $no = 1; @endphp
		  		@foreach($program as $data)
                         <tr>
                            <td>{{$no++}}</td>
							<td>{{$data->judul}}</td>
							<td><img src="{{asset('/assets/images/avatar/'.$data->gambar.'') }}" style="max-width: 80px; "></td>
														
							<td>{{$data->deskripsi}}</td>
							<td>{{ $data->nama_penulis}}</td>
							<td>{{$data->kategori->nama}}</td>
	<td>
		<a href=" {{ route('program.edit',$data->id)}} " class="btn btn-outline-primary"><i class="fa fa-file-text">&nbsp</i>edit</a>
	</td>
	<td>
		<form method="post" action="{{ route('program.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-outline-danger">
			<i class="fa fa-remove">&nbsp</i> delete</button>
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