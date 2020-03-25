



<?php
$size = $_GET['size'] ?? 10;
$color = $_GET['Colonnes'] ?? 'Colonnes';
$message = $_GET['Lignes'] ?? 'Lignes';
$update = $_GET['Créer le tableau'] ?? null;

	?>
<hr>
	<form method="GET">
		<label for="Lignes">Lignes : </label>
		<input type="number" value="<?=$message?>" name="Lignes" id="Lignes">
		<label for="size">Size : </label>
		<input type="number" value="<?=$size?>" name="Colonnes" id="Colonnes">
		<input type="submit" value="Créer le tableau">
	</form>

<?php
$title='Exercice n°4 (Itérations)';
include "include/header.php";

//Récupère les paramètres l et c passés dans l'url
$nbLignes=$_GET["l"]??10;
$nbColonnes=$_GET["c"]??10;
echo "<h2>Tableau de $nbLignes par $nbColonnes</h2>";
?>
<table border='1'>
    <tbody>
        <?php for($i=0;$i<$nbLignes;$i++){
            $gras=($i%2==0)?"bold":"normal";
            ?>
        <tr>
        <?php for($j=0;$j<$nbColonnes;$j++){?>
              <td style="font-weight: <?=$gras ?>"><?="$i - $j"?></td>
        <?php }?>
        </tr>
      <?php }?>
    </tbody>
</table>
<?php
include "include/footer.php";
 ?>
