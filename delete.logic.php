<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$connection = new mysqli('localhost','root','','calendar');
		echo $connection->connect_error;

		$id = $_GET["id"];

		$birthday = "SELECT birthdays.month_id, birthdays.id, birthdays.person, birthdays.year, birthdays.day, months.month, months.m_id FROM birthdays
					INNER JOIN months
					ON birthdays.month_id = months.m_id
					WHERE birthdays.id=$id";
		$birthday = $connection->query($birthday);
		$birthday = $birthday->fetch_assoc();


	}elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST['confirmed'])){
			// delete query
				$connection = new mysqli('localhost','root','','calendar');
				$id = $connection->escape_string($_POST["id"]);

				$delete = "DELETE FROM birthdays WHERE id=$id";
				$delete = $connection->query($delete);
		}
		header("Location: ./");
	}