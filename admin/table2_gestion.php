<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<a class="boutonretour" href="admin.php">retour</a> 
	<hr>
<h1>gestion de nos albums</h1>
<p class="textintroadmin">crée, modif ou supprime ton aventurier</p>
<hr>
<a class="boutonretour" href="table2_new_form.php">ajouter un album</a>
<table border=1>
	<thead>
		<tr><td>nom</td><td>prenom</td><td>age</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM aventurier";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['nom_aven'] . '</td>';
    echo '<td>' . $value['prenom_ave'] . '</td>';
    echo '<td>' . $value['age_ave'] . '</td>';
    echo '<td> <a href="table2_delete.php?num='.$value['id_aven'].'" > supprimer </a> </td>';
    echo '<td> <a href="table2_update_form.php?num='.$value['id_aven'].'" > modifier </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>