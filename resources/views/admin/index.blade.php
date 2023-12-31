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
                        <select id="inputProdi" class="form-control" onchange="updateChart()">
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
                        <select class="form-control" style="width: 400px;" id="tahun" onchange="updateChart()">
                            @foreach ($year as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="tahun">Bulan</label>
                        <select class="custom-select" id="bulan" onchange="updateChart()">
                            @foreach ($bulan as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
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
                                        <div id="cardPagu" class="h5 mb-0 font-weight-bold text-gray-800"></div>
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
                                        <div id="cardRealisasi" class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
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
                                                <div id="cardSisa" class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
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
        <div class="row">
            <!-- Area Chart -->
            <div class="col">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Realisasi Data</h6>
                        {{-- <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div> --}}
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->

        </div>

    </div>
@endsection
@push('js')
    <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        // Bar Chart Example
        function updateChart() {
            var ctx = document.getElementById("myBarChart");
            var pagu = document.getElementById("cardPagu");
            var realisasi = document.getElementById("cardRealisasi");
            var sisa = document.getElementById("cardSisa");
            var data = <?php echo json_encode($results); ?>;
            var selectedYear = document.getElementById('tahun').value;
            var selectedProdi = document.getElementById('inputProdi').value;
            var selectedBulan = document.getElementById('bulan').value;
            var filteredCard = data.filter(item => item.prodi == selectedProdi && item.tahun == selectedYear && item
                .nama_bulan == selectedBulan);
            var filteredData = data.filter(item => item.prodi == selectedProdi && item.tahun == selectedYear);
            var dataPagu = filteredCard.map(item => item.pagu);
            pagu.innerHTML = 'Rp ' + number_format(dataPagu[0]);

            var dataRealisasi = filteredCard.map(item => item.total);
            realisasi.innerHTML = 'Rp ' + number_format(dataRealisasi[0]);

            var dataSisa = filteredCard.map(item => item.sisa);
            sisa.innerHTML = 'Rp ' + number_format(dataSisa[0]);
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: filteredData.map(item => item.nama_bulan),
                    datasets: [{
                        label: "Revenue",
                        backgroundColor: "#4e73df",
                        hoverBackgroundColor: "#2e59d9",
                        borderColor: "#4e73df",
                        data: filteredData.map(item => item.total),
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 6
                            },
                            maxBarThickness: 25,
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                // max: 15000,
                                maxTicksLimit: 5,
                                padding: 10,
                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    return 'Rp. ' + number_format(value);
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }],
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + number_format(tooltipItem.yLabel);
                            }
                        }
                    },
                }
            });
        }
        document.addEventListener('DOMContentLoaded', updateChart);
    </script>
@endpush
