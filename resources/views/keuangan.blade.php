<!-- <html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
 
        <h1>Total Pemasukkan : {{$pemasukkan->total}}</h1>
        <h1>Total pengeluaran : {{$pengeluaran->totalpengeluaran}}</h1>
        <h1>Total Keuntungan : {{$pemasukkan->total - $pengeluaran->totalpengeluaran}}</h1>
 
</body>
</html> -->


<html>
<head>
<title>Undanagan orang tua</title>
<style type="text/css">
 body{
      margin: 3cm 1cm 1cm 1cm;
      font-size: 14px;
     

    }
p{
        text-indent: 0.5in;
        text-align: justify;
        width:100%;
}
</style>
</head>

<body>

<div style="float:left;">
<table border="0" cellpadding="1" >
<tbody>


<tr>    
<td colspan="2"><table border="0" cellpadding="1">


<tr>         
        <td ><span >No</span></td>         
        <td ><span >:</span></td>         
        <td ><span >005/ smk-if/ yps/ IV/ 2011</span></td>       
</tr>


<tr>        
         <td><span >Lampiran</span></td>        
         <td><span >:</span></td>        
         <td><span >-</span></td>       
</tr>

<tr>         
        <td><span >Perihal</span></td>         
        <td><span >:</span></td>         
        <td><span >Rapat orangtua siswa</span></td>       
</tr>


</tbody>
</table>
</div>    





<table border="0" style="margin-top:25px;">
<tbody>
<tr>        
        <td width="74"><span >kepada yth</span></td>        
        <td width="11"></td>         
        <td width="140"></td>       
</tr>


<tr>        
        <td><span >orangtua/wali siswa</span></td>                   
</tr>

<tr>        
         <td><span >di tempat</span></td>     
</tr>
</tbody>
</table>

<div>
        <p><dd>Sehubung dengan Sehubung denganSehubung denganSehubung dengan Sehubung  dengan Sehubung </dd></p>denganSehubungdenganSehubung dengan Sehubung dengan Sehubung 
        g denganSehubung denganSehubung denganSehubung denganSehubung dengan</p>
</div>

<div style="text-align: center;margin-top:20px;margin-bottom:20px;">
<table style="margin-left:auto;margin-right:auto" border="0" cellpadding="1" >
<tbody>


<tr>    
<td colspan="2"><table border="0" cellpadding="1" style="margin-left:auto;margin-right:auto">


<tr>         
        <td ><span >Pemasukkan</span></td>         
        <td ><span >:</span></td>         
        <td ><span >Rp. {{$pemasukkan->total}}</span></td>       
</tr>


<tr>        
         <td><span >Pengeluaran</span></td>        
         <td><span >:</span></td>        
         <td><span >Rp. {{$pengeluaran->totalpengeluaran}}</span></td>       
</tr>

<tr>         
        <td><span >Keuntungan</span></td>         
        <td><span >:</span></td>         
        <td><span >Rp. {{$pemasukkan->total - $pengeluaran->totalpengeluaran}}</span></td>       
</tr>


</tbody>
</table>
</div> 

<div>
        <p><dd>Dengan demikian laporan keuangan yang telah dibuat sehingga bisa memberikan bla bla bla bla bla</dd></p>denganSehubungdenganSehubung dengan Sehubung dengan Sehubung 
        g denganSehubung denganSehubung denganSehubung denganSehubung dengan</p>
</div>

<div style="float:right;margin-top:150;">
       <p>Dengan Hormat,</p>  
       <p>Kepala Lab Cabang BSD City</p> <br><br><br><br><br>
       <p>(Nama Siapa ini)</p> 

</div>










</body>
</html>