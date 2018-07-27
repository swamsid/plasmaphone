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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth/sign-in');
});
Route::get('/register', function () {
    return view('auth/sign-up');
});

Route::get('/master/barang/barang', 'MasterController@barang');
Route::get('/master/suplier/suplier', 'MasterController@suplier');
Route::get('/master/user/user', 'MasterController@user');