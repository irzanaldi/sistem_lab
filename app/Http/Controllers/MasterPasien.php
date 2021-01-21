<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MasterPasien extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien=DB::table('data_pasien')
        ->join('data_instansi', 'data_pasien.kd_instansi', '=', 'data_instansi.kd_instansi')
        ->paginate(15);
        return view ('pasien', ['data_pasien' => $pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instansi = DB::table('data_instansi')->get();
        return view ('form/pasien', ['instansi'=> $instansi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*DB::table(data_pasien)->insert([
            'kd_instansi'=> $request => kd_instansi,
            'pegawai_nama' => $request->nama,

        ]);*/

        DB::table('data_pasien')->insert([
            'kd_instansi' => $request->instansi,
            'nama' => $request->namapasien,
            'inisial' => $request->inisial,
            'jenis_kelamin' => $request->jk,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'no_telp' => $request->nomer
        ]);

        return redirect('/pasien')->with(['success' => 'Berhasil Tersimpan']);
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
