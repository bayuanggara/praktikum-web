<html> 
<head> 
<title>By Value</title> 
</head>

<body> 
<?php

function bilangan($a) {
	$a++;
}

$b=5;

bilangan($b);
echo $b;

?> 
</body> 
</html>