<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p>modification d'un album</p>

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
<form action="table2_update_valide.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="num"  value="<?php echo $album['id_aven']; ?>">
    Nom:<input type="text" name="nomaven" value="<?php echo $album['nom_aven']?>" ><br>
    Prenom:<input type="text" name="prenomaven" value="<?php echo $album['prenom_ave']?>"><br>
    age:<input type="text" name="age" value="<?php echo $album['age_ave']?>"><br>

    <br>   
    <input type="submit" name="">
</form>

</body>
</html>