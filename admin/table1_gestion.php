<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="admin.php">retour</a> 
	<hr>
<h1>gestion de nos albums</h1>
<p>pensez a proteger le dossier admin avec un htaccess :-)</p>
<hr>
<a href="table1_new_form.php">ajouter un album</a>
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
    echo '<td>'.$value['img_expe'] . '</td>';
    echo '<td>'.$value['nom_expe'] . '</td>';
    echo '<td>' . $value['date_expe'] . '</td>';
    echo '<td>' . $value['dure_expe'] . '</td>';
    echo '<td>' . $value['membre_expe'] . '</td>';
    echo '<td>' . $value['lieu_expe'] . '</td>';
    echo '<td> <a href="table1_delete.php?num='.$value['id_expe'].'" > supprimer </a> </td>';
    echo '<td> <a href="table1_update_valide?num='.$value['id_expe'].'" > modifier </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>