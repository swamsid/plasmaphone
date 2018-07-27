<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function konfirmasi_pembelian()
    {
    	return view('pembelian/konfirmasi_pembelian/konfirmasi_pembelian');
    }

    public function return_barang()
    {
    	return view('pembelian/return_barang/return_barang');
    }
    public function purchase_order()
    {
    	return view('pembelian/purchase_order/purchase_order');
    }
    public function refund()
    {
    	return view('pembelian/refund/refund');
    }
    public function rencana_pembelian()
    {
    	return view('pembelian/rencana_pembelian/rencana_pembelian');
    }
}
