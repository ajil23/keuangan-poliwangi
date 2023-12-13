<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerencanaanController extends Controller
{
    public function index(){
        return view('backend.perencanaan.view_perencanaan');
    }

    public function add(){
        return view('backend.perencanaan.add_perencanaan'); 
    }
}
