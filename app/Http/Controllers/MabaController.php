<?php

namespace App\Http\Controllers;

use App\Models\Maba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MabaImport;

class MabaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data Maba';
        $data['q'] = $request->q;
        $data['rows'] = Maba::where('nama', 'like', '%' . $request->q . '%')->get();
        return view('maba.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah Data';
        return view('maba.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nim'=>'required',
            'offering'=>'required',
            'peran'=>'required',
        ]);

        $maba = new Maba();
        $maba->nama = $request->nama;
        $maba->nim = $request->nim;
        $maba->offering = $request->offering;
        $maba->peran = $request->peran;
        $maba->save();
        return redirect('maba')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $maba
     * @return \Illuminate\Http\Response
     */
    public function show(Maba $maba)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $maba
     * @return \Illuminate\Http\Response
     */
    public function edit(Maba $maba)
    {
        $data['title'] = 'Ubah User';
        $data['row'] = $maba;
        return view('maba.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $maba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maba $maba)
    {
        $request->validate([
            'nama'=>'required',
            'nim'=>'required',
            'offering'=>'required',
            'peran'=>'required'
        ]);

        $maba->nama = $request->nama;
        $maba->nim = $request->nim;
        $maba->offering = $request->offering;
        $maba->peran = $request->peran;
        $maba->save();
        return redirect('maba')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $maba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maba $maba)
    {
        $maba->delete();
        return redirect('maba')->with('success', 'Hapus Data Berhasil');
    }

    public function import(Request $request, Maba $maba)
    {
        $this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$maba = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$maba->getClientOriginalName();

		$maba->move('file_maba',$nama_file);
        $path = storage_path('/file_maba' .$nama_file);
        
		// import data
		Excel::import(new MabaImport, public_path('/file_maba/' .$nama_file));
 
		// notifikasi dengan session
		//Session::flash('sukses','Data Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/maba');
    }
}