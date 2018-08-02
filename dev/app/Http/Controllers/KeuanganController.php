<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function dashboard()
    {
    	return view('keuangan.dashboard.dashboard');
    }
    public function transaksi_memorial()
    {
    	return view('keuangan.transaksi_memorial.transaksi_memorial');
    }
    public function akun_hutang()
    {
    	return view('keuangan.akun_hutang.akun_hutang');
    }
    public function akun_piutang()
    {
    	return view('keuangan.akun_piutang.akun_piutang');
    }
    public function pengelolaan_pajak()
    {
    	return view('keuangan.pengelolaan_pajak.pengelolaan_pajak');
    }
    public function neraca()
    {
    	return view('keuangan.laporan_keuangan.neraca.neraca');
    }
    public function laba_rugi()
    {
    	return view('keuangan.laporan_keuangan.laba_rugi.laba_rugi');
    }
    public function arus_kas()
    {
    	return view('keuangan.laporan_keuangan.arus_kas.arus_kas');
    }
    public function list()
    {
    	return view('keuangan.analisa_keuangan.list.list');
    }

}
