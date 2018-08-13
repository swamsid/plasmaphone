<?php

namespace App\Http\Controllers\data_master\master_user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class master_user_controller extends Controller
{
    public function index(){
    	return view('master.user.index');
    }

    public function create(){
    	return view('master.user.tambah');
    }
}
