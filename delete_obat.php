<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from obat where KD_Obat='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Obat-crud.php';</script>";}

?>