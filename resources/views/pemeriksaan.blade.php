@extends('layouts.home')
@section ('tittle', 'Pemeriksaan')
@section('content')

@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
      </div>
 @endif
<h1>Form Input Pemeriksaan</h1>

<form action="{{ url('/inputpemeriksaan') }}" method="POST">
{{ csrf_field() }}
<div class="row">
  <div class="col-md-3">
   <label for="inputAddress" class="form-label">Nama Pasien</label>
    <input type="text" class="form-control" id="namapasien" name="namapasien" autocomplete="off">
    @if ($errors->has('namapasien'))
       <span class="text-danger">{{ $errors->first('namapasien') }}</span>
    @endif
  </div>
  <div class="col-3">
  <label for="inputPassword4" class="form-label">Nama Instansi</label>
    <select class="form-select form-control" aria-label="Default select example" name="instansi" id="instansi">
        <option>Instansi</option>
    @foreach($instansi as $ins)
        <option value=" {{ $ins->kd_instansi }} ">({{ $ins->kd_instansi }}) {{ $ins->nama_instansi }}</option>
    @endforeach
    </select>
    @if ($errors->has('instansi'))
       <span class="text-danger">{{ $errors->first('instansi') }}</span>
    @endif
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
    <select class="form-select form-control" aria-label="Default select example" name="jk">
        <option selected>PILIH Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="col-3">
  <label for="inputAddress2" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">
  </div>
  <div class="col-3">
  <label for="inputCity" class="form-label">Umur</label>
    <input type="text" class="form-control" id="umur" name="umur" autocomplete="off">
  </div>
  <div class="col-md-2">
  <label for="inputZip" class="form-label">Nomer Telpon</label>
    <input type="text" class="form-control" id="nomer" name="nomer" autocomplete="off">
    @if ($errors->has('nomer'))
       <span class="text-danger">{{ $errors->first('nomer') }}</span>
    @endif
  </div>
</div>


  <div class="row mt-5">
        <div class="col">
            <h2>Tabel Test</h2> <button type="button" id="tambah" class="btn btn-info">Tambah</button>
            <table class="table table-hover">
      <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Test</th>
      <th scope="col">Jenis Test</th>
      <th scope="col">Bahan</th>
      <th scope="col">Harga</th>
      </tr>
      <tr>
          <td width="5%";><input class="pemeriksaan form-control autocomplete_txt" type='text' data-type="kode"  id='kode_1'  name='kode[]'  readonly/>  </td>
          <td><input class="form-control autocomplete_txt" type='text' data-type="test"  id='test_1'  name='test[]'/>  </td>
          <td><input class="pemeriksaan autocomplete_txt" type='text' data-type="Jenis" id='jenis_1' name='jenis[]'  readonly/> </td>
          <td><input class="pemeriksaan autocomplete_txt" type='text' data-type="bahan" id='bahan_1' name='bahan[]'  readonly/> </td>
          <td><input class="pemeriksaan autocomplete_txt" type='text' data-type="harga" id='harga_1' name='harga[]'  readonly/> </td>

        </tr>
      </table>
  </div>
  </div>
  
  <div div class="col-12 mt-5">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-danger"><a href="/pasien" style="color:inherit; text-decoration: none;">Batal</a></button>
  </div>
  
</form>


<script type="text/javascript">
          
 
var i=$('table tr').length;
$("#tambah").on('click',function(){
  count=$('table tr').length;
  
    var data="<tr>";
      data+="<td width='5%';><input class='pemeriksaan autocomplete_txt' type='text' data-type='kode'  id='kode_"+i+"'  name='kode[]'  readonly/>  </td>"
      data+="<td><input class='form-control autocomplete_txt' type='text' data-type='test' id='test_"+i+"' name='test[]'/></td>";
      data+="<td><input class='form-control autocomplete_txt' type='text' data-type='jenis' id='jenis_"+i+"' name='jenis[]'  readonly/></td>";
      data+="<td><input class='form-control autocomplete_txt' type='text' data-type='bahan' id='bahan_"+i+"' name='bahan[]'  readonly/></td>";
      data+="<td><input class='form-control autocomplete_txt' type='text' data-type='harga' id='harga_"+i+"' name='harga[]'  readonly/></td></tr>";
  $('table').append(data);
  i++;
});
        


//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
  type = $(this).data('type');
  
  if(type =='kode' )autoType='kd_test'; 
  if(type =='test' )autoType='nama_test'; 
  
   $(this).autocomplete({
       minLength: 0,
       source: function( request, response ) {
            $.ajax({
                url: "{{ route('searchajax') }}",
                dataType: "json",
                data: {
                    term : request.term,
                    type : type,
                },
                success: function(data) {
                    var array = $.map(data, function (item) {
                       return {
                           label: item[autoType],
                           value: item[autoType],
                           data : item
                       }
                   });
                    response(array)
                }
            });
       },
       select: function( event, ui ) {
           var data = ui.item.data;           
           id_arr = $(this).attr('id');
           id = id_arr.split("_");
           elementId = id[id.length-1];
           $('#kode_'+elementId).val(data.kd_test);
           $('#test_'+elementId).val(data.nama_test);
           $('#jenis_'+elementId).val(data.nama_jenis);
           $('#bahan_'+elementId).val(data.bahan);
           $('#harga_'+elementId).val(data.harga);
       }
   });
   
});


</script>
  
@endsection
