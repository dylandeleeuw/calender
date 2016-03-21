<?php 
	$connection = new mysqli('localhost','root','','calendar');
	echo $connection->connect_error;

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Verjaardagskalender</title>
 	<link rel="stylesheet" href="main.css">
 </head>
 <body>
 	<form method="post">
 		<input type="checkbox" name="dag" value="dag">
 		
 	</form>
 	
 </body>
 </html>