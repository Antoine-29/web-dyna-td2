<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Exercice n°2</title>
</head>
<body>
	<a href="?message=Rouge&size=15&couleur=red">Rouge en 15</a><br>
	<a href="?message=Vert&size=30&couleur=green">Vert en 30</a><br>
	<a href="?message=Bleu&size=50&couleur=blue">Bleu en 50</a><br>
	<hr>
	<?php
	$size = $_GET['size'] ?? 10;
	$color = $_GET['couleur'] ?? 'black';
	$message = $_GET['message'] ?? 'Pas de message';
	$update = $_GET['update'] ?? null;

	if ($update == "+") {
		$size = $size + 2;
	} elseif ($update == "-") {
		$size = $size - 2;
	}

	echo "<div style='font-size: {$size}px; color: {$color} ;'>Message de taille {$size}px en {$message}</div>";

	?>
	<hr>
	<form method="GET">
		<label for="message">Message : </label>
		<input type="text" value="<?=$message?>" name="message" id="message">
		<label for="size">Size : </label>
		<input type="number" value="<?=$size?>" name="size" id="size">
		<label for="couleur">Couleur : </label>
		<input type="color" value="<?=$color?>" name="couleur" id="couleur">
		<hr>
		<input type="submit" value="Valider">
		<input type="submit" name="update" value="+">
		<input type="submit" name="update" value="-">
	</form>

</body>
</html>
