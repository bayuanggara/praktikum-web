<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dukungan Cookie</title>
</head>

<body>

<?php



if (isset($_GET['q']) && $_GET['q']==1) { //jika q terisi dan value nya 1
	if (isset($_COOKIE['test'])) { //jika mendukung
		echo 'support'; //tampilkan supprot
	} else {
		echo 'tidak support'; //jika tidak maka tampilkan tidak support
	}
	
} else {
	setcookie ('test', 'value'); //isi value cookie dengan 'test' dan 'value'
	$self = $_SERVER['PHP_SELF'];
	
	//redireksi ke current script
	header ('Location : ' . $self . '?q=1');
	exit;	
}

?>

<p>
Tekan Refresh (F5); 
</p>

</body>
</html>