<?php 

$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

for ($i=0; $i < sizeof($number)-1; $i++) { 
	for ($j=$i + 1; $j < sizeof($number); $j++) { 
		if ($number[$j] > $number[$i]) 
		{
			$number[$j] = $number[$j] + $number[$i];
			$number[$i] = $number[$j] - $number[$i];
			$number[$j] = $number[$j] - $number[$i];
		}
	}
}

for ($i=0; $i < sizeof($number); $i++) { 
	echo $number[$i] + " ";
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cau2</title>
</head>
<body>
	
</body>
</html>