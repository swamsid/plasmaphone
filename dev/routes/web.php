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
	return cek_helper();
});

Route::get("/", function(){
	if(Auth::check()){
		return redirect()->route("home");
	}else{
		return redirect()->route("login");
	}
});

Route::group(['middleware' => 'guest'], function(){
	Route::get('/login', function () {
	    return view('auth/sign-in');
	})->name('login');

	Route::post('/login', [
		'uses'	=> 'authController@authenticate',
		'as'	=> 'auth.authenticate'
	]);
});

Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/logout', [
		'uses'	=> 'authController@logout',
		'as'	=> 'auth.logout'
	]);

	// main route

		Route::get('/dashboard', function () {
		    return view('dashboard');
		})->name('home');


		// master karyawan

			Route::get('master/karyawan', [
				'uses'	=> 'master\karyawan\karyawan_controller@index',
			])->name('karyawan.index');

		// master karyawan end


		// master Suppplier

			Route::get('/master/suplier/suplier', 'master\suplier\suplier_controller@suplier');
			Route::match(['get', 'post'],'/master/suplier/suplier/add', 'master\suplier\suplier_controller@add_suplier');
			Route::match(['get', 'post'], '/master/suplier/suplier/delete/{id}', 'MasterController@delete_supplier');
			
			Route::post('/master/suplier/suplier/edit-multiple', 'master\suplier\suplier_controller@edit_multiple');
			Route::get('/master/suplier/suplier/edit', 'master\suplier\suplier_controller@edit');

			Route::post('/master/suplier/suplier/update', 'master\suplier\suplier_controller@update');
			Route::match(['get', 'post'], '/master/suplier/suplier/get/{id}', 'master\suplier\suplier_controller@get_supplier');
			Route::match(['get', 'post'], '/master/suplier/suplier/multiple-delete', 'master\suplier\suplier_controller@multiple_delete');

		// master Suppplier end

		// Master Outlet
		Route::get('/master/outlet','master\outlet\outlet_controller@index');
		Route::get('/master/outlet/add','master\outlet\outlet_controller@outlet_add');
		Route::get('/master/outlet/get-kecamatan','master\outlet\outlet_controller@get_kecamatan');
		Route::get('/master/outlet/get-kota','master\outlet\outlet_controller@get_kota');
		Route::get('/master/outlet/get-provinsi','master\outlet\outlet_controller@get_provinsi');
		Route::post('/master/outlet/add-outlet','master\outlet\outlet_controller@add_outlet');
		Route::get('/master/outlet/get-outlet/{id}','master\outlet\outlet_controller@get_outlet');
		Route::get('/master/outlet/edit','master\outlet\outlet_controller@outlet_edit');
		Route::post('/master/outlet/update-outlet','master\outlet\outlet_controller@update_outlet');
		Route::post('/master/outlet/edit-multiple', 'master\outlet\outlet_controller@multiple_edit_outlet');
		Route::match(['get', 'post'], '/master/outlet/multiple-delete', 'master\outlet\outlet_controller@multiple_delete_outlet');
		// End Master Outlet

		// Pembelian
		Route::get('/pembelian/request-order','PembelianController@request_order');
		Route::match(['get', 'post'],'/pembelian/request-order/add','PembelianController@request_order_add');
		Route::post('/pembelian/request-order/edit-multiple', 'PembelianController@edit_multiple');
		Route::get('/pembelian/request-order/edit', 'PembelianController@edit_order');
		Route::match(['get', 'post'], '/pembelian/request-order/get/{id}', 'PembelianController@get_order');
		Route::post('/pembelian/request-order/update', 'PembelianController@update_order');
		Route::match(['get', 'post'], '/pembelian/request-order/multiple-delete', 'PembelianController@multiple_delete_order');
		// End Request Order
		Route::get('/pembelian/rencana-pembelian','PembelianController@rencana_pembelian');
		Route::post('/pembelian/rencana-pembelian/request-order-status','PembelianController@request_order_status');
		Route::get('/pembelian/rencana-pembelian/rencana-pembelian/edit', 'PembelianController@rencana_pembelian_edit');
		Route::post('/pembelian/rencana-pembelian/rencana-pembelian/update', 'PembelianController@update_rencana_pembelian');
		Route::post('/pembelian/rencana-pembelian/rencana-pembelian/edit-multiple', 'PembelianController@multiple_edit_rencana_pembelian');
		// End Rencana Pembelian
		Route::get('/pembelian/konfirmasi-pembelian','PembelianController@konfirmasi_pembelian');
		Route::get('/pembelian/konfirmasi-pembelian/get-data-order/{id}','PembelianController@get_data_order');
		Route::get('/pembelian/konfirmasi-pembelian/generate-pdf/{id}','PembelianController@generatePDF');
		// Purchase Order
		Route::get('/pembelian/purchase-order','PembelianController@purchase_order');
		Route::get('/pembelian/purchase-order/add','PembelianController@purchase_order_add');
		Route::get('/pembelian/purchase-order/get-purchase/{id}','PembelianController@get_purchase');
		Route::get('/pembelian/purchase-order/get-request-purchase/{id}','PembelianController@get_request_purchase');
		Route::post('/pembelian/purchase-order/add-purchase', 'PembelianController@add_purchase');
		Route::get('/pembelian/purchase-order/get/{id}','PembelianController@get_purchase_order');
		Route::get('/pembelian/purchase-order/edit','PembelianController@edit_purchase_order');
		Route::post('/pembelian/purchase-order/update', 'PembelianController@update_purchase_order');
		Route::post('/pembelian/purchase-order/edit-multiple', 'PembelianController@multiple_edit_purchase_order');
		Route::match(['get', 'post'], '/pembelian/purchase-order/multiple-delete', 'PembelianController@multiple_delete_purchase_order');
		// Pembelian end

	// main route end

});
