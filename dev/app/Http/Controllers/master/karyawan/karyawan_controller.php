<?php

namespace App\Http\Controllers\master\karyawan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\master\karyawan as karyawan;

use DB;
use Session;
use Auth;

class karyawan_controller extends Controller
{
    public function index(){
    	return view('master.karyawan.index');
    }
}
