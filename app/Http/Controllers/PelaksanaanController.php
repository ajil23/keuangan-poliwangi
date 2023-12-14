<?php

namespace App\Http\Controllers;

use App\Models\Pelaksanaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PelaksanaanController extends Controller
{
    public function index(){
         // Menampilkan data sesuai dengan user yang sedang login
         if(Auth::user()->id=='1'){
            $data = Pelaksanaan::all();
        } else {
            $user = Auth::user()->id;
            $data = Pelaksanaan::where('user_id', $user)->get();
        }
        return view('backend.pelaksanaan.view_pelaksanaan', ['data' => $data]);
    }

    public function add(){
        $perencanaan = DB::table('perencanaan')->whereNotIn('id', function ($query) {
            $query->select('perencanaan_id')->from('pelaksanaan');
        })
        ->get();
        return view('backend.pelaksanaan.add_pelaksanaan', compact('perencanaan'));
    }

    public function store(Request $request){
        $pelaksanaanData = new Pelaksanaan();
        $pelaksanaanData -> user_id = Auth()->id();
        $pelaksanaanData -> perencanaan_id = $request -> kegiatan;
        $pelaksanaanData -> progres = $request -> progres;
        $pelaksanaanData -> realisasi = $request -> realisasi;
        // request file rab belum
        $pelaksanaanData->save();
        return redirect()->route('pelaksanaan.view');
    }

    public function edit($id){
        $editPelaksanaan = Pelaksanaan::find($id);
        return view('backend.pelaksanaan.edit_pelaksanaan', compact('editPelaksanaan')); 
    }

    public function update(Request $request, string $id){
        $pelaksanaanData = Pelaksanaan::find($id);
        $pelaksanaanData -> progres = $request -> progres;
        $pelaksanaanData -> realisasi = $request -> realisasi;
        // request file rab belum
        $pelaksanaanData->update();
        return redirect()->route('pelaksanaan.view');
    }

    public function delete($id){
        $deleteData = Pelaksanaan::find($id);
        $deleteData->delete();
        return redirect()->route('pelaksanaan.view');
    }
}
