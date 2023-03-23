<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Recherchet</title>
</head>
<body>
<?php
require 'header.php';
?>
<main>
<section class="haut-de-page">
    <h1>Recherche un aventurier</h1>
</section>
<section class="fond-form">
<form method="post" action="reponse_recherche.php">
    <label for="texte">Aventuriers : </label>
    <input id="barre-recherche" type="text" name="texte" id="texte"><br />
    <select name="aven" id="aven-select">
    <option value="">--Aventurier disponible--</option>
    <option value="mike">Mike Horn</option>
    <option value="sarah">Sarah Marquis</option>
    <option value="marco">Marco Polo</option>
    <option value="remis">Rémis Camus</option>
    <option value="nicolas">Nicolas Vanier</option>
    <option value="ella">Ella Maillart</option>
    <option value="alastair">Alastair Humphreys</option>
    <option value="borge">Borge Ousland</option>
    <option value="jean">Jean Troillet</option>
    <option value="erhard">Erhard Loretan</option>
    </select>
    <input id="button" type="submit" value="Afficher les expéditions réaliser par l'aventurier">
</form>
</section>
</main>
<?php
require 'footer.php';
?>
</body>
</html>
