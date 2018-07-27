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

	Route::get('/master/barang/barang', 'MasterController@barang');
	Route::get('/master/suplier/suplier', 'MasterController@suplier');
	Route::get('/master/user/user', 'MasterController@user');
	Route::get('/master/jabatan/jabatan', 'MasterController@jabatan');
	Route::get('/master/outlet/outlet', 'MasterController@outlet');
	Route::get('/master/member/member', 'MasterController@member');
	Route::get('/master/keuangan/akun_keuangan/akun_keuangan', 'MasterController@akun_keuangan');
	Route::get('/master/keuangan/transaksi_keuangan/transaksi_keuangan', 'MasterController@transaksi_keuangan');
	Route::get('/master/hak_akses/hak_akses', 'MasterController@hak_akses');
	Route::get('/master/posisi/posisi', 'MasterController@posisi');



});

