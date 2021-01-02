@extends('layouts.home')

@section('tittle', 'Master Test')

@section('content')

  
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
      </div>
@endif

    <h1>Master Test</h1>

        <form action="" method = "POST">
          <input type="text" id="caripasien" class="fadeIn second" name="caripasien" placeholder="Masukkan nama pasien">  
          <input type="submit" class="fadeIn fourth" value="Cari" href="/form/pasien"> 
        </form>

    <a href="{{ url('/formtest') }}">input</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Bahan</th>
      <th scope="col">Jenis</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_test as $psn)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$psn->nama}}</td>
      <td>{{$psn->harga}}</td>
      <td>{{$psn->bahan}}</td>
      <td>{{$psn->nama_jenis}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection