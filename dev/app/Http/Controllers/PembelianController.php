<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\pembelian\order as order;
use DB;
use Session;
// use PDF;

class PembelianController extends Controller
{
    public function konfirmasi_pembelian()
    {
        $data = "Null";
        $data_supplier = DB::table('d_supplier')->get();
    	return view('pembelian/konfirmasi_pembelian/index', compact('data', 'data_supplier'));
    }

    public function get_data_order($id)
    {
        $data_order = DB::table('d_request_order_dt')
                        ->select('d_request_order_dt.*', 'd_request_order.*', 'd_supplier.*')
                        ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                        ->join('d_supplier', 'd_request_order_dt.rdt_supplier', '=', 'd_supplier.s_id', 'left')
                ->where('d_request_order_dt.rdt_supplier', $id)->get();
        $data = $id;
        $data_supplier = DB::table('d_supplier')->get();

        // print_r($data_order); die;

        return view('pembelian/konfirmasi_pembelian/index', compact('data', 'data_supplier', 'data_order'));
    }

    public function generatePDF($id)
    {
        $data_order = DB::table('d_request_order_dt')
                        ->select('d_request_order_dt.*', 'd_request_order.*', 'd_supplier.*')
                        ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                        ->join('d_supplier', 'd_request_order_dt.rdt_supplier', '=', 'd_supplier.s_id', 'left')
                ->where('d_request_order_dt.rdt_supplier', $id)->get();

        // $pdf = PDF::loadView('generate_pdf', $data_order);
        // return $pdf->download('konfirmasi_pembelian.pdf');
        return view('pembelian.konfirmasi_pembelian.generate_pdf', compact('data_order'));
    }

    public function return_barang()
    {
    	return view('pembelian/return_barang/return_barang');
    }
    public function purchase_order()
    {
        $data = DB::table('d_purchase_order_dt')
                ->select('d_purchase_order_dt.*', 'd_purchase_order.*', 'd_supplier.*')
                ->join('d_purchase_order', 'd_purchase_order_dt.podt_purchase', 'd_purchase_order.po_no')
                ->join('d_supplier', 'd_purchase_order_dt.podt_kode_suplier', '=', 'd_supplier.s_id')
                ->get();
    	return view('pembelian/purchase_order/index', compact('data'));
    }

    public function purchase_order_add()
    {
        $data_request = DB::table('d_request_order_dt')
                        ->select('d_request_order.*', 'd_request_order_dt.*')
                        ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                        ->join('d_purchase_order', 'd_request_order_dt.rdt_no', '=', 'd_purchase_order.po_request_order_no', 'left')
                        ->where('d_request_order_dt.rdt_status', '=', 'Rencana Pembelian')
                        ->get();
        return view('pembelian.purchase_order.tambah_purchase_order')->with(compact('data_request'));
    }

    public function get_request_purchase($id)
    {
        $data = DB::table('d_request_order_dt')
                ->select('d_request_order.*', 'd_request_order_dt.*', 'd_request_order.ro_cabang', 'd_supplier.s_name')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->join('d_supplier', 'd_request_order_dt.rdt_supplier', '=', 'd_supplier.s_id')
                ->where('d_request_order_dt.rdt_no', $id)
                ->first();
        return json_encode($data);
    }

    public function get_purchase($id)
    {
        // return json_encode($id); die;
        $data = DB::table('d_purchase_order_dt')
                ->select('d_purchase_order.*', 'd_purchase_order_dt.*', 'd_request_order.ro_cabang', 'd_supplier.s_name')
                ->join('d_purchase_order', 'd_purchase_order_dt.podt_purchase', '=', 'd_purchase_order.po_no')
                ->join('d_request_order_dt', 'd_purchase_order.po_request_order_no', '=', 'd_request_order_dt.rdt_no')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->join('d_supplier', 'd_purchase_order_dt.podt_kode_suplier', '=', 'd_supplier.s_id')
                ->where('d_purchase_order_dt.podt_no', $id)
                ->first();
        return json_encode($data);
    }

    function formatPrice($data)
    {
        $explode_rp =  implode("", explode("Rp", $data));
        return implode("", explode(".", $explode_rp));
    }

    public function add_purchase(Request $request)
    {
        // print_r($request->all()); die;
        $total_harga = $this->formatPrice($request->total_harga);
        $total_bayar = $this->formatPrice($request->total_bayar);
        $harga_satuan = $this->formatPrice($request->harga_satuan);
        // echo $harga_satuan; die;
        $order = DB::table('d_purchase_order')->get();
        $count = count($order)+1;
        $po_no = "PO".date('Ymd').$count;
        $dt_order = DB::table('d_purchase_order_dt')->get();
        $count = count($dt_order)+1;
        $podt_no = date('Ymd').$count;
        // print_r($po_no); die;
        if ($request->diskon == "") {
            # code...
            $diskon = "0";
        }else{
            $diskon = $request->diskon;
        }

        $insert_purchase_order = DB::table('d_purchase_order')->insert([
                                    'po_no'=>$po_no,
                                    'po_request_order_no'=>$request->request_dt_no,
                                    'po_status'=>$request->status,
                                    'po_type_pembayaran'=>$request->tipe_pembayaran,
                                    'po_total_harga'=>$total_harga,
                                    'po_diskon'=>$diskon,
                                    'po_ppn'=>$request->ppn,
                                    'po_total_bayar'=>$total_bayar
                                ]);

        $inser_purchase_order_dt = DB::table('d_purchase_order_dt')->insert([
                                        'podt_purchase'=>$po_no,
                                        'podt_no'=>$podt_no,
                                        'podt_kode_barang'=>$request->kode_barang,
                                        'podt_kode_suplier'=>$request->id_supplier,
                                        'podt_kuantitas'=>$request->kuantitas,
                                        'podt_harga_satuan'=>$harga_satuan
                                    ]);

        $update_request_order_dt = DB::table('d_request_order_dt')
                                    ->where('rdt_no', $request->request_dt_no)
                                    ->update(['rdt_status'=>$request->status]);

        return redirect('/pembelian/purchase-order')->with('flash_message_success','Data berhasil ditambahkan!');
    }

    public function get_purchase_order($id)
    {
        $data = DB::table('d_purchase_order_dt')
                ->select('d_purchase_order_dt.*', 'd_purchase_order.*', 'd_supplier.*', 'd_request_order.ro_cabang')
                ->join('d_purchase_order', 'd_purchase_order_dt.podt_purchase', '=', 'd_purchase_order.po_no')
                ->join('d_supplier', 'd_purchase_order_dt.podt_kode_suplier', '=', 'd_supplier.s_id')
                ->join('d_request_order_dt', 'd_purchase_order.po_request_order_no', '=', 'd_request_order_dt.rdt_no')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->where('d_purchase_order_dt.podt_no', $id)->first();

        return json_encode($data);
    }

    public function edit_purchase_order(Request $request)
    {
        $data = DB::table('d_purchase_order_dt')
                ->select('d_purchase_order.*', 'd_purchase_order_dt.*', 'd_request_order.ro_cabang', 'd_supplier.s_name')
                ->join('d_purchase_order', 'd_purchase_order_dt.podt_purchase', '=', 'd_purchase_order.po_no')
                ->join('d_request_order_dt', 'd_purchase_order.po_request_order_no', '=', 'd_request_order_dt.rdt_no')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->join('d_supplier', 'd_purchase_order_dt.podt_kode_suplier', '=', 'd_supplier.s_id')
                ->where('d_purchase_order_dt.podt_no', $request->id)->get();

        if(count($data) == 0){
            return view('errors.data_not_found');
        }
        // print_r($data); die;
        return view('pembelian.purchase_order.edit_purchase_order', compact('data'));
    }

    public function update_purchase_order(Request $request)
    {
        // print_r($request->all()); die;
        $total_harga = $this->formatPrice($request->total_harga);
        $total_bayar = $this->formatPrice($request->total_bayar);
        $harga_satuan = $this->formatPrice($request->harga_satuan);
        $data = DB::table('d_purchase_order_dt')->where('podt_no', $request->podt_no);

        if(!$data->first()){
            $response = [
                'status'    => 'tidak ada',
                'content'   => 'null'
            ];

            return json_encode($response);
        }else{
            $data->update([
                'podt_harga_satuan'=>$harga_satuan
            ]);
            DB::table('d_purchase_order')
            ->where('po_no', $request->po_no)
            ->update([
                'po_status'=>$request->status,
                'po_type_pembayaran'=>$request->tipe_pembayaran,
                'po_total_harga'=>$total_harga,
                'po_diskon'=>$request->diskon,
                'po_ppn'=>$request->ppn,
                'po_total_bayar'=>$total_bayar
            ]);

            DB::table('d_request_order_dt')
            ->where('rdt_no', $request->request_order)
            ->update([
                'rdt_status'=>$request->status
            ]);

            Session::flash('flash_message_success', 'Semua Data Yang Telah Anda Ubah Berhasil Tersimpan.');
            $response = [
                'status'    => 'berhasil',
                'content'   => null
            ];

            return json_encode($response);
        }
    }

    public function multiple_edit_purchase_order(Request $request)
    {
        $data = DB::table('d_purchase_order_dt')
                ->select('d_purchase_order.*', 'd_purchase_order_dt.*', 'd_request_order.ro_cabang', 'd_supplier.s_name')
                ->join('d_purchase_order', 'd_purchase_order_dt.podt_purchase', '=', 'd_purchase_order.po_no')
                ->join('d_request_order_dt', 'd_purchase_order.po_request_order_no', '=', 'd_request_order_dt.rdt_no')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->join('d_supplier', 'd_purchase_order_dt.podt_kode_suplier', '=', 'd_supplier.s_id')
                ->whereIn('d_purchase_order_dt.podt_no', $request->data_check)->get();

        if(count($data) == 0){
            return view('errors.data_not_found');
        }

        return view('pembelian.purchase_order.edit_purchase_order', compact('data'));
    }

    public function multiple_delete_purchase_order(Request $request)
    {
        for ($i = 0; $i < count($request->podt_no); $i++) {
            # code...
            // print_r($key);echo ": ";print_r($value); echo "<pre>";
            DB::table('d_purchase_order_dt')->where('podt_no', $request->podt_no[$i])->delete();
            $check_podt_no = DB::table('d_purchase_order_dt')
                        ->where('podt_no', $request->podt_no[$i])
                        ->get();
            if (count($check_podt_no) == 0) {
                $check_po = DB::table('d_purchase_order')
                        ->where('po_no', $request->podt_purchase[$i])
                        ->get();
                if (count($check_po) != 0) {
                    DB::table('d_purchase_order')->where('po_no', $request->podt_purchase[$i])->delete();
                }
                
            }
            
        }        
        
        Session::flash('flash_message_success', 'Semua Data Yang Anda Pilih Berhasil Dihapus.');

        return  json_encode([
                    'status'    => 'berhasil'
                ]);
    }

    public function refund()
    {
    	return view('pembelian/refund/refund');
    }
    public function request_order()
    {
        $r_orders_dt = DB::table('d_request_order_dt')
                        ->select('d_request_order_dt.*', 'd_request_order.ro_cabang')
                        ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                        ->get();
        return view('pembelian/request_order/view_request_order')->with(compact('r_orders_dt'));
    }

    public function request_order_add(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();

            // print_r($data); die;

            $ro_no = date('YmdHms');
            $rdt_no = date('HmsYmd').'1';

            $sql = DB::table('d_request_order')->insert([
                        'ro_no'=>$ro_no,
                        'ro_cabang'=>$data['ro_cabang']
                    ]);
            $no = 1;
            foreach ($data['kode_barang'] as $key => $value) {
                
                if (!empty($value)) {

                    $check_rdtno = DB::table('d_request_order_dt')->where('rdt_no', $rdt_no)->get();

                    if (count($check_rdtno) > 0) {
                        $rdt_no = date('HmsYmd').$no;
                    }
                    
                    $sql2 = DB::table('d_request_order_dt')->insert([
                        'rdt_request'=>$ro_no,
                        'rdt_no'=>$rdt_no,
                        'rdt_kode_barang'=>$data['kode_barang'][$key],
                        'rdt_kuantitas'=>$data['kuantitas'][$key],
                        'rdt_kuantitas_approv'=>'0',
                        'rdt_status'=>'Pending',
                        'rdt_supplier'=>"0"
                    ]);
                }
                $no++;
            }

            return redirect('/pembelian/request-order')->with('flash_message_success','Data berhasil ditambahkan!');
        }
        return view('pembelian/request_order/tambah_request_order');
    }

    public function edit_order(Request $request)
    {
        // $data = order::where('rdt_no', $request->id)->get();
        $data = DB::table('d_request_order_dt')
                ->select('d_request_order.*', 'd_request_order_dt.*')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->where('d_request_order_dt.rdt_no', $request->id)->get();

        if(count($data) == 0){
            return view('errors.data_not_found');
        }

        return view('pembelian.request_order.edit_request_order', compact('data'));
    }

    public function edit_multiple(Request $request)
    {
        $data = DB::table('d_request_order_dt')
                ->select('d_request_order.ro_no', 'd_request_order.ro_cabang', 'd_request_order_dt.rdt_request', 'd_request_order_dt.rdt_no', 'd_request_order_dt.rdt_kode_barang', 'd_request_order_dt.rdt_kuantitas', 'd_request_order_dt.rdt_kuantitas_approv')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->whereIn('d_request_order_dt.rdt_no', $request->data_check)->get();
        return view('pembelian.request_order.edit_request_order', compact('data'));
    }

    public function get_order($id)
    {
        // $data = order::find($id);
        $data = DB::table('d_request_order_dt')
                        ->select('d_request_order_dt.*', 'd_request_order.*', 'd_supplier.*')
                        ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                        ->join('d_supplier', 'd_request_order_dt.rdt_supplier', '=', 'd_supplier.s_id', 'left')
                ->where('d_request_order_dt.rdt_no', $id)->first();

        return json_encode($data);
    }

    public function update_order(Request $request)
    {
        // return json_encode($request->all());

        $data = DB::table('d_request_order_dt')->where('rdt_no', $request->rdt_request_no);

        if(!$data->first()){
            $response = [
                'status'    => 'tidak ada',
                'content'   => 'null'
            ];

            return json_encode($response);
        }else{
            $data->update([
                'rdt_kode_barang'   => $request->kode_barang,
                'rdt_kuantitas'     => $request->kuantitas
            ]);

            Session::flash('flash_message_success', 'Semua Data Yang Telah Anda Ubah Berhasil Tersimpan.');
            $response = [
                'status'    => 'berhasil',
                'content'   => null
            ];

            return json_encode($response);
        }
    }

    public function multiple_delete_order(Request $request)
    {

        // print_r($request); die;

        for ($i = 0; $i < count($request->rdt_request); $i++) {
            # code...
            // print_r($key);echo ": ";print_r($value); echo "<pre>";
            DB::table('d_request_order_dt')->where('rdt_no', $request->rdt_no[$i])->delete();
            $check_rdt_req = DB::table('d_request_order_dt')
                        ->where('rdt_request', $request->rdt_request[$i])
                        ->get();
            if (count($check_rdt_req) == 0) {
                $check_ro = DB::table('d_request_order')
                        ->where('ro_no', $request->rdt_request[$i])
                        ->get();
                if (count($check_ro) != 0) {
                    DB::table('d_request_order')->where('ro_no', $request->rdt_request[$i])->delete();
                }
                
            }
            
        }        
        
        Session::flash('flash_message_success', 'Semua Data Yang Anda Pilih Berhasil Dihapus.');

        return  json_encode([
                    'status'    => 'berhasil'
                ]);
    }

    public function request_order_status(Request $request)
    {
        $data = $request->all();

        // echo json_encode($data); die;

        if ($data['status'] == "Pending") {
            $check_data = DB::table('d_rencana_pembelian')
                    ->where('no_rdt',$data['rdt_no'])
                    ->get();
            if (count($check_data) > 0) {
                $getData = DB::table('d_rencana_pembelian')
                            ->where('no_rdt',$data['rdt_no'])
                            ->first();
                DB::table('d_rencana_pembelian_dt')
                    ->where('rpdt_rencana',$getData->rp_no)
                    ->delete();
                DB::table('d_rencana_pembelian')
                    ->where('no_rdt',$data['rdt_no'])
                    ->delete();
            }
            $sql = DB::table('d_request_order_dt')
                    ->where('rdt_request',$data['rdt_request'])
                    ->where('rdt_no',$data['rdt_no'])
                    ->update([
                'rdt_status'=>""
            ]);
            if ($sql) {
                Session::flash('flash_message_success', 'Status untuk Request Detail "'.$data['rdt_no'].'" berhasil diubah ke "Pending".');
                $response = [
                    'status'    => 'pending',
                    'content'   => null
                ];
                return json_encode($response);
            }else{
                return redirect()->back()->with('flash_message_error','Gagal merubah status order barang!!!');
            }
        } else if ($data['status'] == "Dibatalkan") {
            
            $check_data = DB::table('d_rencana_pembelian')
                    ->where('no_rdt',$data['rdt_no'])
                    ->get();
            if (count($check_data) > 0) {
                $getData = DB::table('d_rencana_pembelian')
                            ->where('no_rdt',$data['rdt_no'])
                            ->first();
                DB::table('d_rencana_pembelian_dt')
                    ->where('rpdt_rencana',$getData->rp_no)
                    ->delete();
                DB::table('d_rencana_pembelian')
                    ->where('no_rdt',$data['rdt_no'])
                    ->delete();
            }
            $sql = DB::table('d_request_order_dt')
                    ->where('rdt_request',$data['rdt_request'])
                    ->where('rdt_no',$data['rdt_no'])
                    ->update([
                'rdt_status'=>$data['status']
            ]);
            if ($sql) {
                Session::flash('flash_message_success', 'Status untuk Request Detail "'.$data['rdt_no'].'" berhasil diubah ke "Dibatalkan".');
                $response = [
                    'status'    => 'dibatalkan',
                    'content'   => null
                ];
                return json_encode($response);
            }else{
                return redirect()->back()->with('flash_message_error','Gagal merubah status order barang!!!');
            }
        } else if ($data['status'] == "Ditunda") {
            $check_data = DB::table('d_rencana_pembelian')
                    ->where('no_rdt',$data['rdt_no'])
                    ->get();
            if (count($check_data) > 0) {
                $getData = DB::table('d_rencana_pembelian')
                            ->where('no_rdt',$data['rdt_no'])
                            ->first();
                DB::table('d_rencana_pembelian_dt')
                    ->where('rpdt_rencana',$getData->rp_no)
                    ->delete();
                DB::table('d_rencana_pembelian')
                    ->where('no_rdt',$data['rdt_no'])
                    ->delete();
            }
            $sql = DB::table('d_request_order_dt')
                    ->where('rdt_request',$data['rdt_request'])
                    ->where('rdt_no',$data['rdt_no'])
                    ->update([
                'rdt_status'=>$data['status']
            ]);
            if ($sql) {
                Session::flash('flash_message_success', 'Status untuk Request Detail "'.$data['rdt_no'].'" berhasil diubah ke "Ditunda".');
                $response = [
                    'status'    => 'ditunda',
                    'content'   => null
                ];
                return json_encode($response);
            }else{
                return redirect()->back()->with('flash_message_error','Gagal merubah status order barang!!!');
            }
        } else {
            $check = DB::table('d_rencana_pembelian')->get();
            $no_rp = date('Ymd').count($check)+1;

            $check_dt = DB::table('d_rencana_pembelian_dt')->get();
            $no_rpdt = date('dmY').count($check_dt)+1;

            $sql1 = DB::table('d_request_order_dt')
                    ->where('rdt_request',$data['rdt_request'])
                    ->where('rdt_no',$data['rdt_no'])
                    ->update([
                'rdt_status'=>$data['status']
            ]);

            // $sql2 = DB::table('d_rencana_pembelian')->insert([
            //     'rp_no'=>$no_rp,
            //     'no_rdt'=>$data['rdt_no']
            // ]);

            // $sql3 = DB::table('d_rencana_pembelian_dt')->insert([
            //     'rpdt_rencana'=>$no_rp,
            //     'rpdt_no'=>$no_rpdt,
            //     'rpdt_kode_barang'=>$data['kode_barang'],
            //     'rpdt_qty'=>$data['kuantitas'],
            //     'rpdt_kuantitas_approv'=>$data['kuantitas_approv']
            // ]);

            if ($sql1) {
                Session::flash('flash_message_success', 'Status untuk Request Detail "'.$data['rdt_no'].'" berhasil diubah ke "Rencana Pembelian".');
                $response = [
                    'status'    => 'rencana pembelian',
                    'content'   => null
                ];
                return json_encode($response);
            }else{
                return redirect()->back()->with('flash_message_error','Status order barang gagal diubah!!');
            }
        }

    }

    public function rencana_pembelian()
    {
        $r_orders = DB::table('d_request_order_dt')
                        ->select('d_request_order_dt.*', 'd_request_order.ro_cabang', 'd_supplier.s_name')
                        ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                        ->join('d_supplier', 'd_request_order_dt.rdt_supplier', '=', 'd_supplier.s_id', 'left')
                        ->get();
    	return view('pembelian/rencana_pembelian/index')->with(compact('r_orders'));
    }

    public function multiple_edit_rencana_pembelian(Request $request)
    {
        // print_r($request->all()); die;
        $data = DB::table('d_request_order_dt')
                ->select('d_request_order.*', 'd_request_order_dt.*')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->whereIn('d_request_order_dt.rdt_no', $request->data_check)->get();
        $data_supplier = DB::table('d_supplier')->get();

        if(count($data) == 0){
            return view('errors.data_not_found');
        }

        return view('pembelian.rencana_pembelian.edit_rencana_pembelian', compact('data','data_supplier'));
    }

    public function rencana_pembelian_edit(Request $request)
    {
        $data = DB::table('d_request_order_dt')
                ->select('d_request_order.*', 'd_request_order_dt.*')
                ->join('d_request_order', 'd_request_order_dt.rdt_request', '=', 'd_request_order.ro_no')
                ->where('d_request_order_dt.rdt_no', $request->id)->get();
        $data_supplier = DB::table('d_supplier')->get();

        if(count($data) == 0){
            return view('errors.data_not_found');
        }

        return view('pembelian.rencana_pembelian.edit_rencana_pembelian', compact('data','data_supplier'));
    }

    public function update_rencana_pembelian(Request $request)
    {
        // return json_encode($request->all());
        // print_r($request->all()); die;

        $data = DB::table('d_request_order_dt')->where('rdt_no', $request->rdt_request_no);

        if(!$data->first()){
            $response = [
                'status'    => 'tidak ada',
                'content'   => 'null'
            ];

            return json_encode($response);
        }else{
            $data->update([
                'rdt_kuantitas_approv'     => $request->kuantitas_approv,
                'rdt_supplier' => $request->supplier
            ]);

            Session::flash('flash_message_success', 'Semua Data Yang Telah Anda Ubah Berhasil Tersimpan.');
            $response = [
                'status'    => 'berhasil',
                'content'   => null
            ];

            return json_encode($response);
        }
    }
    
}
