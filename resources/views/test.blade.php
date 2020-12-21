@extends('layouts.home')

@section('tittle', 'Master Test')

@section('content')

    <h1>Master Pasien</h1>

        <form action="" method = "POST">
          <input type="text" id="caritest" class="fadeIn second" name="caritest" placeholder="Masukkan nama test">  
          <input type="submit" class="fadeIn fourth" value="Cari"> 
        </form>

    <button>Input data test</button>

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