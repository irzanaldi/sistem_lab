<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MasterPemeriksaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_test = DB::table('data_test')->get();
        return view('pemeriksaan')->with([
            'data_test' => $data_test
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
           
        $search = $request->cari;

        $data_test = DB::table('data_test')
        ->join('data_jenis', 'data_jenis.kd_jenis', '=', 'data_test.kd_jenis')
                            ->select('data_test.nama, data_jenis.nama_jenis','data_test.bahan', 'data_test.harga' )
                            ->limit(5);

        $search = !empty($request->cari) ? ($request->cari) : ('');

        if($search){
           $data_test->where('data_test.nama', 'like', '%' .$search . '%');
        }

        $data = $data_test->limit(5)->get();
  
        $response = array();
        foreach($data as $pasien){
           $response[] = array(
               "nama" => $pasien->nama,
               "jenis" => $pasien->nama_jenis,
               "harga" => $pasien->harga,
               "bahan" => $pasien->bahan
            );
        }
        return response()->json($response);
        
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
