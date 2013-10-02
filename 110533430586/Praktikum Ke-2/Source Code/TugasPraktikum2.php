<html> 
<head> 
<title>Generate Matrix sll</title> 
</head>

<body> 




<br /><br />
<?php
function generateTable($sel, $kolom){
$baris=4;
			
			$width = $kolom * 80;
			echo "<table width=".$width." border=1>";
			$brs = 0;
			$sl = 1;
			while ($brs < $baris && $sl <= $sel){
				echo "<tr>";
				$col = 0;
				while ($col < $kolom){
					if ($sl <= $sel){
						echo "<td><div align=center>".$sl."</div></td>";
						$sl++;
					}
					$col++;
				}
				echo "</tr>";
				$brs++;
			}
			echo "</table>";

}

generateTable(10,4);
?>

</body> 
</html>