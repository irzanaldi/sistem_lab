@extends('layouts.home')
@section ('tittle', 'Dasboard')
@section('content')
<form>
 <div class="row mb-3">
  <div class="col-md-6">
      <label for="disabledTextInput" class="form-label">Kode Pasien</label>
      <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Kode Instansi</label>
    <input type="password" class="form-control" id="inputPassword4">
    <label>Nama Instansi</label>
  </div>
 </div>   
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nama Pasien</label>
    <input type="text" class="form-control" id="namapasien">
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
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat">
  </div>
  <div class="col-6">
    <label for="inputCity" class="form-label">Email</label>
    <input type="text" class="form-control" id="Email">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Nomer Telpon</label>
    <input type="text" class="form-control" id="nomer">
  </div>
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger">Batal</button>
  </>
  
  
</form>
@endsection
