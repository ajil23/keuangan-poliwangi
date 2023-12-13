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
             <h6 class="m-0 font-weight-bold text-primary">Tambah Data Perencanaan</h6>
         </div>
         <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="kegiatan">Kegiatan</label>
                      <input type="text" class="form-control" placeholder="Kegiatan">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Sumber Dana</label>
                      <select id="inputSumberDana" class="form-control">
                        <option selected>Pilih Sumber Dana</option>
                        <option value="BUPN">BUPN</option>
                        <option value="PNBP">PNBP</option>
                        <option value="Hiba">Hiba</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggalMulai">Tanggal Mulai</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggalAkhir">Tanggal Akhir</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Pagu">Pagu</label>
                        <input type="number" class="form-control" placeholder="Pagu">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="RencanaPenarikan">Rencana Penarikan</label>
                        <input type="text" class="form-control" placeholder="Rencana Penarikan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="RencanaPenarikan">Prodi</label>
                        <select id="inputProdi" class="form-control">
                            <option selected>Pilih Prodi</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Agribisnis">Agribisnis</option>
                            <option value="Manajemen Bisnis Pariwisata">Manajemen Bisnis Pariwisata</option>
                            <option value="Teknik Manufaktur Kapal">Teknik Manufaktur Kapal</option>
                            <option value="Teknologi Pengolahan Hasil Ternak">Teknologi Pengolahan Hasil Ternak</option>
                            <option value="Teknologi Rekayasa Manufaktur">Teknologi Rekayasa Manufaktur</option>
                            <option value="Teknologi Rekayasa Perangkat Lunak">Teknologi Rekayasa Perangkat Lunak</option>
                            <option value="Teknologi Rekayasa Komputer">Teknologi Rekayasa Komputer</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Upload File Rab</label>
                        <input type="file" class="form-control" id="rab">
                    </div>
                </div>
                <button type="button" onclick="history.back()" class="btn btn-danger">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
         </div>
     </div>
</div>
@endsection
