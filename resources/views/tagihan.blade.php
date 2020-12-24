@extends('layouts.home')

@section('tittle', 'Master Pasien')

@section('content')

    <h1>Tagihan</h1>

        <form action="" method = "POST">
        <div class="row">
        <div class="col-md-3">
  <label for="inputAddress" class="form-label">Instansi</label>
    <select class="form-select form-control" aria-label="Default select example">
        <option selected>Instansi</option>
        <option value="1">Laki-Laki</option>
        <option value="2">Perempuan</option>
    </select>
  </div>
  <div class="col-md-3">
  <label for="inputAddress" class="form-label">Bulan</label>
    <select class="form-select form-control" aria-label="Default select example">
        <option selected>Pilih bulan</option>
        <option value="1">Januari</option>
        <option value="2">Perempuan</option>
    </select>
  </div>
        <button type="submit" class="btn btn-primary">Cetak</button>
        </div>
  
        </form>

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

@endsection