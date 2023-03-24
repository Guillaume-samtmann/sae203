<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>modif_aventurier</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body  class="bodyadmin">

<a class="boutonretour" href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p class="textintroadmin">modification d'un album</p>

<?php
$id_aven=$_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM  aventurier WHERE id_aven=".$id_aven;
$resultat = $mabd->query($req);
$album = $resultat->fetch();
echo $album['nom_aven'];
echo $album['prenom_ave'];
?>

<hr>
<form class="formulaireajout" action="table2_update_valide.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="num"  value="<?php echo $album['id_aven']; ?>">
    <span>Nom:</span><input type="text" name="nomaven" value="<?php echo $album['nom_aven']?>" ><br>
    <span>Prenom:</span><input type="text" name="prenomaven" value="<?php echo $album['prenom_ave']?>"><br>
    <span>age:</span><input type="text" name="age" value="<?php echo $album['age_ave']?>"><br>

    <br>   
    <input type="submit" name="">
</form>

</body>
</html>