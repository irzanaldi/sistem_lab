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
            <h2>Tabel Test</h2> <button type="button" id="tambah" class="btn btn-info">Tambah</button>
  <table class="table" id="tblAddRow">
  <thead>
    <tr>
      <th scope="col">Nama Test</th>
      <th scope="col">Jenis Test</th>
      <th scope="col">Bahan</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        
      <input type="text" id='test' name="test[]" class="form-control" >
      </td>
      <td><input class="pemeriksaan" id="jenis" name="jenis[]" type="text" readonly></td>
      <td><input class="pemeriksaan" id="bahan" name="bahan[]" type="text" readonly></td>
      <td><input class="pemeriksaan" id="harga" name="" type="text" readonly></td>

    </tr>
    
    <tr>
      <td>
        
      <input type="text" id='test1' name="test[]" class="form-control" >
      </td>
      <td><input class="pemeriksaan" id="jenis1" name="jenis[]" type="text" readonly></td>
      <td><input class="pemeriksaan" id="bahan1" name="bahan[]" type="text" readonly></td>
      <td><input class="pemeriksaan" id="harga1" name="" type="text" readonly></td>

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
<script type="text/javascript">
        
// Add row the table
/*$('#test').on('click', function() {
    var lastRow = $('#tblAddRow tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow tbody').append('<tr>' + lastRow + '</tr>');
    
});*/

// Add row the table
$('#tambah').on('click', function() {
    var lastRow = $('#tblAddRow tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow tbody').append('<tr>' + lastRow + '</tr>');
});

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $( "#test" ).autocomplete({
                source: function( request, response ) {
                    console.log(request.term)
                $.ajax({
                    url:"{{route('cari')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        cari: request.term
                    },
                    success: function( data ) {
                    response( data );
                    }
                });
                },
                select: function (event, ui) {
                $('#test').val(ui.item.label);
                $('#jenis').val(ui.item.jenis);
                $('#bahan').val(ui.item.bahan);
                $('#harga').val(ui.item.harga);
                return false;
                }
            });
        });

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $( "#test1" ).autocomplete({
                source: function( request, response ) {
                    console.log(request.term)
                $.ajax({
                    url:"{{route('cari')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        cari: request.term
                    },
                    success: function( data ) {
                    response( data );
                    }
                });
                },
                select: function (event, ui) {
                $('#test1').val(ui.item.label);
                $('#jenis1').val(ui.item.jenis);
                $('#bahan1').val(ui.item.bahan);
                $('#harga1').val(ui.item.harga);
                return false;
                }
            });
        });
        
  </script>
  
@endsection
