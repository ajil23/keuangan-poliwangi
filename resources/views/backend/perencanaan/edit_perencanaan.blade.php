@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
     <!-- Page Heading -->
     <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Perencanaan</h1>
        </div>
    </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Edit Data Perencanaan</h6>
         </div>
         <div class="card-body">
            <form method="POST" action="{{route('perencanaan.update', $editPerencanaan->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="kegiatan">Kegiatan</label>
                      <input type="text" class="form-control" name="kegiatan" value="{{$editPerencanaan->kegiatan}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Sumber Dana</label>
                      <select id="inputSumberDana" name="sumberDana" class="form-control">
                        <option selected>{{$editPerencanaan->sumberDana}}</option>
                        <option>BUPN</option>
                        <option>PNBP</option>
                        <option>Hiba</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggalMulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="mulai" value="{{$editPerencanaan->mulai}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggalAkhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="akhir" value="{{$editPerencanaan->akhir}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Pagu">Pagu</label>
                        <input type="number" class="form-control" name="pagu" value="{{$editPerencanaan->pagu}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="RencanaPenarikan">Rencana Penarikan</label>
                        <input type="text" class="form-control" name="penarikan" value="{{$editPerencanaan->penarikan}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="RencanaPenarikan">Prodi</label>
                        <select id="inputProdi" name="prodi" class="form-control">
                            <option selected>{{$editPerencanaan->prodi}}</option>
                            <option>TRPL</option>
                            <option>BSD</option>
                            <option>TRK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Upload File Rab</label>
                        <input type="file" class="form-control" id="rab">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="userid" value="{{$editPerencanaan->user_id}}">
                    </div>
                </div>
                <button type="button" onclick="history.back()" class="btn btn-danger">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
         </div>
     </div>
</div>
@endsection
