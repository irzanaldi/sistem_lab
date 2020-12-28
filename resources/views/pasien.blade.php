@extends('layouts.home')

@section('tittle', 'Master Pasien')

@section('content')

    <h1>Master Pasien</h1>

        <form action="" method = "POST">
          <input type="text" id="caripasien" class="fadeIn second" name="caripasien" placeholder="Masukkan nama pasien">  
          <input type="submit" class="fadeIn fourth" value="Cari" href="/form/pasien"> 
        </form>

    <a href="{{ url('/inputpasien') }}">input</a>

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

@endsection