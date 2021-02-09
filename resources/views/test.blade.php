@extends('layouts.home')

@section('tittle', 'Master Test')

@section('content')

  
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
      </div>
@endif

    <h1>Master Test</h1>

        <form action="" method = "POST">
          <input type="text" id="caripasien" class="fadeIn second" name="caripasien" placeholder="Masukkan nama pasien">  
          <input type="submit" class="fadeIn fourth" value="Cari" href="/form/pasien"> 
        </form>
    <a class="btn btn-primary mt-2" role="button" data-bs-toggle="button" style="color:white;" href="{{ url('/formtest') }}">input</a>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Bahan</th>
      <th scope="col">Jenis</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_test as $psn)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $psn->nama_test }}</td>
      <td>{{ $psn->harga }}</td>
      <td>{{ $psn->bahan}}</td>
      <td>{{$psn->nama_jenis}}</td>
      <td><a href="{{ url('/edit/' .$psn->kd_test) }}" class="btn btn-primary btn-flat btn-xs" ><i class="fa fa-pencil"></i> Edit</a>
          <a href="{{ url('/hapus/' .$psn->kd_test) }}" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-danger btn-flat btn-xs hapus" ><i class="fa fa-trash"></i> Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $data_test->links() }}
@endsection

<script>
        jQuery(document).ready(function($){
            $('.hapus').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'Alert',
                        text: 'Hapus Data?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
	 
    </script>