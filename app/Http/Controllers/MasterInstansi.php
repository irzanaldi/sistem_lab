<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MasterInstansi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instansi=DB::table('data_instansi')->paginate(15);
        return view ('instansi', ['data_instansi' => $instansi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('form/instansi');
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
        DB::table('data_instansi')->insert([
            'nama_instansi' => $request->namainstansi,
            'dokter' => $request->dokter,
            'alamat_instansi' => $request->alamat,
            'kota' => $request->kota,
            'diskon' => $request->diskon,
            'npwp' => $request->npwp,
            'email' => $request->email,
            'no_telp_instansi' => $request->nomer
        ]);

        return redirect('/instansi')->with(['success' => 'Berhasil Tersimpan']);;
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
        $instansi=DB::table('data_instansi')
        ->where('data_instansi.kd_instansi', "=", $id)
        ->get();
        return view ('form/edit/edit_instansi', ['instansi' => $instansi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('data_instansi')->where('data_instansi.kd_instansi', "=", $request->id)->update([
            'nama_instansi' => $request->namainstansi,
            'dokter' => $request->dokter,
            'alamat_instansi' => $request->alamat,
            'kota' => $request->kota,
            'diskon' => $request->diskon,
            'npwp' => $request->npwp,
            'email' => $request->email,
            'no_telp_instansi' => $request->nomer
        ]);

        return redirect('/instansi')->with(['success' => 'Berhasil Diubah']);
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
        DB::table('data_instansi')->where('data_instansi.kd_instansi', '=', $id)->delete();
        return redirect('/instansi')->with(['success' => 'Berhasil Dihapus']);;
    }
}
