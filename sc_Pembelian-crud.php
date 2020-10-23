<?php
include("koneksi.php");
$a = $_POST ['Nama_Lengkap'];
$b = $_POST ['Jenis_Kelamin'];
$c = $_POST ['KD_Obat'];
$d = $_POST ['Jumlah_Pembelian'];

$query = mysql_query ("insert into pembelian (Nama_Lengkap,Jenis_Kelamin,KD_Obat,Jumlah_Pembelian)
values ('$a','$b','$c','$d')");
 
if ($query)
{echo"<script>alert('Data berhasil disimpan');window.location='input_Pembelian.php' ;</script>";}
?>