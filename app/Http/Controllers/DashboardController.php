<?php

namespace App\Http\Controllers;

use App\Models\Pelaksanaan;
use App\Models\Perencanaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        
        $year = Pelaksanaan::select(DB::raw("DATE_FORMAT(created_at, '%Y') AS year"))
            ->GroupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
            ->OrderBy(DB::raw('created_at'))
            ->pluck('year');
       

        $bulan = Pelaksanaan::select(DB::raw("MONTHNAME(created_at) as bulan"))
            ->OrderBy(DB::raw('Month(created_at)'))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulan');
      
        $results = Pelaksanaan::select(
            DB::raw("DATE_FORMAT(pelaksanaan.created_at, '%M') AS nama_bulan"),
            DB::raw("DATE_FORMAT(pelaksanaan.created_at, '%Y') AS tahun"),
            DB::raw("SUM(pelaksanaan.realisasi) AS total"),
            DB::raw("perencanaan.prodi AS prodi")
        )
        ->join('perencanaan', 'pelaksanaan.perencanaan_id', '=', 'perencanaan.id')
        ->groupBy(
            DB::raw("DATE_FORMAT(pelaksanaan.created_at, '%M'), DATE_FORMAT(pelaksanaan.created_at, '%Y')"),
            'perencanaan.prodi'
        )
        ->orderBy('pelaksanaan.created_at', 'ASC')
        ->get();
      
        if (Auth::user()->id == '1') {
            return view('admin.index', compact('bulan', 'year', 'results'));
        } else {
            return view('admin.jurusan', compact('bulan', 'year','results'));
        }
    }
}
