@extends('layouts.home')

@section('tittle', 'Data Tagihan')

@section('content')

<h1>Tagihan</h1>

<form action="{{ route('order')}}" method = "get">
        <div class="row">
        <div class="col-md-3">
  <label for="inputAddress" class="form-label">Instansi</label>
  <select class="form-select form-control"  name="instansi" id="instansi">
  <option selected>Instansi</option>
    @foreach($instansi as $ins)
        <option value='{{$ins->kd_instansi}}'>{{$ins->nama_instansi}}</option>
    @endforeach
    </select>
  </div>
  <div class="col-md-3">
  <label for="inputAddress" class="form-label">Bulan</label>
  <input type="text" id="created_at" name="date" class="form-control">
  </div>
        <button class="btn btn-primary" id="filter">Filter</button>
        </div>
  
   </form>
        <a class="btn btn-primary" role="button" data-bs-toggle="button" style="color:white;" target="_blank" id="exportpdf">Export PDF</a>

    <table class="table mt-5">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Instansi</th>
      <th scope="col">Test</th>
      <th scope="col">Harga</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($pemeriksaan as $psn)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$psn->nama}}</td>
      <td>{{$psn->nama_instansi}}</td>
      <td>{{$psn->nama_test}}</td>
      <td>{{$psn->harga}}</td>
      <td>{{$psn->tanggal}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>

var instansi = '';
        
        //KETIKA PERTAMA KALI DI-LOAD MAKA TANGGAL NYA DI-SET TANGGAL SAA PERTAMA DAN TERAKHIR DARI BULAN SAAT INI
        $(document).ready(function() {
            let start = moment().startOf('month');
            let end = moment().endOf('month');
            $('#instansi').on('change', function(){
                instansi = $('#instansi').val();
                //console.log('{{ url("/report") }}/'  + start.format('YYYY-MM-DD') + '+' + end.format('YYYY-MM-DD') + '+' + instansi);
                $('#exportpdf').attr('href', '{{ url("/report") }}/'  + start.format('YYYY-MM-DD') + '+' + end.format('YYYY-MM-DD')
            + '+' + instansi);
            });  
            $('#created_at').daterangepicker({
                startDate: start,
                endDate: end
            }, function(first, last) {
                //JIKA USER MENGUBAH VALUE, MANIPULASI LINK DARI EXPORT PDF
                $('#exportpdf').attr('href', '{{ url("/report") }}/' +first.format('YYYY-MM-DD') + '+' + last.format('YYYY-MM-DD')
                + '+' + instansi )
            });
        });
    </script>

    <script>

    </script>