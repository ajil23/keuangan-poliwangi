<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cetak</title>
</head>
<body>
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
                           <td>{{$pelaksanaan->perencanaan->pagu}}</td>
                           <td>{{$pelaksanaan->realisasi}}</td>
                           <td>{{$pelaksanaan->perencanaan->pagu - $pelaksanaan->realisasi}}</td>
                       </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>