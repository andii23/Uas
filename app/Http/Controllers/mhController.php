<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbmahasiswa;
use App\Models\tbmatkul;
class mhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan table mahasiswa
        $datamh = tbmahasiswa::get();
        $jummh = tbmahasiswa::count();
        return view ('isi.indexmh', compact ('datamh','jummh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //menampilkan form nambah mahasiswa
        $datamh = tbmahasiswa::get();
        $datamk = tbmatkul::get();
        return view ('isi.createmh', compact ('datamh','datamk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //buat validasi
        $aturan = [
            'nim'=> 'required|numeric',
            'nama'=> 'required',
            'alamat'=> 'required',
            'jeniskelamin'=> 'required',
            'idmatkul'=> 'required',
        ];
        $msg = [
            'required'=>'wajib diisi!!!',
            'numeric'=>'harus angka!!!',
        ];
        //proses validasi form
        $this->validate($request,$aturan,$msg);
        //menambahkan data baru
        tbmahasiswa::create([
                'nim'=> $request->nim,
                'nama'=> $request->nama,
                'alamat'=> $request->alamat,
                'jeniskelamin'=> $request->jeniskelamin,
                'idmatkul'=> $request->idmatkul,
        ]);
        return redirect()->route('mahasiswa.index');
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
        //
        $edit = tbmahasiswa::where('id', $id)->first();
        $datamk =tbmatkul::get();
        return view('isi.editmh', compact('edit','datamk'));
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
        //
        //buat validasi
        $aturan = [
            'nim'=> 'required|numeric',
            'nama'=> 'required',
            'alamat'=> 'required',
            'jeniskelamin'=> 'required',
            'idmatkul'=> 'required',
        ];
        $msg = [
            'required'=>'wajib diisi!!!',
            'numeric'=>'harus angka!!!',
        ];
        //proses validasi form
        $this->validate($request,$aturan,$msg);
        //menambahkan data baru
        tbmahasiswa::where('id', $id)->update([
                'nim'=> $request->nim,
                'nama'=> $request->nama,
                'alamat'=> $request->alamat,
                'jeniskelamin'=> $request->jeniskelamin,
                'idmatkul'=> $request->idmatkul,
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //proses hapus
        tbmahasiswa::where('id', $id)->delete();
          return redirect()->route('mahasiswa.index');
    }
}
