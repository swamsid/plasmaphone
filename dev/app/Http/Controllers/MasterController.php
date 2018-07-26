<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function barang()
    {
    	return view('master/barang/barang');
    }
    public function suplier()
    {
    	return view('master/suplier/suplier');
    }
}
