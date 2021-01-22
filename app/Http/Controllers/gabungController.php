<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\tbmahasiswa;
use App\Models\tbmatkul;
use DB;

class gabungController extends Controller
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
        //
        $gabungan = DB::table('tbmahasiswa')
        ->join('tbmatkul', 'tbmahasiswa.idmatkul','=','tbmatkul.idmatkul')
        ->select('tbmahasiswa.nim', 'tbmahasiswa.nama', 'tbmatkul.idmatkul', 'tbmatkul.matkul', 'tbmatkul.dosen', 'tbmatkul.jadwal')
        ->get();
        return view ('isi.index', compact ('gabungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
