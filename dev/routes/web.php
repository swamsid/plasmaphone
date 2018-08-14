<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/helper', function(){
	return view('helper_page');
});

Route::get('/makeUser', [
	'uses'	=> 'authController@makeUser',
	'as'	=> 'auth.makeUser'
]);

// Route::get('/cek', function(){
// 	return json_encode(Auth::check());
// });

route::get("/", function(){
	if(Auth::check()){
		return redirect()->route("home");
	}else{
		return redirect()->route("login");
	}
});

// route belum login

Route::group(['middleware' => 'guest'], function(){
	Route::get('/login', function () {
	    return view('auth/sign-in');
	})->name('login');

	Route::post('/login', [
		'uses'	=> 'authController@authenticate',
		'as'	=> 'auth.authenticate'
	]);
});




// route khusus Login

Route::group(['middleware' => 'auth'], function(){

	Route::get('/logout', [
		'uses'	=> 'authController@logout',
		'as'	=> 'auth.logout'
	]);

	Route::get('/home', function () {
	    return view('welcome');
	})->name('home');

	Route::get('/register', function () {
	    return view('auth/sign-up');
	});

// Log Activity
	Route::get('/log_activity', 'LogActivityController@log_activity');
// Log Activity End


// Master User

	Route::get('/master/user', 'data_master\master_user\master_user_controller@index')->name('user.index');
	Route::get('/master/user/create', 'data_master\master_user\master_user_controller@create')->name('user.create');

// Master User End


// Master
	Route::get('/master/barang/barang', 'MasterController@barang');
	// Suplier
	Route::get('/master/suplier/suplier', 'MasterController@suplier');
	Route::match(['get', 'post'],'/master/suplier/suplier/add', 'MasterController@add_suplier');
	Route::match(['get', 'post'], '/master/suplier/suplier/edit/{id}', 'MasterController@edit_supplier');
	Route::match(['get', 'post'], '/master/suplier/suplier/delete/{id}', 'MasterController@delete_supplier');
	Route::get('/master/user/user', 'MasterController@user');
	// Jabatan
	Route::get('/master/jabatan/jabatan', 'MasterController@jabatan');
	Route::match(['get', 'post'], '/master/jabatan/jabatan/add', 'MasterController@add_jabatan');
	Route::match(['get', 'post'], '/master/jabatan/jabatan/edit/{id}', 'MasterController@edit_jabatan');
	Route::match(['get', 'post'], '/master/jabatan/jabatan/delete/{id}', 'MasterController@delete_jabatan');


	Route::get('/master/outlet/outlet', 'MasterController@outlet');
	Route::get('/master/member/member', 'MasterController@member');
	Route::get('/master/keuangan/akun_keuangan/akun_keuangan', 'MasterController@akun_keuangan');
	Route::get('/master/keuangan/transaksi_keuangan/transaksi_keuangan', 'MasterController@transaksi_keuangan');
	Route::get('/master/hak_akses/hak_akses', 'MasterController@hak_akses');
	Route::get('/master/posisi/posisi', 'MasterController@posisi');

// Rencana Pembelian
	Route::get('/pembelian/refund/refund', 'PembelianController@refund');
	Route::get('/pembelian/konfirmasi_pembelian/konfirmasi_pembelian', 'PembelianController@konfirmasi_pembelian');
	Route::get('/pembelian/purchase_order/purchase_order', 'PembelianController@purchase_order');
	Route::get('/pembelian/rencana_pembelian/rencana_pembelian', 'PembelianController@rencana_pembelian');
	Route::get('/pembelian/return_barang/return_barang', 'PembelianController@return_barang');

// Inventory
	Route::get('/inventory/penerimaan_barang/suplier/suplier', 'InventoryController@suplier');
	Route::get('/inventory/penerimaan_barang/pusat/pusat', 'InventoryController@pusat');
	Route::get('/inventory/opname_barang/opname_barang', 'InventoryController@opname_barang');
	Route::get('/inventory/minimum_stock/minimum_stock', 'InventoryController@minimum_stock');

// Penjualan
	Route::get('/penjualan/rencana_penjualan/rencana_penjualan', 'PenjualanController@rencana_penjualan');
	Route::get('/penjualan/monitoring_penjualan/monitoring_penjualan', 'PenjualanController@monitoring_penjualan');
	Route::get('/penjualan/analisa_penjualan/analisa_penjualan', 'PenjualanController@analisa_penjualan');
	Route::get('/penjualan/aktivitas_penjualan/proses_penjualan/proses_penjualan', 'PenjualanController@proses_penjualan');
	Route::get('/penjualan/aktivitas_penjualan/pemesanan_barang/pemesanan_barang', 'PenjualanController@pemesanan_barang');
	Route::get('/penjualan/aktivitas_penjualan/pembelian_via_web/pembelian_via_web', 'PenjualanController@pembelian_via_web');
	Route::get('/penjualan/aktivitas_penjualan/return_penjualan/return_penjualan', 'PenjualanController@return_penjualan');

// Keuangan
	Route::get('/keuangan/laporan_keuangan/neraca/neraca', 'KeuanganController@neraca');
	Route::get('/keuangan/laporan_keuangan/laba_rugi/laba_rugi', 'KeuanganController@laba_rugi');
	Route::get('/keuangan/laporan_keuangan/arus_kas/arus_kas', 'KeuanganController@arus_kas');
	Route::get('/keuangan/analisa_keuangan/list/list', 'KeuanganController@list');
	Route::get('/keuangan/dashboard/dashboard', 'KeuanganController@dashboard');
	Route::get('/keuangan/transaksi_memorial/transaksi_memorial', 'KeuanganController@transaksi_memorial');
	Route::get('/keuangan/akun_hutang/akun_hutang', 'KeuanganController@akun_hutang');
	Route::get('/keuangan/akun_piutang/akun_piutang', 'KeuanganController@akun_piutang');
	Route::get('/keuangan/pengelolaan_pajak/pengelolaan_pajak', 'KeuanganController@pengelolaan_pajak');




});

