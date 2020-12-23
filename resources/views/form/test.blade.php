@extends('layouts.home')
@section ('tittle', 'Test')
@section('content')
<h1>Form Input Test</h1>
<form>
 <div class="row mb-3 ">
 </div>   
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nama Test</label>
    <input type="text" class="form-control" id="namainstansi">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Harga</label>
    <input type="text" class="form-control" id="dokter">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Bahan</label>
    <input type="text" class="form-control" id="alamat">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Jenis Test</label>
    <input type="text" class="form-control" id="Kota">
  </div>
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger"><a href="/test" style="color:inherit; text-decoration: none;">Batal</a></button>
  </>
  
  
</form>
@endsection
