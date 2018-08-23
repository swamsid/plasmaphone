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

	// main route end

});
