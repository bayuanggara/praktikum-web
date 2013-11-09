<?php
// File: seleksi.php
require_once './koneksi.php'; //memanggil koneksi.php
$sql = 'SELECT * FROM mahasiswa'; //query penyeleksian semua isi tabel
$res = mysql_query($sql); //eksekusi query
if ($res) {
if (mysql_num_rows($res)) { ?>

<table border=1 cellspacing=1 cellpadding=5>
<tr>
		<th>#</th>
		<th width=100>NIM</th>
		<th width=150>Nama</th>
	<th>Alamat</th>
</tr>
<?php
$i = 1;
while ($row = mysql_fetch_row($res)) { //perulangan untuk menelusuri setiap indeks?> 
<tr>
		<td>
			<?php echo $i;?>
		</td>
	<td>
		<?php echo $row[0]; //akses value indeks 0 ?> 
	</td>

	<td>
			<?php echo $row[1]; //akses value indeks 1 ?>
	</td>

	<td>
			<?php echo $row[2]; //akses value indeks 2 ?>
	</td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
} else { //kondisi lain
echo 'Data Tidak Ditemukan'; //tampilkan data tidak ditemukan
}
mysql_close();
}
?>