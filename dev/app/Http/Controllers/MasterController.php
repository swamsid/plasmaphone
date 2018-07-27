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
    public function user()
    {
    	return view('master/user/user');
    }
    public function jabatan()
    {
    	return view('master/jabatan/jabatan');
    }
    public function member()
    {
    	return view('master/member/member');
    }
    public function outlet()
    {
    	return view('master/outlet/outlet');
    }
    public function hak_akses()
    {
    	return view('master/hak_akses/hak_akses');
    }
    public function akun_keuangan()
    {
    	return view('master/keuangan/akun_keuangan/akun_keuangan');
    }
    public function transaksi_keuangan()
    {
    	return view('master/keuangan/transaksi_keuangan/transaksi_keuangan');
    }
    public function posisi()
    {
    	return view('master/posisi/posisi');
    }
}
