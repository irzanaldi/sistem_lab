@extends('layouts.home')

@section('tittle', 'Master Instansi')

@section('content')

@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
      </div>
@endif
    <h1>Master Intansi</h1>

        <form action="" method = "POST">
          <input type="text" id="cariintansi" class="fadeIn second" name="cariintansi" placeholder="Masukkan nama intansi">  
          <input type="submit" class="fadeIn fourth" value="Cari"> 
        </form>

        <a class="btn btn-primary mt-2" w style="color:white;" href="{{ url('/forminstansi') }}">input</a>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Dokter</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kota</th>
      <th scope="col">Diskon</th>
      <th scope="col">NPWP</th>
      <th scope="col">Email</th>
      <th scope="col">Nomer Telpon</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_instansi as $psn)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$psn->nama_instansi}}</td>
      <td>Dr. {{$psn->dokter}}</td>
      <td>{{$psn->alamat_instansi}}</td>
      <td>{{$psn->kota}}</td>
      <td>{{$psn->diskon}} %</td>
      <td>{{$psn->npwp}}</td>
      <td>{{$psn->email}}</td>
      <td>{{$psn->no_telp_instansi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $data_instansi->links() }}
@endsection