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
                <form method="POST" action="{{ route('perencanaan.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kegiatan">Kegiatan</label>
                            <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Sumber Dana</label>
                            <select id="inputSumberDana" class="form-control" name="sumberDana">
                                <option selected>Pilih Sumber Dana</option>
                                <option value="BUPN">BUPN</option>
                                <option value="PNBP">PNBP</option>
                                <option value="Hiba">Hiba</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggalMulai">Tanggal Mulai</label>
                            <input type="date" name="mulai" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggalAkhir">Tanggal Akhir</label>
                            <input type="date" name="akhir" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Pagu">Pagu</label>
                            <input type="number" name="pagu" class="form-control" placeholder="Pagu">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="RencanaPenarikan">Rencana Penarikan</label>
                            <input type="text" name="penarikan" class="form-control" placeholder="Rencana Penarikan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="RencanaPenarikan">Prodi</label>
                            <select id="inputProdi" name="prodi" class="form-control">
                                <option selected>Pilih Prodi</option>
                                @if (Auth::user()->id == 2)
                                    <option value="TRPL">Teknologi Rekayasa Perangkat Lunak</option>
                                    <option value="TRK">Teknologi Rekayasa Komputer</option>
                                    <option value="BSD">Bisnis Digital</option>
                                @endif
                                @if (Auth::user()->id == 3)
                                    <option value="TS">Teknik Sipil</option>
                                    <option value="TRKJJ">Teknologi Rekayasa Konstruksi Jalan & Jembatan</option>
                                @endif
                                @if (Auth::user()->id == 4)
                                    <option value="TMK">Teknik Manufaktur Kapal</option>
                                    <option value="TRM">Teknologi Rekayasa Manufaktur</option>
                                @endif
                                @if (Auth::user()->id == 5)
                                    <option value="MBP">Manajemen Bisnis Pariwisata</option>
                                @endif
                                @if (Auth::user()->id == 6)
                                    <option value="AGB">Agribisnis</option>
                                @endif
                                @if (Auth::user()->id == 7)
                                    <option value="TPHT">Teknologi Pengolahan Hasil Ternak</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="formGroupExampleInput">Upload File Rab</label>
                            <input type="file" name="rab" class="form-control" id="rab">
                        </div>
                    </div>
                    <button type="button" onclick="history.back()" class="btn btn-danger">Batal</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
