<html> 
<head> 
<title>Generate Matrix Cell</title> 
</head>

<body> 
<?php


function Tabel($baris, $kolom) 
{ 
	echo '<h2 align="center">Tabel '. $baris .' baris dan ' . $kolom . ' kolom</h2>'; 
	echo '<table align="center" width = 50% border=1>'; 

for($b = 0; $b < $baris; $b++) { 
echo "<tr>\n"; 

for($k = 0; $k < $kolom; $k++) { 
echo "<td height=30 width=10%></td>\n"; 
} 
echo "</tr>\n"; 
} 
echo "</table>\n"; 
} 
Tabel(10,8); //memanggil fungsi BuatTabel

?> 
</body> 
</html>