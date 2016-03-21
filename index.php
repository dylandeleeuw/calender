<?php
	$connection = new mysqli('localhost','root','','calendar');
	echo $connection->connect_error;

	$month = "SELECT birthdays.month_id, birthdays.id, birthdays.person, birthdays.year, birthdays.day, months.month, months.id FROM birthdays
				INNER JOIN months
				ON birthdays.month_id = months.id
				ORDER BY `month_id` ASC, `day` ASC, `year` ASC LIMIT 1000";
	$month = $connection->query($month);
	$months = $month->fetch_all(MYSQLI_ASSOC);

	$prevmonth = '0';
	$prevday = '0';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verjaardagskalender</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<?php 
	foreach ($months as $month):
		if ($month['month_id'] == $prevmonth){
			if ($month['day'] == $prevday){
				 ?> <p><?php echo $month['person']; echo'('; echo $month['year'];echo')'?> </p><?php }
	  		else {
				?> <h2><?php echo $month['day']; ?> </h2><?php
			  	?> <p><?php echo $month['person']; echo'('; echo $month['year'];echo')' ?> </p><?php
				$prevmonth = $month['month_id'];
				$prevday = $month['day'];}}
		else{
			?> <h1><?php echo $month['month']; ?> </h1><?php
			?> <h2><?php echo $month['day']; ?> </h2><?php
			?> <p><?php echo $month['person']; echo'('; echo $month['year'];echo')'; ?> </p><?php 
			$prevmonth = $month['month_id'];}
		?>
		<br>
	<?php 
	endforeach;
	 ?>		
</body>
</html>