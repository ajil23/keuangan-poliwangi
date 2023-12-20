<?php

namespace App\Http\Controllers;

use App\Models\Perencanaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PerencanaanController extends Controller
{
    public function index(){
        // Menampilkan data sesuai dengan user yang sedang login
        if(Auth::user()->id=='1'){
            $data = Perencanaan::all();
        } else {
            $user = Auth::user()->id;
            $data = Perencanaan::where('user_id', $user)->get();
        }
        return view('backend.perencanaan.view_perencanaan', ['data' => $data]);
    }

    public function add(){
        return view('backend.perencanaan.add_perencanaan'); 
        // if(Auth::user()->id=='1'){
        //     $data = Perencanaan::all();
        //     echo '<script>alert("Maaf, anda tidak memiliki akses untuk menambahkan data")</script>';
        //     return view('backend.perencanaan.view_perencanaan', ['data' => $data]);
        // } else {
        //     return view('backend.perencanaan.add_perencanaan'); 
        // }
    }

    public function store(Request $request){
        $perencanaanData = new Perencanaan();
        $perencanaanData -> user_id = Auth()->id();
        $perencanaanData -> kegiatan = $request -> kegiatan;
        $perencanaanData -> sumberDana = $request -> sumberDana;
        $perencanaanData -> mulai = $request -> mulai;
        $perencanaanData -> akhir = $request -> akhir;
        $perencanaanData -> pagu = $request -> pagu;
        $perencanaanData -> penarikan = $request -> penarikan;
        $perencanaanData -> prodi = $request -> prodi;
        if ($request->hasFile('rab')) {
            $request->validate([
                'rab' => 'required|mimes:pdf|max:2048',
            ]);
            $pdfFile = $request->file('rab');
            $filerab  = $pdfFile->store('rab', 'public');
            $perencanaanData->rab = $filerab ;
        }
        // request file rab belum
        $perencanaanData->save();
        return redirect()->route('perencanaan.view');
    }
    public function view_rab(string $id)
    {
        $data = Perencanaan::findOrFail($id); 
        $pdfPath = public_path('storage/' . $data->rab);
        return response()->file($pdfPath);
    }
    public function edit($id){
        $editPerencanaan = Perencanaan::find($id);
        return view('backend.perencanaan.edit_perencanaan', compact('editPerencanaan')); 
    }

    public function update(Request $request, string $id){
        $perencanaanData = Perencanaan::find($id);
        $perencanaanData -> kegiatan = $request -> kegiatan;
        $perencanaanData -> sumberDana = $request -> sumberDana;
        $perencanaanData -> mulai = $request -> mulai;
        $perencanaanData -> akhir = $request -> akhir;
        $perencanaanData -> pagu = $request -> pagu;
        $perencanaanData -> penarikan = $request -> penarikan;
        $perencanaanData -> prodi = $request -> prodi;
        if ($request->hasFile('rab')) {
            $request->validate([
                'rab' => 'required|mimes:pdf|max:2048',
            ]);
            Storage::delete($perencanaanData->rab);
            $pdfFile = $request->file('rab');
            $filerab  = $pdfFile->store('rab', 'public');
            $perencanaanData->rab = $filerab ;
        }
        $perencanaanData->update();
        return redirect()->route('perencanaan.view');
    }

    public function delete($id){
        $deleteData = Perencanaan::find($id);
        $deleteData->delete();
        return redirect()->route('perencanaan.view');
    }
}
