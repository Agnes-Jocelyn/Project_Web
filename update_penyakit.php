<?php
include("koneksi.php");
$A = $_POST['KD_Penyakit'];
$B = $_POST['Nama_Penyakit'];
$C = $_POST['Gejala'];
$D = $_POST['Mengobati'];

$query = mysql_query("update penyakit set Nama_Penyakit='$B',Gejala='$C',Mengobati='$D' where KD_Penyakit='$A'");
if($query)
{echo"<script>alert('Data berhasil diupdate');window.location='Penyakit-crud.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil diupdate');window.location='edit_penyakit.php';</script>";}

?>