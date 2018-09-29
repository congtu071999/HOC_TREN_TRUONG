<?php 

$n = 71;
$x = 6146461546843213217;
function kiemtrasonguyento($n){
	if ($n < 2) {
		return false;
	}
	for ($i=2; $i <= sqrt($n) ; $i++) { 
		if($n % $i == 0)
		{
			return false;
		}
	}
	return true;
}

function kiemtrasoHoanHao($n){
	$tong = 0;
	for ($i=1; $i < $n; $i++) { 
		if ($n % $i == 0) {
			$tong+=$i;
		}
		
	}
	if ($tong == $n) {
		echo $n;
		echo "la so hoan hao";
	}else
	{
		echo $n;
		echo "khong phai la so hoan hao";
	}
}


if(kiemtrasonguyento($x) == true)
{
	echo $x;
	echo "la so nguyen to";
}else
{
	echo $x; 
	echo "khong phai la so nguyen to";
}

kiemtrasoHoanHao($x);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Cau3</title>
 </head>
 <body>
 	
 </body>
 </html>