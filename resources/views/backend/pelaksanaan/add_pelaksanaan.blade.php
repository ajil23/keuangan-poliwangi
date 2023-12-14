@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
     <!-- Page Heading -->
     <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Pelaksanaan</h1>
        </div>
    </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelaksanaan</h6>
         </div>
         <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="kegiatan">Kegiatan</label>
                      <select id="inputSumberDana" class="form-control">
                        {{-- option kegiatan sesuai dengan kegiatan di perencanaan --}}
                        <option selected>Pilih Kegiatan</option>
                        <option>Langganan Internet</option>
                        <option>Listrik</option>
                        <option>Kendaraan</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kegiatan">Progres</label>
                        <select id="inputSumberDana" class="form-control">
                          <option selected>Pilih Progres</option>
                          <option value="selesai pembayaran">Selesai Pembayaran</option>
                          <option value="selesai pembayaran sebagian">Selesai Pembayaran Sebagian</option>
                          <option value="kontrak">Kontrak</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Pagu">Realisasi</label>
                        <input type="number" class="form-control" placeholder="Pagu">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Upload File Laporan</label>
                        <input type="file" class="form-control" id="laporan">
                    </div>
                </div>
                <button type="button" onclick="history.back()" class="btn btn-danger">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
         </div>
     </div>
</div>
@endsection
