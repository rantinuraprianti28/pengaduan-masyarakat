<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Masyarakat;
use App\Petugas;
use Session;

class LoginController extends Controller
{
    public function index(){
		return view('login');
	}
	
	public function login(Request $request){
		
		if($request->level_login == 'admin' || $request->level_login == 'petugas'){
				$data = Petugas::where('username', $request->username)->get();
			}else{
				$data = Masyarakat::where('username', $request->username)->get();
			}
		
		if(count($data) == 1){
			
				foreach($data as $key){
					$username = $key->username;
					$password = $key->password;
				}
				
				if(Hash::check($request->password, $password)){
						Session::put('username', $username);
						return redirect('/dashboard');
					}else{
							return back()->with('danger', 'Password yang anda masukan salah');
					}
				
			}else{
				return back()->with('danger', 'Username yang anda masukan salah');
			}
	}
	
	public function index_register(){
		return view('register');
	}
	
	public function register(Request $request){
		$data = Masyarakat::create([
			'nik' => $request->nik,
			'nama' => $request->nama,
			'username' => $request->username,
			'password' => Hash::make($request->password),
			'telp' => $request->telp
		]);
		
		if($data){
				return redirect('/login')
				->with('success', 'Akun sudah Terdaftar, silahkan login');
			}else{
				return redirect('/registrasi')
				->with('danger', 'Data gagal di daftarkan');
			}
	}
	
	public function dashboard(){
		return view('dashboard.index');
	}
}
