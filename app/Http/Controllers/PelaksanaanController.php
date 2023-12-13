<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaksanaanController extends Controller
{
    public function index(){
        return view('backend.pelaksanaan.view_pelaksanaan');
    }

    public function add(){
        return view('backend.pelaksanaan.add_pelaksanaan');
    }
}
