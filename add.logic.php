<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$connection = new mysqli('localhost','root','','calendar');
		echo $connection->connect_error;
		$months = "SELECT * FROM months";
		$months = $connection->query($months);
		$months = $months->fetch_all(MYSQLI_ASSOC);

	}elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST['confirmed'])){
			// add query
				$person = $_POST['person'];
				$day = $_POST['day'];
				$month = $_POST['month'];
				$year = $_POST['year'];

				$connection = new mysqli('localhost','root','','calendar');

				$add = "INSERT INTO `calendar`.`birthdays` (`person`, `day`, `month_id`, `year`) VALUES ('$person', '$day', '$month', '$year')";
				$add = $connection->query($add);
		}
		header("Location: ./");
	}