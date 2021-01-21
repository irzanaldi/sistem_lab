<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MasterLaporan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemasukkan = DB::table('data_pemeriksaan')
        ->Join('data_instansi','data_pemeriksaan.kd_instansi','=','data_instansi.kd_instansi')
        ->Join('data_test','data_pemeriksaan.kd_test','=','data_test.kd_test')
        ->select('nama_instansi',DB::raw('sum(harga) AS total'),'tanggal')
        ->groupBy('nama_instansi')
        ->paginate(15);
       
                        

        $pengeluaran = DB::table('data_keuangan')->paginate(15);

        return view('laporan')->with([
            'pemasukkan' => $pemasukkan,
            'pengeluaran' => $pengeluaran
        ]); 

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form/laporan'); 
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
        $pengeluaran= $request->input('pengeluaran');
           $count = count($pengeluaran);
            for( $i=0; $i < $count; $i++ )
            {
                DB::table('data_keuangan')->insert([
                    'pengeluaran' => $request->pengeluaran[$i],
                    'harga' => $request->harga[$i]
                ]);
            }
            return redirect('/laporan')->with(['success' => 'Berhasil Tersimpan']);; 
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
