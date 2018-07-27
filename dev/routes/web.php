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
		return redirect()->route("welcome");
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

	Route::get('/dashboard', function () {
	    return view('welcome');
	})->name('welcome');

	Route::get('/register', function () {
	    return view('auth/sign-up');
	});

	Route::get('/master/barang/barang', 'MasterController@barang');
	Route::get('/master/suplier/suplier', 'MasterController@suplier');
});
