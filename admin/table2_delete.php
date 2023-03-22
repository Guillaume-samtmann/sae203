<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
<hr> <h1>gestion de nos albums</h1> <hr>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$id_aven=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE FROM  aventurier WHERE id_aven='.$id_aven; 

// cette ligne sert juste pour le debug. à supprimer quand tout marche correctement  
echo $req;
 
$resultat = $mabd->query($req);

echo '<h2>vous venez de supprimer l\'album numéro : '.$id_aven.'</h2>';
?>

</body>
</html>