@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
     <!-- Page Heading -->
     <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Perencanaan</h1>
        </div>
        <div class="text-end mb-2">
            <a href="{{route('perencanaan.add')}}"><button type="button" class="btn btn-primary">Tambah Perencanaan</button></a>
        </div>
    </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Tabel Perencanaan</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Kegiatan</th>
                             <th>Sumber Dana</th>
                             <th>Mulai</th>
                             <th>Akhir</th>
                             <th>Pagu</th>
                             <th>RAB</th>
                             <th>Penarikan</th>
                             <th>Prodi</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach ($data as $item => $perencanaan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$perencanaan->kegiatan}}</td>
                            <td>{{$perencanaan->sumberDana}}</td>
                            <td>{{$perencanaan->mulai}}</td>
                            <td>{{$perencanaan->akhir}}</td>
                            <td>Rp.{{number_format($perencanaan->pagu)}}</td>
                            <td><a href="{{route('perencanaan.view_rab',$perencanaan->id)}}">
                            <center><i class="fas fa-solid fa-file"></i></center>
                            </a></td>
                            <td>{{$perencanaan->penarikan}}</td>
                            <td>{{$perencanaan->prodi}}</td>
                            <td colspan="2">
                               <a href="{{route('perencanaan.edit', $perencanaan->id)}}" class="btn btn-warning btn-sm">Edit</a>
                               <a href="{{route('perencanaan.delete', $perencanaan->id)}}" class="btn btn-danger btn-sm">Hapus</a>
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
