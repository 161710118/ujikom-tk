@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="panel-heading">Assalam'Mualikum Wr.Wb</div>

                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang Laela Maharani !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
