<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Constants</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		//*---Welcome to Constants Statement---*//
		//---Section 1 : Define with without Case-Sensitive is False---//
			define("Greetings", "PHP よこそ <br>");
			echo Greetings;

		//---Section 2 : Define with without Case-Sensitive is True---/
			define("GreeTinGS", "PHP よこそ <br>", true);
			echo greetiNGS;

		//---Section 3 : Make Constant Array
			define("Human", ["Head", "Body", "Foot"]);
			echo Human[2];

		//---Section 4 : Constants is Global---//
			echo "<br>";
			define("Car", ["Run", "Brake", "Reverse"]);

			function on()
			{
				echo "The car is " . Car[0];
			}

			on();

	 ?>
</body>
</html>