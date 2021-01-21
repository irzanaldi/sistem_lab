@extends('layouts.home')
@section ('tittle', 'Instansi')
@section('content')
<h1>Form Input Instansi</h1>
<form action="{{ url('/inputlaporan') }}" method="POST">
{{ csrf_field() }}
 
<div class="row mt-5">
        <div class="col">
            <h2>Tabel Test</h2> <button type="button" id="tambah" class="btn btn-info">Tambah</button>
            <table class="table table-hover">
      <tr>
      <th scope="col">Pengeluaran</th>
      <th scope="col">Harga</th>
      </tr>
      <tr>
          <td><input class="form-control" type='text' data-type="pengeluaran"  id='pengeluaran_1'  name='pengeluaran[]'/>  </td>
          <td><input class="form-control" type='text' data-type="harga"  id='harga_1'  name='harga[]'/>  </td>

        </tr>
      </table>
  </div>
  </div>
  
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger"><a href="{{ url('/laporan') }} style="color:inherit; text-decoration: none;">Batal</a></button>
  </div>
  
</form>




<script type="text/javascript">

var i=$('table tr').length;
$("#tambah").on('click',function(){
  count=$('table tr').length;
  
    var data="<tr>";
      data+="<td><input class='form-control' type='text' data-type='pengeluaran'  id='pengeluaran_"+i+"'  name='pengeluaran[]'/>  </td>"
      data+="<td><input class='form-control' type='text' data-type='harga' id='harga_"+i+"' name='harga[]'/></td></tr>";
  $('table').append(data);
  i++;
});
        
</script>
@endsection
