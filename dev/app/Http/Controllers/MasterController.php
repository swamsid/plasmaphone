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
        $posisi_karyawan = DB::table('d_posisi_karyawan')->get();
    	return view('master/posisi/posisi')->with(compact('posisi_karyawan'));
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

    public function multiple_edit_supplier($ids = null)
    {
        $id = explode(",", $ids);
        $dataSupplier = DB::table('d_supplier')->whereIn('s_id', $id)->get();
        $count = count($dataSupplier);
        $dt1 = array();
        $dt2 = array();
        foreach ($dataSupplier as $value) {
            $dt1 = array(
                "s_id"      => $value->s_id,
                "s_company" => $value->s_company,
                "s_name"    => $value->s_name,
                "s_address" => $value->s_address,
                "s_phone"   => $value->s_phone,
                "s_fax"     => $value->s_fax,
                "s_note"    => $value->s_note,
                "s_limit"   => $value->s_limit,
                "count"     => $count
            );
            $dt2[] = $dt1;
        }
        echo json_encode($dt2);
    }

    public function edit_multiple_supplier(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            for ($i=0; $i < count($data['id_supplier']); $i++) { 
                $sql = DB::table('d_supplier')->where(['s_id'=>$data['id_supplier'][$i]])->update([
                    's_company' => $data['nama_perusahaan'][$i],
                    's_name'    => $data['nama_suplier'][$i],
                    's_address' => $data['alamat_suplier'][$i],
                    's_phone'   => $data['telp_suplier'][$i],
                    's_fax'     => $data['fax_suplier'][$i],
                    's_note'    => $data['keterangan'][$i],
                    's_limit'   => $data['limit'][$i],
                    's_update'  => date('Y-m-d H:m:s')
                ]);
            }

            if ($sql) {
                return redirect()->back()->with('flash_message_success','Data supplier berhasil diubah!');
            }else{
                return redirect()->back()->with('flash_message_error','Data supplier gagal diubah!');
            }
        }
    }

    public function multiple_delete_supplier($ids = null)
    {
        $id = explode(",", $ids);

        $sql = DB::table('d_supplier')->whereIn('s_id', $id)->delete();

        if ($sql) {
            return redirect()->back()->with('flash_message_success','Data supplier berhasil dihapus!');
        }else{
            return redirect()->back()->with('flash_message_error','Data supplier gagal dihapus!');
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

    public function multiple_delete_jabatan($ids = null)
    {
        $id = explode(",", $ids);

        $sql = DB::table('d_jabatan')->whereIn('id', $id)->delete();

        if ($sql) {
            return redirect()->back()->with('flash_message_success','Data jabatan berhasil dihapus!');
        }else{
            return redirect()->back()->with('flash_message_error','Data jabatan gagal dihapus!');
        }
    }

    public function multiple_edit_jabatan($ids = null)
    {
        $id = explode(",", $ids);
        $dataJabatan = DB::table('d_jabatan')->whereIn('id', $id)->get();
        $count = count($dataJabatan);
        $dt1 = array();
        $dt2 = array();
        foreach ($dataJabatan as $value) {
            $dt1 = array(
                "id"=>$value->id,
                "kode"=>$value->kode,
                "nama"=>$value->nama,
                "gaji_pokok"=>$value->gaji_pokok,
                "tunjangan_jabatan"=>$value->tunjangan_jabatan,
                "tunjangan_kehadiran"=>$value->tunjangan_kehadiran,
                "tunjangan_makan"=>$value->tunjangan_makan,
                "count"=>$count
            );
            $dt2[] = $dt1;
        }
        echo json_encode($dt2);
    }

    public function edit_multiple_jabatan(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            for ($i=0; $i < count($data['id_jabatan']); $i++) { 
                $sql = DB::table('d_jabatan')->where(['id'=>$data['id_jabatan'][$i]])->update([
                    'kode'                  => $data['kode'][$i],
                    'nama'                  => $data['nama'][$i],
                    'gaji_pokok'            => $data['gaji_pokok'][$i],
                    'tunjangan_jabatan'     => $data['tunjangan_jabatan'][$i],
                    'tunjangan_kehadiran'   => $data['tunjangan_kehadiran'][$i],
                    'tunjangan_makan'       => $data['tunjangan_makan'][$i],
                    's_update'              => date('Y-m-d H:m:s')
                ]);
            }

            if ($sql) {
                return redirect()->back()->with('flash_message_success','Data jabatan berhasil diubah!');
            }else{
                return redirect()->back()->with('flash_message_error','Data jabatan gagal diubah!');
            }
        }
    }

    // CRUD Posisi karyawan
    public function add_posisi(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            
            $sql = DB::table('d_posisi_karyawan')->insert([
                'nama_posisi'   => $data['nama_posisi'],
                'created_at'    => date('Y-m-d H:m:s'),
                'updated_at'    => date('Y-m-d H:m:s')
            ]);

            if ($sql) {
                return redirect()->back()->with('flash_message_success','Data posisi berhasil disimpan!');
            }else{
                return redirect()->back()->with('flash_message_error','Data posisi gagal disimpan!');
            }
        }
    }

    public function edit_posisi(Request $request, $id = null)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            
            $sql = DB::table('d_posisi_karyawan')->where(['id_posisi'=>$id])->update([
                'nama_posisi' => $data['nama_posisi'],
                'updated_at'  => date('Y-m-d H:m:s')
            ]);

            if ($sql) {
                return redirect()->back()->with('flash_message_success','Data posisi berhasil diubah!');
            }else{
                return redirect()->back()->with('flash_message_error','Data posisi gagal diubah!');
            }

        } 
    }

    public function delete_posisi($id = null)
    {
        $sql = DB::table('d_posisi_karyawan')->where(['id_posisi'=>$id])->delete();

        if ($sql) {
            return redirect()->back()->with('flash_message_success','Data posisi berhasil dihapus!');
        }else{
            return redirect()->back()->with('flash_message_error','Data posisi gagal dihapus!');
        }
    }

    public function multiple_delete_posisi($ids = null)
    {
        $id = explode(",", $ids);
        $sql = DB::table('d_posisi_karyawan')->whereIn('id_posisi', $id)->delete();
        if ($sql) {
            return redirect()->back()->with('flash_message_success','Data posisi berhasil dihapus!');
        }else{
            return redirect()->back()->with('flash_message_error','Data posisi gagal dihapus!');
        }
    }

    public function multiple_edit_posisi(Request $request, $ids = null)
    {
        $id = explode(",", $ids);
        $dataPosisi = DB::table('d_posisi_karyawan')->whereIn('id_posisi', $id)->get();
        $count = count($dataPosisi);
        $dt1 = array();
        $dt2 = array();
        foreach ($dataPosisi as $value) {
            $dt1 = array("id"=>$value->id_posisi, "nama"=>$value->nama_posisi, "count"=>$count);
            $dt2[] = $dt1;
        }

        echo json_encode($dt2);
    }

    public function edit_multiple_posisi(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            for ($i=0; $i < count($data['id_posisi']); $i++) { 
                $sql = DB::table('d_posisi_karyawan')->where(['id_posisi'=>$data['id_posisi'][$i]])->update([
                    'nama_posisi' => $data['nama_posisi'][$i],
                    'updated_at'  => date('Y-m-d H:m:s')
                ]);
            }

            if ($sql) {
                return redirect()->back()->with('flash_message_success','Data posisi berhasil diubah!');
            }else{
                return redirect()->back()->with('flash_message_error','Data posisi gagal diubah!');
            }
        }
    }

}
