<?php
include("koneksi.php");
$A = $_POST['ID_Pembeli'];
$B = $_POST['Nama_Lengkap'];
$C = $_POST['Jenis_Kelamin'];
$D = $_POST['KD_Obat'];
$E = $_POST['Jumlah_Pembelian'];

$query = mysql_query("update pembelian set Nama_Lengkap='$B',Jenis_Kelamin='$C',KD_Obat='$D',Jumlah_Pembelian='$E' where ID_Pembeli='$A'");
if($query)
{echo"<script>alert('Data berhasil diupdate');window.location='Pembelian-crud.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil diupdate');window.location='edit_pembelian.php';</script>";}

?>