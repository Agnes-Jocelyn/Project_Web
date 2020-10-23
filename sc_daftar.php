<?php
include("koneksi.php");

$A = $_POST ['Username'];
$B = $_POST ['Email'];
$C = $_POST ['Password'];

$query = mysql_query ("insert into login (Username,Email,Password) values ('$A','$B','$C')");

if($query)
{echo"<script>window.location='index-crud.php';</script>";}
else
{echo"<script>alert('Data tidak tersimpan, kemungkinan Username sudah terpakai');window.location='Login.php';</script>";}

?>