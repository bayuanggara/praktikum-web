<?php
//catatan:
//Jika perlu, sesuaikan nama dan password

$host = 'localhost'; //variabel host, localhost
$user = 'root'; // variabel user, 'root'
$pass = ''; //variabel password, dikosongi
$db   = 'mysql'; //variabel jenis database

$cnn= mysql_connect($host, $user, $pass); //fungsi untuk menyambungkan database dengan parameter host, user dan pass
if (!$cnn) { //jika cnn tidak ada
	exit ('Koneksi Gagal'); //tampilkan 'koneksi gagal'
}
$db = mysql_select_db($db);  //fungsi memilih jenis database 
if (!$db) {// jika database tidak ada
	exit('Gagal Memilih Database'); //tampilkan 'Gagal Memilih Database'
}

?>