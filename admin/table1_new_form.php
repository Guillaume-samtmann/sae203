<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ajouter expédition</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<a class="boutonretour" href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p class="textintroadmin">ajouter ici un album</p>
<hr>
<form class="formulaireajout" action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
    <span>nom d'expédition:</span><input type="text" name="nomexpe"><br>
    <span>Lieu:</span><input type="text" name="lieuexpe"><br>
    <span>Membre:</span><input type="text" name="membreexpe"><br>
    <span>Photo : </span><input type="file" name="photo" required /><br />
    <span>date:</span><input type="datetime-local" name="date"><br>
    <span>durée:</span> <input type="text" name="duree"><br>
    <span>l'aventurier:</span>
    <select name="numaven">
    <?php
		$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
        $mabd->query('SET NAMES utf8;');
		$req = "SELECT * FROM  aventurier ";
		$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<option value="'.$value['id_aven'].'"> '.$value['nom_aven'].'</option>';
}
?>
    </select>
    
    <br>
    <br>
    <input type="submit" name="">
</form>

</tbody>
</table>
</body>
</html>