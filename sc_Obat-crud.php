<?php
include("koneksi.php");
$a = $_POST ['KD_Obat'];
$b = $_POST ['Nama_Obat'];
$c = $_POST ['Harga'];
$d = $_POST ['Deskripsi'];
$e = $_POST ['Stok_Barang'];
$f = $_POST ['Gambar'];

$query = mysql_query ("insert into obat (KD_Obat,Nama_Obat,Harga,Deskripsi,Stok_Barang,Gambar)
values ('$a','$b','$c','$d','$e','$f')");
 
if ($query)
{echo"<script>alert('Data berhasil disimpan');window.location='input_Obat.php' ;</script>";}
else
{echo"<script>alert('Maaf Kode Obat $a sudah ada');window.location='input_Obat.php' ;</script>";}
?>