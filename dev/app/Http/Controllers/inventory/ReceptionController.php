<?php

namespace App\Http\Controllers\inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class ReceptionController extends Controller
{
	// Penerimaan barang dari supplier
    public function index_supplier()
    {
    	$data = DB::table('d_receipt_goods_from_supplier')
    			->select('d_receipt_goods_from_supplier.*', 'd_supplier.s_company')
    			->join('d_supplier', 'd_receipt_goods_from_supplier.rs_id_supplier', '=', 'd_supplier.s_id')
    			->get();
    	return view('inventory.receipt_goods.supplier.index')->with(compact('data'));
    }

    public function add_items_from_supplier(Request $request)
    {
    	if ($request->isMethod('post')) {
    		
    		$data = $request->all();
    		// print_r($data); die;
    		$sql = DB::table('d_receipt_goods_from_supplier')->insert([
                'rs_kategori' 	=> $data['kategori'],
                'rs_imei'		=> $data['imei'],
                'rs_kode_barang'=> $data['kode_barang'],
                'rs_nama_barang'=> $data['nama_barang'],
                'rs_qty'		=> $data['qty'],
                'rs_tgl_masuk'	=> $data['tgl_masuk'],
                'rs_id_supplier'=> $data['supplier']
            ]);
            if ($sql) {
                return redirect('/inventory/penerimaan/supplier')->with('flash_message_success','Semua Data Yang Terakhir Anda Input Berhasil Tersimpan Di Database!');
            }else{
                return redirect('/inventory/penerimaan/supplier')->with('flash_message_error','Semua Data Yang Terakhir Anda Input Gagal Tersimpan Di Database!');
            }

    	}

    	$data_supplier = DB::table('d_supplier')->get();
    	return view('inventory.receipt_goods.supplier.add')->with(compact('data_supplier'));
    }
    // End penerimaan barang dari supplier
}
