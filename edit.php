<?php
	require_once "edit.logic.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form method="post">
	<!-- shows the name -->
		<h1><?php echo $birthdays['person'] ?></h1>
	<!-- lets you edit the name -->
		<p><label>Persoon:</label>
		<input type="text" name="person" value="<?=$birthdays['person'];?>"></p>
	<!-- lets you edit the day -->
		<p><label>Datum:</label>
		<select name="day" >
			<?php 
				for($i=1; $i<=31; $i++)
			{ ?>
			    <option <?php if ($i == $birthdays['day']) { echo "selected=\"true\""; } ?> value="<?=$i?>"><?=$i?></option><?php
			}
			?> 
		</select> 
	<!-- lets you edit the month -->
		<select name="month">
			<?php foreach ($months as $month){?> 
				<option <?php if ($month['m_id'] == $birthdays['month_id']) { echo "selected=\"true\""; } ?> value="<?php echo $month['m_id']?>"><?php echo $month['month']; ?>
				</option>
			 	<?php
			 		}
			 	?>
		</select>
	<!-- lets you edit the month -->
		<select name="year">
		<?php 
				for($i=2016; $i>=1900; $i=$i-1)
			{ ?>
			    <option <?php if ($i == $birthdays['year']) { echo "selected=\"true\""; } ?> value="<?=$i?>"><?=$i?></option><?php
			}
		?>
		</select>
		<input type="hidden" name="id" value="<?=$birthdays['id']?>"><br>
		<input type="submit" name="confirmed" value="save">
		<input type="submit" name="canceled" value="cancel">
	</form>
</body>
</html>