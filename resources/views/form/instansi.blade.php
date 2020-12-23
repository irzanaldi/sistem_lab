@extends('layouts.home')
@section ('tittle', 'Instansi')
@section('content')
<h1>Form Input Instansi</h1>
<form>
 <div class="row mb-3 ">
 </div>   
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nama Instansi</label>
    <input type="text" class="form-control" id="namainstansi">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Dokter</label>
    <input type="text" class="form-control" id="dokter">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Kota</label>
    <input type="text" class="form-control" id="Kota">
  </div>
  <div class="col-6">
    <label for="inputCity" class="form-label">Email</label>
    <input type="text" class="form-control" id="Email">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Nomer Telpon</label>
    <input type="text" class="form-control" id="nomer">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">NPWP</label>
    <input type="text" class="form-control" id="npwp">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">diskon</label>
    <input type="text" class="form-control" id="diskon">  
  </div>
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger"><a href="/instansi" style="color:inherit; text-decoration: none;">Batal</a></button>
  </>
  
  
</form>
@endsection
