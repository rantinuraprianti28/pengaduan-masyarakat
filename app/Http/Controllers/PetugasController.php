<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
		   'petugas' => Petugas::all()
	    ];
	
	    return view('dashboard.petugas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Petugas::create([
			'nama_petugas' => $request->nama,
			'username' => $request->username,
			'password' => Hash::make($request->password),
			'telp' => $request->telp,
			'level' => $request->level
	   ]);
	
	   if($data){
			return redirect('/dashboard/petugas')
			->with('success', 'Data berhasil ditambahkan');
		}else{
			return redirect('/dashboard/petugas')
			->with('success', 'Data gagal ditambahkan');
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
		   'data' => Petugas::find($id)
	    ];
	
        return view('dashboard.petugas.edit', $data);
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
        $data = Petugas::find($id)->update([
			'nama_petugas' => $request->nama,
			'username' => $request->username,
			'password' => Hash::make($request->password),
			'telp' => $request->telp,
			'level' => $request->level
	   ]);
	
	   if($data){
			return redirect('/dashboard/petugas')
			->with('success', 'Data berhasil di edit');
		}else{
			return redirect('/dashboard/petugas')
			->with('success', 'Data gagal di edit');
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
        $data = Petugas::find($id)->delete();

		if($data){
			return redirect('/dashboard/petugas')
			->with('success', 'Data berhasil di hapus');
		}else{
			return redirect('/dashboard/petugas')
			->with('success', 'Data gagal di hapus');
		}
    }
}
