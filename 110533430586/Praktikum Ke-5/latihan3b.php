<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Tambah Data</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table>
<tr>
	<td>NIM</td>
	<td><input type="text" name="nim" /></td>
</tr>
<tr>
	<td>Nama</td>
	<td><input type="text" name="nama" size=40 /></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type="text" name="alamat" size=60 /></td>
</tr>
<tr>
<td></td>
	<td><input type="submit" value="Simpan" /></td>
</tr>
</table>
</form>
<?php
require_once './koneksi.php';
// Jika field nim dan nama diisi kemudian di klik submit
if (isset($_POST['nim']) && isset($_POST['nama'])) {
	$nim    = $_POST['nim'];
	$nama   = $_POST['nama'];
	$alamat = $_POST['alamat'];
// Tambahkan data baru ke tabel

//query untuk memasukkan data ke tabel mahasiswa
$sql = "INSERT INTO mahasiswa
VALUES ('" .$nim. "', '" .$nama. "', '" .$alamat. "' )";
$res = mysql_query($sql);//eksekusi query

if ($res) { //jika eksekusi berhasil
echo 'Data Berhasil Ditambahkan'; //tampilkan 'Data Berhasil Ditambahkan'
//mysql_close($res);

} else { //kondisi lain
echo 'Gagal Menambah Data <br />'; //tampilkan gagal Menambahkan Data
echo mysql_error(); //tampilkan errornya
}
}
echo '<hr />';
// Memanfaatkan script pengambilan data untuk
// menampilkan hasil
require_once './latihan3a.php';
?>
</body>
</html>