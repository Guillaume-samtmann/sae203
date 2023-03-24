<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Recherche</title>
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
    <label for="texte">Aventurier : </label>
    <input id="barre-recherche" type="text" name="texte" id="texte"><br />
    <select name="aven" id="aven-select">
    <option value="">--Aventurier disponible--</option>
    <option value="mike">Mike</option>
    <option value="sarah">Sarah</option>
    <option value="marco">Marco</option>
    <option value="remis">Rémis</option>
    <option value="nicolas">Nicolas</option>
    <option value="ella">Ella</option>
    <option value="alastair">Alastair</option>
    <option value="borge">Borge</option>
    <option value="jean">Jean</option>
    <option value="erhard">Erhard</option>
    </select>
    <input id="button" type="submit" value="Afficher les expéditions réalisées par aventurier">
</form>
</section>
</main>
<?php
require 'footer.php';
?>
</body>
</html>
