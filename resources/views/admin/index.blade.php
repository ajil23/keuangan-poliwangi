@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
       </div>
       <div class="card shadow mb-2 mt-2">
        <div class="card-body">
            <div class="row g-3">
                <div class="col">
                    <label for="cariprodi">Cari Prodi</label>    
                    <select id="inputProdi" name="prodi" class="form-control">
                        <option selected>Pilih Prodi</option>
                        <option value="TS">Teknik Sipil</option>
                        <option value="TRKJJ">Teknologi Rekayasa Konstruksi Jalan & Jembatan</option>
                        <option value="AGB">Agribisnis</option>
                        <option value="MBP">Manajemen Bisnis Pariwisata</option>
                        <option value="TMK">Teknik Manufaktur Kapal</option>
                        <option value="TPHT">Teknologi Pengolahan Hasil Ternak</option>
                        <option value="TRM">Teknologi Rekayasa Manufaktur</option>
                        <option value="TRPL">Teknologi Rekayasa Perangkat Lunak</option>
                        <option value="TRK">Teknologi Rekayasa Komputer</option>
                        <option value="BSD">Bisnis Digital</option>
                    </select>
                </div>
                <div class="col">
                    <label for="tahun">Tahun</label>    
                    <input type="text" class="form-control" placeholder="Tahun" >
                </div>
              </div>
              <br>
              {{-- nilai tiap card sesuai dengan data yang dipilih --}}
              <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                 <div class="col-xl col-md-6 mb-4">
                     <div class="card border-left-primary shadow h-100 py-2">
                         <div class="card-body">
                             <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pagu</div>
                                     <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                 </div>
                                 <div class="col-auto">
                                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
        
                 <!-- Earnings (Monthly) Card Example -->
                 <div class="col-xl col-md-6 mb-4">
                     <div class="card border-left-success shadow h-100 py-2">
                         <div class="card-body">
                             <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                         Realisasi</div>
                                     <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                 </div>
                                 <div class="col-auto">
                                     <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
        
                 <!-- Earnings (Monthly) Card Example -->
                 <div class="col-xl col-md-6 mb-4">
                     <div class="card border-left-info shadow h-100 py-2">
                         <div class="card-body">
                             <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Sisa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                </div>
        </div>
    </div>
   </div>
   @endsection