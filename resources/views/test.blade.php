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
    <a class="btn btn-primary mt-2" role="button" data-bs-toggle="button" style="color:white;" href="{{ url('/formtest') }}">input</a>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Bahan</th>
      <th scope="col">Jenis</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_test as $psn)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$psn->nama_test}}</td>
      <td>{{$psn->harga}}</td>
      <td>{{$psn->bahan}}</td>
      <td>{{$psn->nama_jenis}}</td>
      <td><a href="#" class="btn btn-primary btn-flat btn-xs" ><i class="fa fa-pencil"></i> Edit</a>
        <a href="#" class="btn btn-danger btn-flat btn-xs" ><i class="fa fa-trash"></i> Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection