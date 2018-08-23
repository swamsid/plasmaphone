<?php

namespace App\Http\Controllers\master\suplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class suplier_controller extends Controller
{
    public function suplier()
    {
        $suppliers = DB::table('d_supplier')->get();
    	return view('master/suplier/index')->with(compact('suppliers'));
    }

    public function add_suplier(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            $sql = DB::table('d_supplier')->insert([
                's_company' => $data['nama_perusahaan'],
                's_name'    => $data['nama_suplier'],
                's_address' => $data['alamat_suplier'],
                's_phone'   => $data['telp_suplier'],
                's_fax'     => $data['fax_suplier'],
                's_note'    => $data['keterangan'],
                's_insert'  => date('Y-m-d H:m:s'),
                's_update'  => date('Y-m-d H:m:s'),
                's_limit'   => $data['limit']
            ]);
            if ($sql) {
                return redirect('master/suplier/suplier')->with('flash_message_success','Semua Data Supplier Yang Terakhir Anda Input Berhasil Tersimpan Di Database!');
            }else{
                return redirect('master/suplier/suplier')->with('flash_message_error','Semua Data Supplier Yang Terakhir Anda Input Gagal Tersimpan Di Database!');
            }
            
        }
        return view('master.suplier.tambah_suplier');
    }

    public function multiple_delete(Request $request){
        return json_encode($request->all());
    }
}
