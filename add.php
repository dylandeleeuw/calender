<?php
	require_once "add.logic.php";
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Verjaardagskalender</title>
 	<link rel="stylesheet" href="main.css">
 </head>
 <body>
	<form method="post">
		<h1>Verjaardag toevoegen</h1>
		<p><label>Persoon:</label>
		<input type="text" name="person"></p>
		<p><label>Datum:</label>
		<select name="day" >
			<?php 
				for($i=1; $i<=31; $i++)
			{ ?>
			    <option value="<?=$i?>"><?=$i?></option><?php
			}
			?> 
		</select>
		<select name="month">
			<?php foreach ($months as $month){?> 
				<option value="<?php echo $month['m_id']?>"><?php echo $month['month']; ?>
				</option>
			 	<?php
			 		}
			 	?>
		</select>
		<select name="year">
		<?php 
				for($i=2016; $i>=1900; $i=$i-1)
			{ ?>
			    <option value="<?=$i?>"><?=$i?></option><br><?php
			}
			?>
		</select><br>
		<input type="submit" name="confirmed" value="save">
		<input type="submit" name="canceled" value="cancel">
	</form>
</body>
 </html>