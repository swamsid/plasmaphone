<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterController extends Controller
{
    public function barang()
    {
    	return view('master/barang/barang');
    }
    public function suplier()
    {
        $suppliers = DB::table('d_supplier')->get();
    	return view('master/suplier/suplier')->with(compact('suppliers'));
    }
    public function user()
    {
    	return view('master/user/user');
    }
    public function jabatan()
    {
        $jabatans = DB::table('d_jabatan')->get();
    	return view('master/jabatan/jabatan')->with(compact('jabatans'));
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

    // CRUD Suplier
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
                return redirect('master/suplier/suplier')->with('flash_message_success','Data supplier berhasil disimpan!');
            }else{
                return redirect('master/suplier/suplier')->with('flash_message_error','Data supplier gagal disimpan!');
            }
            
        }
        return view('master.suplier.tambah_suplier');
    }

    public function edit_supplier(Request $request, $id = null)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();

            $sql = DB::table('d_supplier')->where(['s_id'=>$id])->update([
                's_company' => $data['nama_perusahaan'],
                's_name'    => $data['nama_suplier'],
                's_address' => $data['alamat_suplier'],
                's_phone'   => $data['telp_suplier'],
                's_fax'     => $data['fax_suplier'],
                's_note'    => $data['keterangan'],
                's_limit'   => $data['limit'],
                's_update'  => date('Y-m-d H:m:s')
            ]);

            if ($sql) {
                return redirect('master/suplier/suplier')->with('flash_message_success','Data supplier berhasil diubah!');
            }else{
                return redirect('master/suplier/suplier')->with('flash_message_error','Data supplier gagal diubah!');
            }
        }
        $suppliers = DB::table('d_supplier')->where(['s_id'=>$id])->first();
        return view('master.suplier.edit_supplier')->with(compact('suppliers'));
    }

    public function delete_supplier($id = null)
    {
        $sql = DB::table('d_supplier')->where(['s_id'=>$id])->delete();

        if ($sql) {
            return redirect('master/suplier/suplier')->with('flash_message_success','Data supplier berhasil dihapus!');
        }else{
            return redirect('master/suplier/suplier')->with('flash_message_error','Data supplier gagal dihapus!');
        }
    }

    // CRUD Jabatan
    public function add_jabatan(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();

            $sql = DB::table('d_jabatan')->insert([
                'kode'                  => $data['kode'],
                'nama'                  => $data['nama'],
                'gaji_pokok'            => $data['gaji_pokok'],
                'tunjangan_jabatan'     => $data['tunjangan_jabatan'],
                'tunjangan_kehadiran'   => $data['tunjangan_kehadiran'],
                'tunjangan_makan'       => $data['tunjangan_makan'],
                's_insert'              => date('Y-m-d H:m:s'),
                's_update'              => date('Y-m-d H:m:s')
            ]);

            if ($sql) {
                return redirect('master/jabatan/jabatan')->with('flash_message_success','Data jabatan berhasil disimpan!');
            }else{
                return redirect('master/jabatan/jabatan')->with('flash_message_error','Data jabatan gagal disimpan!');
            }
        }
        return view('master.jabatan.tambah_jabatan');
    }

    public function edit_jabatan(Request $request, $id = null)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();

            $sql = DB::table('d_jabatan')->where(['id'=>$id])->update([
                'kode' => $data['kode'],
                'nama' => $data['nama'],
                'gaji_pokok' => $data['gaji_pokok'],
                'tunjangan_jabatan' => $data['tunjangan_jabatan'],
                'tunjangan_kehadiran' => $data['tunjangan_kehadiran'],
                'tunjangan_makan' => $data['tunjangan_makan'],
                's_update' => date('Y-m-d H:m:s')
            ]);

            if ($sql) {
                return redirect('master/jabatan/jabatan')->with('flash_message_success','Data jabatan berhasil diubah!');
            }else{
                return redirect('master/jabatan/jabatan')->with('flash_message_error','Data jabatan gagal diubah!');
            }
        }
        $jabatan = DB::table('d_jabatan')->where(['id'=>$id])->first();
        return view('master.jabatan.edit_jabatan')->with(compact('jabatan'));
    }

    public function delete_jabatan($id = null)
    {
        $sql = DB::table('d_jabatan')->where(['id'=>$id])->delete();

        if ($sql) {
            return redirect('master/jabatan/jabatan')->with('flash_message_success','Data jabatan berhasil dihapus!');
        }else{
            return redirect('master/jabatan/jabatan')->with('flash_message_error','Data jabatan gagal dihapus!');
        }
    }

}
