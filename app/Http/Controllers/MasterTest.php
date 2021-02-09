<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MasterTest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $test=DB::table('data_test')
        ->join('data_jenis', 'data_test.kd_jenis', '=', 'data_jenis.kd_jenis')
        ->paginate(15);
        return view ('test', ['data_test' => $test]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jenistest = DB::table('data_jenis')->get();
        return view ('form/test', ['jenistest'=> $jenistest]);
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
        DB::table('data_test')->insert([
            'nama_test' => $request->namatest,
            'harga' => $request->harga,
            'bahan' => $request->bahan,
            'kd_jenis' => $request->jenis
        ]);

        return redirect('/test')->with(['success' => 'Berhasil Tersimpan']);;
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
        $test=DB::table('data_test')
        ->join('data_jenis', 'data_test.kd_jenis', '=', 'data_jenis.kd_jenis')
        ->where('data_test.kd_test', "=", $id)
        ->get();
        $jenistest = DB::table('data_jenis')->get();
        return view ('form/edit/edit_test', ['data_test' => $test, 'jenistest' =>$jenistest ]);
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
        DB::table('data_test')->where('data_test.kd_test', "=", $request->id)->update([
            'nama_test' => $request->namatest,
            'harga' => $request->harga,
            'bahan' => $request->bahan,
            'kd_jenis' => $request->jenis
        ]);

        return redirect('/test')->with(['success' => 'Berhasil Diubah']);
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
        DB::table('data_test')->where('data_test.kd_test', '=', $id)->delete();
        return redirect('/test')->with(['success' => 'Berhasil Dihapus']);;
    }
}
