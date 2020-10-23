<?php
include("koneksi.php");
$a = $_POST ['KD_Penyakit'];
$b = $_POST ['Nama_Penyakit'];
$c = $_POST ['Gejala'];
$d = $_POST ['Mengobati'];

$query = mysql_query ("insert into penyakit (KD_Penyakit,Nama_Penyakit,Gejala,Mengobati)
values ('$a','$b','$c','$d')");
 
if ($query)
{echo"<script>alert('Data Kode Penyakit = $a Sudah Tersimpan');window.location='input_Penyakit.php' ;</script>";}
else
{echo"<script>alert('Maaf Kode Penyakit $a sudah ada');window.location='input_Penyakit.php' ;</script>";}
?>