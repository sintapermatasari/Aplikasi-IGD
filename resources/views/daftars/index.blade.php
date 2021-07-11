@extends('daftars.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pendaftaran Pasien</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('daftars.create') }}"> Tambah Pasien Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Masuk</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($daftars as $daftar)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $daftar->kd_pasien }}</td>
            <td>{{ $daftar->nama_pasien }}</td>
            <td>{{ $daftar->tanggal_lahir }}</td>
            <td>{{ $daftar->jk }}</td>
            <td>{{ $daftar->tanggal_masuk }}</td>
            <td>
                <form action="{{ route('daftars.destroy',$daftar->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('daftars.show',$daftar->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('daftars.edit',$daftar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $daftars->links() !!}
      
@endsection