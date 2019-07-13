<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Strings</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		//Section 1 : String Length
		echo strlen("Hello Section 1");
		echo "<br>";

		//Section 2 : String Word Count
		echo str_word_count("Hello Section 1");
		echo "<br>";

		//Section 3 : String Reverse
		echo strrev("Hello Section 1");
		echo "<br>";

		//Section 4 : String Position
		echo strpos("Hello Section!", "Section");
		echo "<br>";

		//Section 5 : String Replace
		echo str_replace("section 1", "section new", "Hello section 1 ");

		//End Section
	 ?>
</body>
</html>