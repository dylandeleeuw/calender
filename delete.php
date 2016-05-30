<?php 
	require_once "delete.logic.php";
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
	<h1>Verjaardag verwijderen</h1>
	<p>Weet je zeker dat je de verjaardag van <?php echo $birthday["person"]; ?> op <?=$birthday["day"];?> <?php echo $birthday["month"];?> wilt verwijderen?</p>
	<form method="post">
		<input type="hidden" name="id" value="<?=$birthday['id']?>">
		<input type="submit" name="confirmed" value="Yes">
		<input type="submit" name="canceled" value="No">
	</form>
</body>
</html> 