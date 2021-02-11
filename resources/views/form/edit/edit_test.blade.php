@extends('layouts.home')
@section ('tittle', 'Test')
@section('content')
<h1>Form Input Test</h1>


@foreach($data_test as $test)
<form action="{{ url('/update') }}" method="POST">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $test->kd_test }}"> <br/>
 <div class="row mb-3 ">
 </div>   
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nama Test</label>
    <input type="text" class="form-control" name="namatest" value="{{ $test->nama_test }}">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Harga</label>
    <input type="text" class="form-control" name="harga" value="{{ $test->harga }}">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Bahan</label>
    <input type="text" class="form-control" name="bahan" value="{{ $test->bahan }}">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Jenis Test</label>
    <select class="form-select form-control" aria-label="Default select example" name="jenis" id="jenis">
        <option selected>Jenis Test</option>
    @foreach($jenistest as $ins)
        <option value=" {{ $ins->kd_jenis }}" {{ $ins->kd_jenis == $test->kd_jenis ? 'selected' : '' }}> {{ $ins->nama_jenis }} </option>
    @endforeach
    </select>
  </div>
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger"><a href="{{ url('/test') }}" style="color:inherit; text-decoration: none;">Batal</a></button>
  </>
  
  
</form>
@endforeach
@endsection
