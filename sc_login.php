<?php
include("koneksi.php");

$A = $_POST ['Username'];
$B = $_POST ['Password'];

$query = mysql_query ("select*from login where Username='$A' and Password='$B'");
$cek = mysql_num_rows($query);



if($cek)
{echo"<script>window.location='index-crud.php';</script>";}
else
{echo"<script>alert('Tidak dapat sign in,kemungkinan username atau password anda salah');window.location='Login.php';</script>";}

?>