<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <title>Accueil</title>
</head>
<body>
<?php
    require 'header.php';
?>
<main>
<section class="haut-de-page">
    <h1>"Si vous pensez que l'aventure est dangereuse, essayez la routine... Elle est mortelle."</h1>
    <p>Paulo Coelho</p>
</section>
<section class="bas-de-page">
    <h2>Mes aventuriers favoris :</h2>
<ul id="autowidth" class="cs-hidden">
    <li class="item-a">
    <div class="carte">
    <p class="nom-aventurier">Mike Horn</p>
    <img src="../images/mike-horn.jpg" class="model" alt="img-mike-horn">
    </div>
    </li>
    <li class="item-a">
    <div class="carte">
    <p class="nom-aventurier">Sarah Marquis</p>
    <img src="../images/sarah.jpg" class="model" alt="img_sarah">
    </div>
    </li>
    <li class="item-a">
    <div class="carte">
    <p class="nom-aventurier">Ella Maillard</p>
    <img src="../images/ella.jpg" class="model" alt="img-ella">
    </div>
    </li>
    <li class="item-a">
    <div class="carte">
    <p class="nom-aventurier">Marco Polo</p>
    <img src="../images/marco-polo.jpg" class="model" alt="img-marco">
    </div>
    </li>
</ul>
<h2>Destinations phares :</h2>
<ul id="autowidth" class="cs-hidden">
    <li class="item-a">
    <div class="carte">
    <p class="nom-lieu">L'Artique</p>
    <img src="../images/artique.jpg" class="model" alt="img-artique">
    </div>
    </li>
    <li class="item-a">
    <div class="carte">
    <p class="nom-lieu">L'Australie</p>
    <img src="../images/australie.jpg" class="model" alt="img-artique">
    </div>
    </li>
    <li class="item-a">
    <div class="carte">
    <p class="nom-lieu">Region du caucase</p>
    <img src="../images/regioncaucasse.jpg" class="model" alt="img-caucasse">
    </div>
    </li>
    <li class="item-a">
    <div class="carte">
    <p class="nom-lieu">Chine</p>
    <img src="../images/chine.jpg" class="model" alt="img-chine">
    </div>
    </li>
</ul>
</section>
</main>
<?php
    require 'footer.php';
?> 
</body>
</html>
