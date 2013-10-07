<!DOCTYPE html>
<html>
<head><title>Data Seleksi</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post"> <!--form ditangani oleh script atau file ini dengan metode POST-->
Pekerjaan
<select name="job">
	<!--option Mahasiswa-->
	<option value="Mahasiswa" 
		
	<?php
	if (@$_POST['job'] == 'Mahasiswa') { // memeriksa apakah form select 'job' yang terpilih memiliki value 'Mahasiswa'
	echo 'selected="selected"';	
	}
	?> 
	>Mahasiswa
	<!--Preselected yang pertama kali dipilih adalah ABRI-->
	<option value="ABRI" 
	<?php
				if(@$_POST['job'] == "ABRI" or !isset($_POST['job'])){ // memeriksa apakah form select 'job' yang terpilih memiliki value 'Mahasiswa'
					echo 'selected="selected"'; //jika ya, maka setelah submit maka option ABRI yang akan ditampilkan di dropdown
				}
	?>
	>ABRI
	
	<!--Preselected yang pertama kali dipilih adalah PNS-->
	<option value="PNS" 
	<?php
				if(@$_POST['job'] == "PNS"){ // memeriksa apakah form select 'job' yang terpilih memiliki value 'PNS'
					echo 'selected="selected"'; //jika ya, maka setelah submit maka option PNS yang akan ditampilkan di dropdown
				}
	?>
	>PNS
	<!--Submit button-->
	<option value="Swasta" 
	<?php
				if(@$_POST['job'] == "Swasta"){ // memeriksa apakah form select 'job' yang terpilih memiliki value 'Swasta'
					echo 'selected="selected"'; //jika ya, maka setelah submit maka option Swasta yang akan ditampilkan di dropdown
				}
	?>
	>Swasta
</select> 
<input type="submit" value="OK"/> <!--Submit button-->
</form>

<?php
if (isset($_POST['job'])) { //jika form select job ada yang terpilih maka jalankan statement
	echo  $_POST['job']; // statement menampilkan string 'Hello, (disertai string yang dipilih di text field)
}

?>


</body>
</html>