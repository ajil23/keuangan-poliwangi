@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
     <!-- Page Heading -->
     <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Pelaksanaan</h1>
        </div>
        <div class="text-end mb-2">
            <a href="{{route('pelaksanaan.add')}}"><button type="button" class="btn btn-primary">Tambah Pelaksanaan</button></a>
        </div>
    </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Tabel Pelaksanaan</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Kegiatan</th>
                             <th>Progres</th>
                             <th>Realisasi</th>
                             <th>Dokumen Laporan</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach ($data as $item => $pelaksanaan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$pelaksanaan->perencanaan->kegiatan}}</td>
                            <td>{{$pelaksanaan->progres}}</td>
                            <td>{{$pelaksanaan->realisasi}}</td>
                            <td><a href="{{route('pelaksanaan.view_laporan',$pelaksanaan->id)}}">
                                <center><i class="fas fa-solid fa-file"></i></center>
                            </a></td>
                            <td colspan="2">
                               <a href="{{route('pelaksanaan.edit', $pelaksanaan->id)}}" class="btn btn-warning">Edit</a>
                               <a href="{{route('pelaksanaan.delete', $pelaksanaan->id)}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
</div>
@endsection
