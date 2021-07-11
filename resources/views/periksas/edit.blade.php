@extends('periksas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pemeriksaan Pasien </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('periksas.index') }}"> Back</a>
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
  
    <form action="{{ route('periksas.update',$periksa->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Pasien:</strong>
                    <input type="string" name="kd_pasien" value="{{ $periksa->kd_pasien }}" class="form-control" placeholder="Kode Pasien">
                </div>
            </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <input type="string" name="nama_pasien" value="{{ $periksa->nama_pasien }}" class="form-control" placeholder="Nama Pasien">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penyakit Yang Diderita:</strong>
                <input type="string" name="penyakit_diderita" value="{{ $periksa->penyakit_diderita }}" class="form-control" placeholder="Penyakit Yang Diderita">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Riwayat Penyakit:</strong>
                <input type="string" name="penyakit_dialami" value="{{ $periksa-> penyakit_dialami}}" class="form-control" placeholder="Riwayat Penyakit">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="string" name="keterangan" value="{{ $periksa->keterangan }}" class="form-control" placeholder="Keterangan">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection