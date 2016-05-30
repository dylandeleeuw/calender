<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$connection = new mysqli('localhost','root','','calendar');
		echo $connection->connect_error;
		$id = $_GET['id'];
		$birthdays = "SELECT birthdays.month_id, birthdays.id, birthdays.person, birthdays.year, birthdays.day, months.month, months.m_id FROM birthdays
					INNER JOIN months
					ON birthdays.month_id = months.m_id			
					WHERE birthdays.id=$id";
		$birthdays = $connection->query($birthdays);
		$birthdays = $birthdays->fetch_array();

		$connection = new mysqli('localhost','root','','calendar');
		echo $connection->connect_error;
		$months = "SELECT * FROM months";
		$months = $connection->query($months);
		$months = $months->fetch_all(MYSQLI_ASSOC);


	}elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST['confirmed'])){
			// edit query
				$id = $_POST['id'];
				$person = $_POST['person'];
				$day = $_POST['day'];
				$month = $_POST['month'];
				$year = $_POST['year'];

				$connection = new mysqli('localhost','root','','calendar');

				$edit = "UPDATE `calendar`.`birthdays` SET `person`='$person', `day`='$day', `month_id`='$month', `year`='$year' WHERE `id`='$id'";
				$edit = $connection->query($edit);
				
		}
		header("Location: ./");
	}