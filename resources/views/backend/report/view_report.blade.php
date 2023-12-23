@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
     <!-- Page Heading -->
     <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Laporan</h1>
        </div>
        <div class="text-end mb-2">
            <a href="{{route('report.export')}}" target="_blank"><button type="button" class="btn btn-primary">Cetak PDF</button></a>
        </div>
    </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Tanggal</th>
                             <th>Pagu</th>
                             <th>Realisasi</th>
                             <th>Sisa</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($data as $item => $pelaksanaan)
                         <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$pelaksanaan->perencanaan->mulai}}</td>
                            <td>Rp.{{number_format($pelaksanaan->perencanaan->pagu)}}</td>
                            <td>Rp.{{number_format($pelaksanaan->realisasi)}}</td>
                            <td>Rp.{{number_format($pelaksanaan->perencanaan->pagu - $pelaksanaan->realisasi)}}</td>
                        </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
</div>
@endsection
