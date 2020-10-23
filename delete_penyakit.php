<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from penyakit where KD_Penyakit='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Penyakit-crud.php';</script>";}

?>