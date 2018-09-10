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

			Route::get('master/karyawan/add', [
				'uses'	=> 'master\karyawan\karyawan_controller@add',
			])->name('karyawan.add');

			Route::post('master/karyawan/insert', [
				'uses'	=> 'master\karyawan\karyawan_controller@insert',
			])->name('karyawan.insert');

			Route::post('master/karyawan/edit-multiple', [
				'uses'	=> 'master\karyawan\karyawan_controller@edit_multiple',
			])->name('karyawan.edit_multiple');

			Route::post('master/karyawan/update', [
				'uses'	=> 'master\karyawan\karyawan_controller@update',
			])->name('karyawan.update');

			Route::get('master/karyawan/edit', [
				'uses'	=> 'master\karyawan\karyawan_controller@edit',
			])->name('karyawan.edit');

			Route::post('master/karyawan/multiple-delete', [
				'uses'	=> 'master\karyawan\karyawan_controller@multiple_delete',
			])->name('karyawan.multiple_delete');


			Route::get('master/karyawan/grab/{id}', [
				'uses'	=> 'master\karyawan\karyawan_controller@get',
			])->name('karyawan.get');

			Route::get('master/karyawan/get/form-resource', [
				'uses'	=> 'master\karyawan\karyawan_controller@get_form_resources',
			])->name('karyawan.get_form_resources');

		// master karyawan end


		// master barang

			Route::get('master/barang', [
				'uses'	=> 'master\barang\barang_controller@index',
			])->name('barang.index');

			Route::get('master/barang/add', [
				'uses'	=> 'master\barang\barang_controller@add',
			])->name('barang.add');

			Route::post('master/barang/insert', [
				'uses'	=> 'master\barang\barang_controller@insert',
			])->name('barang.insert');

			Route::post('master/karyawan/edit-multiple', [
				'uses'	=> 'master\barang\barang_controller@edit_multiple',
			])->name('karyawan.edit_multiple');

			Route::post('master/karyawan/update', [
				'uses'	=> 'master\barang\barang_controller@update',
			])->name('karyawan.update');

			Route::get('master/karyawan/edit', [
				'uses'	=> 'master\barang\barang_controller@edit',
			])->name('karyawan.edit');

			Route::post('master/karyawan/multiple-delete', [
				'uses'	=> 'master\barang\barang_controller@multiple_delete',
			])->name('karyawan.multiple_delete');


			Route::get('master/karyawan/grab/{id}', [
				'uses'	=> 'master\barang\barang_controller@get',
			])->name('karyawan.get');

			Route::get('master/barang/get/form-resource', [
				'uses'	=> 'master\barang\barang_controller@get_form_resources',
			])->name('barang.get_form_resources');

		// master barang end


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

	// main route end

});
