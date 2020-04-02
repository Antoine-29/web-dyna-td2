<html>
	<head>
		<meta charset="UTF-8">
		<title>fonctions</title>
	</head>
	<body>
<?php
	// Fonction exercice 5
		function createHtmlTables($nbLigne,$nbColones)
	{?>
	<table border='1'>
			<tbody>
				<?php
				for($i=0;$i<$nbLigne;$i++)
				{?>
					<tr>
					<?php for($j=0;$j<$nbColones;$j++)
					{?>
						<td><?="$i - $j"?></td>
					<?php }?>
					</tr>
				<?php }?>
	<?php } ?>


  </body>
</html>
