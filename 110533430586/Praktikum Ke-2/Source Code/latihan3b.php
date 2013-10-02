<html>
<head>
	<title>Demo Variabel</title>
</head>

<body>

<?php 

$str = '123abc';

// Casting nilai variabel $str ke integer
$bil = (int) $str; // $bil = 123

echo gettype($str);
// Output : string

echo gettype($bil);
//Output: integer 

?>

</body>
</html>