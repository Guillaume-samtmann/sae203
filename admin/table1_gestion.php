<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<a class="boutonretour" href="admin.php">retour</a> 
	<hr>
<h1>gestion de nos expéditions</h1>
<p class="textintroadmin">pensez a crée un aventurier avant de vouloir crée une expéditions</p>
<hr>
<a class="boutonretour" href="table1_new_form.php">ajouter une expéditions</a>
<table border=1>
	<thead>
		<tr><td>photo</td><td>nom</td><td>date</td><td>durée</td><td>membre</td><td>lieu</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM expedition";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td> <img class="model" src="../images/uploads/'.$value['img_expe'] . '" alt="image explorateur"></td>';
    echo '<td>'.$value['nom_expe'] . '</td>';
    echo '<td>' . $value['date_expe'] . '</td>';
    echo '<td>' . $value['dure_expe'] . '</td>';
    echo '<td>' . $value['membre_expe'] . '</td>';
    echo '<td>' . $value['lieu_expe'] . '</td>';
    echo '<td> <a href="table1_delete.php?num='.$value['id_expe'].'" > supprimer </a> </td>';
    echo '<td> <a href="table1_update_form.php?num='.$value['id_expe'].'" > modifier </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>