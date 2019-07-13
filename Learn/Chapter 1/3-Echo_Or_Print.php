<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Echo & Print</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
		//This is standart echo for PHP
		echo "This Standard PHP<br>";
		echo "Separated ", "By Coma ", "and multiple parameter<br>";

		//Echo for call variable 
		$txt1 = "Ini";
		$txt2 = "Budi";
		$x = 5;
		$y =4;

		echo $txt1 . " ". $txt2 . "<br>";
		echo $x + $y;

		//Print for call Variable
		$txt1 = "<br>Ini";
		$txt2 = "Budi";
		$x = 5;
		$y =4;

		print $txt1 . " ". $txt2 . "<br>";
		print $x + $y;


	?>
	

</body>
</html>