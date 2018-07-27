<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\m_member;

use Auth;
use DB;
use Session;

class authController extends Controller
{
    public function authenticate(Request $request){
    	// return json_encode($request->all());

    	$ret = [
			"status" => "gagal",
			"message" => "Kombinasi Username Dan Password Tidak Sesuai"
		];

		$member = m_member::where("m_username", $request->username)->first();

		if($member && Hash::check('secret_'.$request->password, $member->m_password)){
			Auth::login($member);
			return redirect()->route('welcome');
		}else{
			Session::flash('gagal', 'Kombinasi Inputan Tidak Ada Didatabase.');
			return redirect()->route('login')->withInput();
		}
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function makeUser(){
    	$data = [
    		"m_username"	=> "developer",
    		"m_password"	=> Hash::make("secret_123456")
    	];

    	DB::table('d_mem')->insert($data);
    }
}
