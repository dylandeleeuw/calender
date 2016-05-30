<?php
	$connection = new mysqli('localhost','root','','calendar');
	echo $connection->connect_error;

	$month = "SELECT birthdays.month_id, birthdays.id, birthdays.person, birthdays.year, birthdays.day, months.month, months.m_id FROM birthdays
				INNER JOIN months
				ON birthdays.month_id = months.m_id
				ORDER BY `month_id` ASC, `day` ASC, `year` ASC LIMIT 1000";
	$month = $connection->query($month);
	$months = $month->fetch_all(MYSQLI_ASSOC);

	$prevmonth = '0';
	$prevday = '0';

	function person($id, $person, $year, $day, $month){
		?><p>
			<a href="edit.php?id=<?=$id?>">
			<?=$person; echo'('; echo $year;echo')'?></a>
				<a href="delete.php?id=<?=$id?>">x</a>
		</p><?php
	}
?>