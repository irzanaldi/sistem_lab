@extends('layouts.home')

@section('tittle', 'Master Pasien')

@section('content')


@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
      </div>
@endif

    <h1>Master Pasien</h1>

        <form action="" method = "POST">
          <input type="text" id="caripasien" class="fadeIn second" name="caripasien" placeholder="Masukkan nama pasien">  
          <input type="submit" class="fadeIn fourth" value="Cari" href="/form/pasien"> 
        </form>

    <a href="{{ url('/inputpasien') }}">input</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Instansi</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telpon</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_pasien as $psn)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$psn->nama}}</td>
      <td>{{$psn->nama_instansi}}</td>
      <td>{{$psn->jenis_kelamin}}</td>
      <td>{{$psn->umur}}</td>
      <td>{{$psn->alamat}}</td>
      <td>{{$psn->no_telp}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection