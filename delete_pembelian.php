<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from pembelian where ID_Pembeli='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Pembelian-crud.php';</script>";}

?>