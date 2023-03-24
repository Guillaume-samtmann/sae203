<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>validé</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body  class="bodyadmin">
<a class="boutonretour" href="table2_gestion.php">retour au tableau de bord</a> 	<br>
<br>
<p class="textintroadmin">vous venez de modifier un album</p>

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