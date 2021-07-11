@extends('laporans.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laporan Pasien</h2>
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
        </tr>
        @foreach ($laporans as $laporan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $laporan->kd_pasien }}</td>
            <td>{{ $laporan->nama_pasien }}</td>
            <td>{{ $laporan->penyakit_diderita }}</td>
            <td>{{ $laporan->penyakit_dialami }}</td>
            <td>{{ $laporan->keterangan }}</td>
            
        </tr>
        @endforeach
    </table>
  
    {!! $laporans->links() !!}
      
@endsection