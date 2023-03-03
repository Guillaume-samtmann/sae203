
<?php
    if ( (empty($_POST['aventurier'])) ) {
        header('Location: form_recherche.php');
    }
    $aventurier = $_POST['aventurier'];
    $aventurier_nettoye =  filter_var( $aventurier , FILTER_SANITIZE_SPECIAL_CHARS);
?>
    
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
<section class="haut-de-page-expe">
        <h1>Album d'épéditions</h1>
        <?php
     echo '<p>Votre aventurier est '.$aventurier_nettoye.'</p>'."\n";
 ?>
        
</section>
<section class="bas-de-page">
        <ul id="autowidth" class="cs-hidden">
            <li class="item-a">
                <div class="carte-expe">
                <img src="../images/atitudezero.jpg" class="model" alt="">
                    <p class="titre-expe">L'Atitude 0</p>
                    <p class="detail">Date <br> durée <br> membre <br> lieu </p>
                </div>
            </li>
            <li class="item-a">
                <div class="carte-expe">
                <img src="../images/siberieaustrali-v1.jpg" class="model" alt="">
                    <p class="titre-expe">De la Sibérie à l'Australie</p>
                    <p class="detail">Date <br> durée <br> membre <br> lieu </p>
                </div>
            </li>
            <li class="item-a">
                <div class="carte-expe">
                <img src="../images/travcaucase-v1.jpg" class="model" alt="">
                    <p class="titre-expe">Traversée du Caucase</p>
                    <p class="detail">Date <br> durée <br> membre <br> lieu </p>
                </div>
            </li>
            <li class="item-a">
                <div class="carte-expe">
                <img src="../images/marcopolo-v1.jpg" class="model" alt="">
                    <p class="titre-expe">Voyage en Chine</p>
                    <p class="detail">Date <br> durée <br> membre <br> lieu </p>
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
