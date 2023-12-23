<?php

namespace App\Http\Controllers;

use App\Models\Pelaksanaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ReportController extends Controller
{
    public function index(){
        // Menampilkan data sesuai dengan user yang sedang login
        if(Auth::user()->id=='1'){
           $data = Pelaksanaan::all();
       } else {
           $user = Auth::user()->id;
           $data = Pelaksanaan::where('user_id', $user)->get();
       }
       return view('backend.report.view_report', ['data' => $data]);
   }

   public function export(Request $request)
    {
        if(Auth::user()->id=='1'){
            $data = Pelaksanaan::all();
        } else {
            $user = Auth::user()->id;
            $data = Pelaksanaan::where('user_id', $user)->get();
        }
        $pdf = FacadePdf::loadView('backend.report.view_export', ['data' => $data]);
        return $pdf->download('keuangan-report.pdf');
      
    }
}
