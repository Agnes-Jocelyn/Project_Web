<?php
include("koneksi.php");
$A = $_POST['KD_Obat'];
$B = $_POST['Nama_Obat'];
$C = $_POST['Harga'];
$D = $_POST['Deskripsi'];
$E = $_POST['Stok_Barang'];
$F = $_POST['Gambar'];

$query = mysql_query("update obat set Nama_Obat='$B',Harga='$C',Deskripsi='$D',Stok_Barang='$E',Gambar='$F' where KD_Obat='$A'");
if($query)
{echo"<script>alert('Data berhasil diupdate');window.location='Obat-crud.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil diupdate');window.location='edit_obat.php';</script>";}

?>