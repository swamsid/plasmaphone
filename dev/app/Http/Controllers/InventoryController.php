<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function suplier()
    {
    	return view('inventory.penerimaan_barang.suplier.suplier');
    }
    public function pusat()
    {
    	return view('inventory.penerimaan_barang.pusat.pusat');
    }
    public function opname_barang()
    {
    	return view('inventory.opname_barang.opname_barang');
    }
    public function minimum_stock()
    {
    	return view('inventory.minimum_stock.minimum_stock');
    }
}
