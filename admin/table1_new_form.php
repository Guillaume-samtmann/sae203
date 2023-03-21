<!DOCTYPE html>
<html>
<head>
	<title>ajouter albums</title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p>ajouter ici un album</p>
<hr>
<form action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
    nom d'expédition:<input type="text" name="nomexpe"><br>
    Photo : <input type="file" name="photo" required /><br />
    date:<input type="datetime-local" name="date"><br>
    durée:<input type="text" name="duree"><br>
    l'aventurier:
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
    taper pour l'instant un numero d'auteur (1,2,3...) pas son nom :-)<br>
    <input type="submit" name="">
</form>

</tbody>
</table>
</body>
</html>