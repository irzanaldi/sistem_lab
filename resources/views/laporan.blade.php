@extends('layouts.home')

@section('tittle', 'Master Laporan')

@section('content')
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
      </div>
@endif
    <h1>Laporan</h1>
<form action="" method = "POST">
 <div class="row">
  <div class="col-md-3">
    <label for="inputAddress" class="form-label">Bulan</label>
    <input type="text" id="created_at" name="date" class="form-control">
  </div>
        <button type="submit" class="btn btn-primary">Cetak</button>
</form>
      
     
        <a class="btn btn-danger ml-2 center-block" href="{{ url('/formlaporan') }}" style="padding: 22px 16px; color:white; text-decoration: none;">Masukkan Pengeluaran</a>
      
    
    </div>
<button class="button" id="btnpemasukkan">Pemasukkan</button>
<button class="button" id="btnpengeluaran">Pengeluaran</button>


<table class="table p1" id="pemasukkan">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pemasukkan</th>
      <th scope="col">harga</th>
      <th scope="col">tanggal</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pemasukkan as $pan)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$pan->nama_instansi}}</td>
      <td>Rp. {{$pan->total}}</td>
      <td>{{$pan->tanggal}}</td>
    </tr>
  @endforeach
  </tbody>
</table>



<table class="table d-none p2" id="pengeluaran" >
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pengeluaran</th>
      <th scope="col">harga</th>
      <th scope="col">Tanggal</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($pengeluaran as $psn)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$psn->pengeluaran}}</td>
      <td>Rp. {{$psn->harga}}</td>
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
        //KETIKA PERTAMA KALI DI-LOAD MAKA TANGGAL NYA DI-SET TANGGAL SAA PERTAMA DAN TERAKHIR DARI BULAN SAAT INI
        $(document).ready(function() {
            let start = moment().startOf('month')
            let end = moment().endOf('month')

            //KEMUDIAN TOMBOL EXPORT PDF DI-SET URLNYA BERDASARKAN TGL TERSEBUT
            $('#exportpdf').attr('href', '{{ url("/report") }}/' + start.format('YYYY-MM-DD') + '+' + end.format('YYYY-MM-DD'))

            //INISIASI DATERANGEPICKER
            $('#created_at').daterangepicker({
                startDate: start,
                endDate: end
            }, function(first, last) {
                //JIKA USER MENGUBAH VALUE, MANIPULASI LINK DARI EXPORT PDF
                $('#exportpdf').attr('href', '{{ url("/report") }}/' + first.format('YYYY-MM-DD') + '+' + last.format('YYYY-MM-DD'))
            })
        })


        $(document).ready(function(){
	        	$('#btnpemasukkan').click(function(){
		      	$('.p2').addClass('d-none');
			      $('.p1').removeClass('d-none');
		});	
 
	    $('#btnpengeluaran').click(function(){
            $('.p1').addClass('d-none');
			      $('.p2').removeClass('d-none');
	      	});		
	});

          



    </script>

    