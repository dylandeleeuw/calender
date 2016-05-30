<?php
	include "index.logic.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verjaardagskalender</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<?php
	foreach ($months as $month){
		if ($month['month_id'] == $prevmonth){

			if ($month['day'] == $prevday){
				person($month['id'], $month['person'], $month['year'], $month['day'], $month['month']);
				$prevday = $month['day'];}
	  		else {
				?><h2><?php echo $month['day']; ?> </h2><?php
			  	person($month['id'], $month['person'], $month['year'], $month['day'], $month['month']);
			  	
				$prevmonth = $month['month_id'];
				$prevday = $month['day'];}}
		else{
				?><h1><?php echo $month['month']; ?> </h1>
				<h2><?php echo $month['day']; ?> </h2> <?php
				person($month['id'], $month['person'], $month['year'], $month['day'], $month['month']);

				$prevmonth = $month['month_id'];} ?><br>
<?php 
	};
?>		
	<p><a href="add.php">+ Toevoegen</a></p>
</body>
</html>