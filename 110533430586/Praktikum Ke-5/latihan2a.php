<!DOCTYPE HTML>
<html>
<head>
	<title>Menciptakan Database</title>
</head>

<body>
<?php
require_once './koneksi.php'; //memanggil koneksi.php

$db = 'myweb'; //var. berisi value myweb, digunakan untuk menamail database yg akan dibuat

$res = mysql_query('CREATE DATABASE ' . $db); //eksekusi pembuatan database
if ($res) { //jika eksekusi berhasil
	echo 'Database' .$db. ' Created'; //tampilkan notifikasi berhasil
	mysql_close($res);
} else { //kondisi lain
	echo mysql_error(); //tampilkan error
}
?>

<h4>Koneksi Berhasil</h4>
</body>
</html>