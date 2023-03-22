<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<h2>vous venez d'ajouter un article</h2>
<hr>
<?php
$nomaven=$_POST['nomaven'];
$prenomaven=$_POST ['prenomaven'];
$age=$_POST['age'];


$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');

$req = 'INSERT INTO aventurier(nom_aven , prenom_ave , age_ave ) 
VALUES( "'.$nomaven.'", "'.$prenomaven.'", "'.$age.'")';
echo $req;
$resultat = $mabd->query($req);

?>
</tbody>
</table>
</body>
</html>