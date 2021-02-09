
<html>
<head>
<title>Undanagan orang tua</title>
<style type="text/css">
@page {
  size: A4;
 
}
 body{
  margin: 3cm 2cm 1cm 1cm;
      font-size: 14px;
     

    }
p{
        text-indent: 0.5in;
        text-align: justify;
        width:100%;
}
.page_break {
      page-break-before: always;
    }
#outtable {
      padding: 20px;
      border: 1px solid #e3e3e3;
      width: 600px;
      border-radius: 5px;
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
        <td ><span ><?php echo date('m' , strtotime('{{$pemeriksaan->tanggal}}'));?></span></td>       
</tr>


<tr>        
         <td><span >Lampiran</span></td>        
         <td><span >:</span></td>        
         <td><span >-</span></td>       
</tr>

<tr>         
        <td><span >Perihal</span></td>         
        <td><span >:</span></td>         
        <td><span >Laporan Keuangan</span></td>       
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
        <td><span >Dr. Siswanto Darmadi</span></td>                   
</tr>

<tr>        
         <td><span >di tempat</span></td>     
</tr>
</tbody>
</table>

<div>
        <p>Dengan hormat, bersama dengan ini kami sampaikan laporan keuangan bulanan lab kedungdoro cabang bsd city untuk periode
        bulan ini dengan rincian sebagai berikut :</p>
</div>

<div style="text-align: center;margin-top:20px;margin-bottom:20px;">
<table style="margin-left:auto;margin-right:auto" border="0" cellpadding="1" >
<tbody>


<tr>    
<td colspan="2"><table border="0" cellpadding="1" style="margin-left:auto;margin-right:auto"></table>


<tr>         
        <td ><span >Instansi</span></td>         
        <td ><span >:</span></td>         
        <td ><span >{{$pemeriksaan->nama_instansi}}</span></td>       
</tr>


<tr>        
         <td><span >Tagihan</span></td>        
         <td><span >:</span></td>        
         <td><span >{{$pemeriksaan->total}}</span></td>       
</tr>

<tr>         
        <td><span >Bulan</span></td>         
        <td><span >:</span></td>         
        <td><span ><?php echo date('F' , strtotime('{{$pemeriksaan->tanggal}}'));?></span></td>       
</tr>


</tbody>
</table>
</div> 



<div >
        <p>Demikian laporan ini kami sampaikan, atas perhatiannya dan kerjasamanya kami ucapkan terima kasih.</p>
</div>

<div style="float:right;margin-top:150;">
       <p>Dengan Hormat,</p>  
       <p>Kepala Lab Cabang BSD City</p> <br><br><br><br><br>
       <p>(Saras Asri)</p> 

</div>



<div class="page_break"></div>

<div id="outtable">
    <table style="
      font-family: arial;
      color: #5E5B5C;">
      <thead style="text-align: left;
      padding: 20px;">
        <tr>
      <th style="text-align: left;
      padding: 20px;">No</th>
      <th style="text-align: left;
      padding: 20px;">Nama</th>
      <th style="text-align: left;
      padding: 20px;">Test</th>
      <th style="text-align: left;
      padding: 20px;">Harga</th>
      <th style="text-align: left;
      padding: 20px;">Tanggal</th>
        </tr>
      </thead>
      <tbody style=" border-top: 1px solid #e3e3e3;
      padding: 20px;">
      @foreach($tabel as $psn)
     <tr>
      <td style=" border-top: 1px solid #e3e3e3;
      padding: 20px;">{{$loop->iteration}}</td>
      <td style=" border-top: 1px solid #e3e3e3;
      padding: 20px;">{{$psn->nama}}</td>
      <td style=" border-top: 1px solid #e3e3e3;
      padding: 20px;">{{$psn->nama_test}}</td>
      <td style=" border-top: 1px solid #e3e3e3;
      padding: 20px;">{{$psn->harga}}</td>
      <td style=" border-top: 1px solid #e3e3e3;
      padding: 20px;">{{$psn->tanggal}}</td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>
 




 



 