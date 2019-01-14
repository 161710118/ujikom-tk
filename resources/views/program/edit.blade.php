@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Program
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('program.update',$program->id) }}" 
			  		method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
                    <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" value="{{ $program->judul }}" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>

                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">deskripsi</label>	
			  			<input type="text" value="{{ $program->deskripsi }}" name="deskripsi" class="form-control"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  			<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">gambar</label>	
			  			<div class="col-md-9 pr-1">
			  			<input type="file" value="{{ $program->gambar }}" name="gambar" class="form-control"  required>
			  			@if (isset($program)&& $program->gambar)
			  			    <p>
			  			    	<br>
			  			    	<img src="{{ asset('/assets/images/avatar/'.$program->gambar)}}" style="width: 100px; height: 100px;" alt="">
			  			    </p>
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_penulis') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_penulis</label>	
			  			<input type="text" value="{{ $program->nama_penulis }}" name="nama_penulis" class="form-control"  required>
			  			@if ($errors->has('nama_penulis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_penulis') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<select  name="kategori_id" class="form-control" >
			  				@foreach($kategoris as $data)
			  				<option value="{{$data->id}}">{{$data->nama}}</option>
			  				@endforeach
			  			</select>
			  			@if($errors->has('kategori_id'))
			  			<span class="help-block">
			  				<strong>{{$errors->first(kategori_id)}}</strong>
			  			</span>
@endif
</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection