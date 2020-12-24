@extends('layouts.home')
@section ('tittle', 'Pemeriksaan')
@section('content')
<h1>Form Input Pemeriksaan</h1>

<form>
<div class="row">
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">Nama Pasien</label>
    <input type="email" class="form-control" id="nama">
  </div>
  <div class="col-3">
  <label for="inputAddress" class="form-label">Instansi</label>
    <select class="form-select form-control" aria-label="Default select example">
        <option selected>Instansi</option>
        <option value="1">Mr.</option>
        <option value="2">Mrs.</option>
        <option value="3">Ny.</option>
    </select>
  </div>
  <div class="col-3">
  <label for="inputAddress" class="form-label">Inisial</label>
    <select class="form-select form-control" aria-label="Default select example">
        <option selected>Inisial</option>
        <option value="1">Mr.</option>
        <option value="2">Mrs.</option>
        <option value="3">Ny.</option>
    </select>
  </div>
  <div class="col-md-3">
  <label for="inputAddress" class="form-label">Jenis Kelamin</label>
    <select class="form-select form-control" aria-label="Default select example">
        <option selected>PILIH Jenis Kelamin</option>
        <option value="1">Laki-Laki</option>
        <option value="2">Perempuan</option>
    </select>
  </div>
  <div class="col-3">
    <label for="inputAddress2" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat">
  </div>
  <div class="col-3">
    <label for="inputCity" class="form-label">Email</label>
    <input type="text" class="form-control" id="Email">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Nomer Telpon</label>
    <input type="text" class="form-control" id="nomer">
  </div>
</div>


  <div class="row mt-5">
        <div class="col">
            <h2>Tabel Test</h2>
  <table class="table">
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
  </div>
  </div>
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger"><a href="/pasien" style="color:inherit; text-decoration: none;">Batal</a></button>
  </div>
  
</form>

@endsection
