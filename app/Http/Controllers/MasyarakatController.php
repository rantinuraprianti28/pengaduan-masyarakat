<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Masyarakat;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
			'masyarakat' => Masyarakat::all()
	    ];
	
		return view('dashboard.masyarakat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.masyarakat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = Masyarakat::create([
			'nik' => $request->nik,
			'nama' => $request->nama,
			'username' => $request->username,
			'password' => Hash::make($request->password),
			'telp' => $request->telp
		]);
		
		if($data){
				return redirect('/dashboard/masyarakat')
				->with('success', 'Data berhasil ditambahkan');
			}else{
				return redirect('/dashboard/masyarakat')
				->with('danger', 'Data gagal ditambahkan');
			}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	   $data = [
		    'data' => Masyarakat::find($id)
	    ];
	
        return view('dashboard.masyarakat.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Masyarakat::find($id)->update([
			'nik' => $request->nik,
			'nama' => $request->nama,
			'username' => $request->username,
			'password' => Hash::make($request->password),
			'telp' => $request->telp
		]);
		
		if($data){
				return redirect('/dashboard/masyarakat')
				->with('success', 'Data berhasil di edit');
			}else{
				return redirect('/dashboard/masyarakat')
				->with('danger', 'Data gagal di edit');
			}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Masyarakat::find($id)->delete();

	   if($data){
				return redirect('/dashboard/masyarakat')
				->with('success', 'Data berhasil di hapus');
			}else{
				return redirect('/dashboard/masyarakat')
				->with('danger', 'Data gagal di hapus');
			}
    }
}
