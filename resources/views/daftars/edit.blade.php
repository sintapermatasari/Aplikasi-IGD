@extends('daftars.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pendaftaran Pasien </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('daftars.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('daftars.update',$daftar->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Pasien:</strong>
                    <input type="string" name="kd_pasien" value="{{ $daftar->kd_pasien }}" class="form-control" placeholder="Kode Pasien">
                </div>
            </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <input type="string" name="nama_pasien" value="{{ $daftar->nama_pasien }}" class="form-control" placeholder="Nama Pasien">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tanggal_lahir" value="{{ $daftar->tanggal_lahir }}" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <input type="string" name="jk" value="{{ $daftar->jk }}" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                <input type="date" name="tanggal_masuk" value="{{ $daftar->tanggal_masuk }}" class="form-control" placeholder="Tanggal Masuk">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection