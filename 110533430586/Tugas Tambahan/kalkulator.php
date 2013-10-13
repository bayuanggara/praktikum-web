<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$bil1=@$_GET['bil1'];
$bil2=@$_GET['bil2'];
$operator=@$_GET['operator'];

if ($operator=='+') {
	$hasil = $bil1 + $bil2;
}elseif ($operator=='-') {
	$hasil = $bil1 - $bil2;
}elseif ($operator=='x') {
	$hasil = $bil1 * $bil2;
}elseif ($operator==':') {
	$hasil = $bil1 / $bil2;
}


?>

<form id="bil1" name="form1" method="get" action="<?php $_SERVER['PHP_SELF'];?>">
  <label for="bil1"></label>
  <input type="text" name="bil1" value="<?php echo isset($_GET['bil1']) ? $_GET['bil1']:''?>">
  <label for="operator"></label>
  <select name="operator">
  			<option value="+"
            <?php
			if (@$_GET['operator'] == '+') { 
			echo 'selected="selected"';	
			}
			?> 
            >+
			
            <option value="-"
            <?php
			if (@$_GET['operator'] == '-') { // memeriksa apakah form select 'job' yang terpilih memiliki value 'Mahasiswa'
			echo 'selected="selected"';	
			}
			?> 
            >-
			
            <option value="x"
            <?php
			if (@$_GET['operator'] == 'x') { // memeriksa apakah form select 'job' yang terpilih memiliki value 'Mahasiswa'
			echo 'selected="selected"';	
			}
			?> 
            >x
            
			<option value=":"
            <?php
			if (@$_GET['operator'] == ':') { // memeriksa apakah form select 'job' yang terpilih memiliki value 'Mahasiswa'
			echo 'selected="selected"';	
			}
			?> 
            >:
  </select>
  <label for="bil2"></label>
  <input type="text" name="bil2" id="bil2" value = "<?php echo isset($_GET['bil2']) ? $_GET['bil2']:''?>"/>
  <input type="submit" name="equal" id="equal" value="=" style="background:green; border-radius:7px; color:white" />
  <label for="hasil"></label>
  <input type="text" name="hasil" id="hasil" value="<?php echo isset($hasil) ? $hasil:''?>" />
</form>
</body>
</html>