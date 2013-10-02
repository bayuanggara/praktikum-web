<html>
<head>
	<title>Greeting</title>
</head>

<body>

<?php 

function greeting() 
{ 
$date = date ("G:i"); 



if ($date>=0 and $date <10) { 

echo '<h1>Selamat Pagi</h1>'; 

} else if ($date>=10 and $date<15) { 

echo '<h1>Selamat Siang</h1>'; 

} else if ($date>=18 and $date<24) { 

echo "Selamat Malam"; 

}else echo ""; 

} 
?> 


<?php greeting(); ?><br> 
 
<p align="center"><font face="arial" size="5" color="red"> 
<h3> Sekarang adalah Pukul



<?php 

//penulisan waktu 

$date = date ("G:i"); 

echo "$date WIB"; 
?> 
</p></h3>
</body>
</html>