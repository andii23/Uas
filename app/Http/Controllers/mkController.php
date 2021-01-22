<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\tbmahasiswa;
use App\Models\tbmatkul;

class mkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    *Log the user out of the application.
    *
    *
    *@return \illuminate\Http\Response
    */
    public function logout()
    {
        Auth::logout();
        return redirect ('/home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan table matkul
        $datamk = tbmatkul::get();
        $jummk = tbmatkul::count();
        return view ('isi.indexmk', compact ('datamk','jummk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datamk = tbmatkul::get();
        return view ('isi.createmk', compact ('datamk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aturan = [
            'idmatkul'=> 'required',
            'matkul'=> 'required',
            'dosen'=> 'required',
            'jadwal'=> 'required',
        ];
        $msg = [
            'required'=>'wajib diisi!!!',
        ];
        //proses validasi form
        $this->validate($request,$aturan,$msg);
        //menambahkan data baru
        tbmatkul::create([
                'idmatkul'=> $request->idmatkul,
                'matkul'=> $request->matkul,
                'dosen'=> $request->dosen,
                'jadwal'=> $request->jadwal,
        ]);
        return redirect()->route('matkul.index');
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
        $kreteria ="%".$id."%";
        $datamk = tbmatkul::where('matkul','like',$kreteria)->get();
        $jummk = tbmatkul::where('matkul','like',$kreteria)->count();     
        return view('matkul.index', compact('datamk','jummk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = tbmatkul::where('id', $id)->first();
        $datamk =tbmatkul::get();
        return view('isi.editmk', compact('edit','datamk'));
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
        $aturan = [
            'idmatkul'=> 'required',
            'matkul'=> 'required',
            'dosen'=> 'required',
            'jadwal'=> 'required',
        ];
        $msg = [
            'required'=>'wajib diisi!!!',
        ];
        //proses validasi form
        $this->validate($request,$aturan,$msg);
        //menambahkan data baru
        tbmatkul::where('id', $id)->update([
                'idmatkul'=> $request->idmatkul,
                'matkul'=> $request->matkul,
                'dosen'=> $request->dosen,
                'jadwal'=> $request->jadwal,
        ]);
        return redirect()->route('matkul.index');
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
        tbmatkul::where('id', $id)->delete();
          return redirect()->route('matkul.index');
    }
}
