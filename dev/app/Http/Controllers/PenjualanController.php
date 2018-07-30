<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function rencana_penjualan()
    {
    	return view('penjualan.rencana_penjualan.rencana_penjualan');
    }
    public function monitoring_penjualan()
    {
    	return view('penjualan.monitoring_penjualan.monitoring_penjualan');
    }
    public function analisa_penjualan()
    {
    	return view('penjualan.analisa_penjualan.analisa_penjualan');
    }
    public function proses_penjualan()
    {
    	return view('penjualan.aktivitas_penjualan.proses_penjualan.proses_penjualan');
    }
    public function pemesanan_barang()
    {
    	return view('penjualan.aktivitas_penjualan.pemesanan_barang.pemesanan_barang');
    }
    public function pembelian_via_web()
    {
    	return view('penjualan.aktivitas_penjualan.pembelian_via_web.pembelian_via_web');
    }
    public function return_penjualan()
    {
    	return view('penjualan.aktivitas_penjualan.return_penjualan.return_penjualan');
    }
}
