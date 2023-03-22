<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	<br>
<br>
<p>vous venez de modifier un album</p>

...
<?php
$num=$_POST['num'];
$nomaven=$_POST['nomaven'];
$prenomaven=$_POST['prenomaven'];
$age=$_POST['age'];


$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');



$req ='UPDATE aventurier SET nom_aven="'.$nomaven.'", prenom_ave="'.$prenomaven.'", age_ave="'.$age.'" WHERE id_aven='.$num ;





echo $req;

// Décommenter une fois la simulation fait
$resultat = $mabd->query($req);

?>

</body>
</html>