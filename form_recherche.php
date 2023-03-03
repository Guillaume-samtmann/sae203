
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<?php
require 'header.php';
?>

<main>

<section class="haut-de-page-form">
        <h1>Recherche un aventurier</h1>
</section>

<section class="fond-form">
<form method="post" action="reponse_recherche.php">
    
    <label for="aventurier">Aventuriers : </label>
    <input id="barre-recherche" type="text" name="aventurier" id="aventurier"><br />

    <input id="button" type="submit" value="Afficher les expéditions réaliser par l'aventurier">

</form>
</section>

</main>
<?php
require 'footer.php';
?>
</body>
</html>
