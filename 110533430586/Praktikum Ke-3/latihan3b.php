<!DOCTYPE HTML>
<html>
<head><title>Prefill data Radio Button</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post" > <!--form ditangani oleh script atau file ini dengan metode POST--> 
	Jenis Kelamin
	
	<input type="radio" name ="sex" value="Pria" 
	<?php
	if (@$_POST['sex'] == 'Pria') { // memeriksa apakah RB 'sex' yang terpilih memiliki value 'Wanita'
	echo 'checked="checked"'; //jika value Wanita yang terpilih maka setelah submit di klik Option akan menunjuk Wanita
	}
?>	/>Pria
	
	<input type="radio" name ="sex" value="Wanita" 
	<?php
	if (@$_POST['sex'] == 'Wanita') { // memeriksa apakah RB 'sex' yang terpilih memiliki value 'Wanita'
	echo 'checked="checked"'; //jika value Wanita yang terpilih maka setelah submit di klik Option akan menunjuk Wanita
	}
?>
	/>Wanita
	<br />
	<input type="submit" value="ok" /> <!--Submit button-->
</form>




<?php
if (isset($_POST['sex'])) { //jika RB sex ada yang terpilih maka jalankan statement
	echo $_POST['sex']; // statement menampilkan string yang dipilih di RB
}

?>


</body>
</html>