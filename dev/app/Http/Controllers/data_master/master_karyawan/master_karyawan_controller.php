<?php

namespace App\Http\Controllers\data_master\master_karyawan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class master_karyawan_controller extends Controller
{
    public function index(){
    	return view('master.karyawan.index');
    }

    public function create(){
    	return view('master.karyawan.tambah');
    }
}
