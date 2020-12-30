@extends('layouts.home')
@section ('tittle', 'Dasboard')
@section('content')
<h1>Form Input Pasien</h1>
<form action="{{ url('/input') }}" method="POST">
{{ csrf_field() }}
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Kode Instansi</label>
    <select class="form-select form-control" aria-label="Default select example" name="instansi" id="instansi">
    @foreach($instansi as $ins)
        <option selected>Instansi</option>
        <option value=" {{ $ins->kd_instansi }} ">({{ $ins->kd_instansi }}) {{ $ins->nama_instansi }}</option>
    @endforeach
    </select>
  </div>
 
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nama Pasien</label>
    <input type="text" class="form-control" id="namapasien" name="namapasien">
  </div>
  <div class="col-3">
  <label for="inputAddress" class="form-label">Inisial</label>
    <select class="form-select form-control" aria-label="Default select example" id="inisial" name="inisial">
        <option selected>Inisial</option>
        <option value="Mr. ">Mr.</option>
        <option value="Mrs. ">Mrs.</option>
        <option value="Ny. ">Ny.</option>
    </select>
  </div>
  <div class="col-md-3">
  <label for="inputAddress" class="form-label">Jenis Kelamin</label>
    <select class="form-select form-control" aria-label="Default select example" id="jk" name="jk">
        <option selected>PILIH Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="col-6">
    <label for="inputCity" class="form-label">Umur</label>
    <input type="text" class="form-control" id="umur" name="umur">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Nomer Telpon</label>
    <input type="text" class="form-control" id="nomer" name="nomer">
  </div>
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger"><a href="/pasien" style="color:inherit; text-decoration: none;">Batal</a></button>
  </div>
  
  
</form>
@endsection
