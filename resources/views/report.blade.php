<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Tagihan Keuangan</h4>
		<h6><a target="_blank">TEST</a></h5>
	</center>
 
	   
<table class="table mt-5">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Instansi</th>
      <th scope="col">Test</th>
      <th scope="col">Harga</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($pemeriksaan as $psn)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$psn->nama}}</td>
      <td>{{$psn->nama_instansi}}</td>
      <td>{{$psn->nama_test}}</td>
      <td>{{$psn->harga}}</td>
      <td>{{$psn->tanggal}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
 
</body>
</html>


 