@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
     <!-- Page Heading -->
     <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Laporan</h1>
        </div>
        <div class="text-end mb-2">
            <a href="#"><button type="button" class="btn btn-primary">Cetak PDF</button></a>
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
                             <th>Jumlah</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>1</td>
                             <td>2011/04/25</td>
                             <td>720.000</td>
                             <td>42.000</td>
                             <td>762.000</td>
                         </tr>
                         <tr>
                             <td>2</td>
                             <td>2011/04/25</td>
                             <td>50.000</td>
                             <td>20.000</td>
                             <td>70.000</td>
                         </tr>
                         <tr>
                             <td>3</td>
                             <td>2011/04/25</td>
                             <td>720.000</td>
                             <td>42.000</td>
                             <td>762.000</td>
                         </tr>
                         <tr>
                             <td>4</td>
                             <td>2011/04/25</td>
                             <td>720.000</td>
                             <td>42.000</td>
                             <td>762.000</td>
                         </tr>
                         <tr>
                             <td>5</td>
                             <td>2011/04/25</td>
                             <td>720.000</td>
                             <td>42.000</td>
                             <td>762.000</td>
                         </tr>
                         <tr>
                             <td>6</td>
                             <td>2011/04/25</td>
                             <td>720.000</td>
                             <td>42.000</td>
                             <td>762.000</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
</div>
@endsection
