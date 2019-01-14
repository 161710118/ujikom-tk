@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
<div class="row">

    <div class="container"><center><h2>Data Tanggapan User</h2></center>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="card mb-3">
        <div class="card-header">
          
        <div class="card-body"> <!-- <a class="btn btn-outline-warning" href="{{ route('kontaks.create') }}"><i class="fa fa-plus-square">&nbsp</i>Add Data</a>
 -->
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" id="myTable">
              <thead>
                    <tr>
                    <th>No</th>
                      
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th colspan="1">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($kontaks as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name}}</td>
                        <td>{{ $data->email}}</td>
                        <td>{{ $data->message}}</td>
                        <!-- <td>
                            <a href="{{ route('kontaks.edit',$data->id) }}" class="btn btn-outline-primary"><i class="fa fa-pencil-square-o">&nbsp</i>Edit</a>
                        </td> -->
                        
                        <td>
                            <form method="post" action="{{ route('kontaks.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button onclick="return confirm('Yakin ingin mengahapus data?')"
                                 type="submit" class="btn btn-outline-danger">
                                    <i class="fa fa-remove">&nbsp</i>Delete
                                </button>
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

        