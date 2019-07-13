<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Types</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		//This is Data Type Tutorial

		//Section 1 : String
		$x = "Ini";
		$y = " Budi<br>";
		echo $x;
		echo $y;

		//Section 2 : Integer
		$x = 12;
		var_dump($x);
		echo "<br>";

		//Section 3 : Float
		$x = 10.678;
		var_dump($x);
		echo "<br>";

		//Section 4 : Boolean
		$x=12;
		$y=10;
		//if x > y = True
		var_dump($x > $y);
		//if x < y = False
		var_dump($x < $y);

		//Section 5 : Array
		echo "<br>";
		$alattls = array("kertas","pensil","penghapus");
		var_dump($alattls); 




		// Section 6 : Object Simple Class
		echo "<br>";
		class Car {
		    function Car() {
		        $this->model = "VW <br>";
		    }
		}

		// create an object
		$herbie = new Car();

		// show object properties
		echo $herbie->model;




		//Section 7 : Class
		class human
		{
			var $run;
			var $sleep;
			function run()
			{
				return "run <br>";
			}

			function sleep()
			{
				return "sleep <br>";
			}

		}

		$human = new human();

		echo "Human is " . $human->run();
		echo "Human is " . $human->sleep();	
	 ?>
</body>
</html>