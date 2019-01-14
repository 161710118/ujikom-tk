@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Prestasi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('prestasi.update',$prestasi->id) }}" 
			  		method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}			  		
			  			<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label col-md-3 col-sm-3 col-xs-3">foto</label>	
			  			<div class="col-md-9 pr-1">
			  			<input type="file" value="{{ $prestasi->foto }}" name="foto" class="form-control"  required>
			  			@if (isset($prestasi)&& $prestasi->foto)
			  			    <p>
			  			    	<br>
			  			    	<img src="{{ asset('/assets/images/avatar/'.$prestasi->foto)}}" style="width: 100px; height: 100px;" alt="">
			  			    </p>
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl</label>	
			  			<input type="date" value="{{ $prestasi->tgl }}" name="tgl" class="form-control"  required>
			  			@if ($errors->has('tgl'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">nama</label>	
			  			<input type="text" value="{{ $prestasi->nama }}" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
                    

			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">deskripsi</label>	
			  			<input type="text" value="{{ $prestasi->deskripsi }}" name="deskripsi" class="form-control"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
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