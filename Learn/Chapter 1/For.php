<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="1">
		<?php
		for ($i=1; $i <=3 ; $i++) { 
		 	echo "<tr>";
		 	for ($j=1; $j <=5 ; $j++) {
		 		echo "<td>$i.$j</td>"; 
		 		# code...
		 	}
		 } 
	 ?>
	</table>
	
</body>
</html>