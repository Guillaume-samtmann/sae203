<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Listing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>  
<?php
require 'header.php';
?>
<main>
<section class="haut-de-page">
    <h1>Album d'expéditions</h1>     
</section>
<section class="bas-de-page">
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM expedition INNER JOIN aventurier ON expedition.id_aven = aventurier.id_aven";
$resultat = $mabd->query($req);
foreach ($resultat as $value) {
    echo '<ul id="autowidth" class="cs-hidden">' ;
    echo '<li class="item-a">';
    echo '<div class="carte-expe">';
    echo '<p class="titre-expe"> nom de l\'expéditions : ' .$value['nom_expe'] . '</p>';
    echo '<p> <img class="model" src="images/uploads/' . $value['img_expe'] . '"> </p>';
    echo '<div class="detail">';                  
    echo '<p> durée de l\'expéditions : ' . $value['dure_expe'] . ' en jours</p>';
    echo '<p> Membre de l\'expéditions : ' . $value['membre_expe'] . '</p>';
    echo '<p> Lieu de l\'expéditions : ' . $value['lieu_expe'] . '</p>';
    echo '<p> Nom aventurier : ' . $value['nom_aven'] . '</p>';
    echo '<p> Prenom aventurier : ' . $value['prenom_ave'] . '</p>';
    echo '<p> Age aventurier : ' . $value['age_ave'] . '</p>';
    echo'</div>';
    echo'</div>';
    echo'</li>';
    echo '</ul><hr>';
}
?>
</section>
</main>
<?php
require 'footer.php';
?>  
</body>
</html>
