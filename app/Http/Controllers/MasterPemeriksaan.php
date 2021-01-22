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
        $instansi = DB::table('data_instansi')->get();
        return view('pemeriksaan')->with([
            'instansi' => $instansi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
           
        $query = $request->get('term','');
        $countries=\DB::table('data_test')
                            ->join('data_jenis', 'data_jenis.kd_jenis', '=', 'data_test.kd_jenis')
                            ->select('data_test.kd_test','data_test.nama_test', 'data_test.harga' , 'data_test.bahan', 'data_jenis.nama_jenis')
                            ->limit(6);
        if($request->type=='test'){
            $countries->where('nama_test','LIKE','%'.$query.'%');
        }
        if($request->type=='jenis'){
            $countries->where('nama_jenis','LIKE','%'.$query.'%');
        }
           $countries=$countries->get();        
        $data=array();
        foreach ($countries as $country) {
                $data[]=array('nama_test'=>$country->nama_test, 'kd_test'=>$country->kd_test,'nama_jenis'=>$country->nama_jenis,'bahan'=>$country->bahan,'harga'=>$country->harga);
        }
        if(count($data))
             return $data;
        else
            return ['nama_test'=>'', 'kd_test'=>'', 'nama_jenis'=>'','bahan'=>'','harga'=>''];
        
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
        $request->validate([
            'namapasien' => 'required',
            'nomer' => 'required|numeric',
            'instansi' => 'required'
        ],[
 
            'namapasien.required' => 'Name is required'
            

        ]);
        $nama = $request->input('namapasien');
       
      $ro =  DB::table('data_pasien')->insert([
            'kd_instansi' => $request->instansi,
            'nama' => $request->namapasien,
            'inisial' => $request->inisial,
            'jenis_kelamin' => $request->jk,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'no_telp' => $request->nomer
        ]); 
            
            $kd = DB::table('data_pasien')->select('data_pasien.kd_pasien')->where('nama','=','%'.$nama.'%')->first(); 
       
            $kode= $request->input('kode');
           $count = count($kode);
            for( $i=0; $i < $count; $i++ )
            {
                DB::table('data_pemeriksaan')->insert([
                    'kd_instansi' => $request->instansi,
                    'nama' => $request->namapasien,
                    'kd_test' => $request->kode[$i]
                ]);
            }
            return redirect('/pemeriksaan')->with([
                'success' => 'Berhasil Tersimpan'
                ]);; 
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
