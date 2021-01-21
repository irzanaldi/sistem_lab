<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;
use PDF;

class MasterTagihan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instansi = DB::table('data_instansi')->get();
        $pemeriksaan = DB::table('data_pemeriksaan')
                        ->join('data_test', 'data_test.kd_test', '=', 'data_pemeriksaan.kd_test')
                        ->join('data_instansi', 'data_instansi.kd_instansi', '=', 'data_pemeriksaan.kd_instansi')
                        ->select('data_test.nama_test','data_test.harga', 'data_instansi.nama_instansi','data_pemeriksaan.nama','data_pemeriksaan.tanggal')
                        ->paginate(15);
        return view('tagihan')->with([
            'instansi' => $instansi,
            'pemeriksaan' => $pemeriksaan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {    $instansi = DB::table('data_instansi')->get();
        
        $instansis = $request->input('instansi');
        //INISIASI 30 HARI RANGE SAAT INI JIKA HALAMAN PERTAMA KALI DI-LOAD
        //KITA GUNAKAN STARTOFMONTH UNTUK MENGAMBIL TANGGAL 1
        $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        //DAN ENDOFMONTH UNTUK MENGAMBIL TANGGAL TERAKHIR DIBULAN YANG BERLAKU SAAT INI
        $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');
    
        //JIKA USER MELAKUKAN FILTER MANUAL, MAKA PARAMETER DATE AKAN TERISI
        if (request()->date != '') {
            //MAKA FORMATTING TANGGALNYA BERDASARKAN FILTER USER
            $date = explode(' - ' ,request()->date);
            $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
            $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';
        }
    
        //BUAT QUERY KE DB MENGGUNAKAN WHEREBETWEEN DARI TANGGAL FILTER
        $pemeriksaan = DB::table('data_pemeriksaan')
        ->join('data_test', 'data_test.kd_test', '=', 'data_pemeriksaan.kd_test')
        ->join('data_instansi', 'data_instansi.kd_instansi', '=', 'data_pemeriksaan.kd_instansi')
        ->select('data_test.nama_test','data_test.harga', 'data_instansi.kd_instansi', 'data_instansi.nama_instansi','data_pemeriksaan.nama','data_pemeriksaan.tanggal')
        ->where('data_instansi.kd_instansi', '=' , $instansis)
        ->whereBetween('tanggal', [$start, $end])->get();
        //KEMUDIAN LOAD VIEW
        return view('tagihan')->with( compact('pemeriksaan'))->with(['instansi' => $instansi]);
        
        
    
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($daterange, $instansi)
    {
        //
        $date = explode('+', $daterange);

        $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';

        $pemeriksaan = DB::table('data_pemeriksaan')
        ->join('data_test', 'data_test.kd_test', '=', 'data_pemeriksaan.kd_test')
        ->join('data_instansi', 'data_instansi.kd_instansi', '=', 'data_pemeriksaan.kd_instansi')
        ->select('data_test.nama_test','data_test.harga', 'data_instansi.nama_instansi','data_pemeriksaan.nama','data_pemeriksaan.tanggal')
        ->where('data_instansi.kd_instansi', '=' , $instansi)
        ->whereBetween('tanggal', [$start, $end])->get();
  

        $pdf = PDF::loadview('report', compact('pemeriksaan', 'date'));

        return $pdf->stream();

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
