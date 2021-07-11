@extends('periksas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeriksaan Pasien</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('periksas.create') }}"> Tambah Pemeriksaan Pasien</a>
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
            <th>Penyakit Yang Diderita</th>
            <th>Riwayat Penyakit</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($periksas as $periksa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $periksa->kd_pasien }}</td>
            <td>{{ $periksa->nama_pasien }}</td>
            <td>{{ $periksa->penyakit_diderita }}</td>
            <td>{{ $periksa->penyakit_dialami }}</td>
            <td>{{ $periksa->keterangan }}</td>
            <td>
                <form action="{{ route('periksas.destroy',$periksa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('periksas.show',$periksa->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('periksas.edit',$periksa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $periksas->links() !!}
      
@endsection