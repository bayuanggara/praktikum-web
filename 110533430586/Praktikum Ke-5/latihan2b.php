<!DOCTYPE HTML>
<html>
<head>
	<title>Menciptakan Tabel</title>
</head>

<body>
<?php
require_once './koneksi.php'; //memanggil koneksi.php
//query sql pembuatan tabel
$sql = 'CREATE TABLE mahasiswa (
		nim VARCHAR(12) NOT NULL,
		nama VARCHAR(40) NOT NULL,
		alamat VARCHAR(100),
		PRIMARY KEY (nim)
		) ENGINE=MyISAM;';
		
$res = mysql_query($sql); //eksekusi query
if ($res) { //jika berhasil
	echo 'Tabel Created'; //tampilkan 'Tabel Created'
	@mysql_close($res);
} else { //kondisi lain
	echo mysql_error(); //tampilkan error
}
?>

<h4>Koneksi Berhasil</h4>
</body>
</html>