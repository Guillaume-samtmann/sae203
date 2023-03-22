<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	<br>
<br>
<p>vous venez de modifier un album</p>

...
<?php
$num=$_POST['num'];
$nomexpe=$_POST['nomexpe'];
$lieuexpe=$_POST['lieuexpe'];
$date=$_POST['date'];
$duree=$_POST['duree'];
$numaven=$_POST['numaven'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');

$imageName=$_FILES["photo"]["name"];
if($imageName!=""){


			//vérification du format de l'image téléchargée
			$imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
    		//creation d'un nouveau nom pour cette image téléchargée
            // pour éviter d'avoir 2 fichiers avec le même nom
	        $nouvelleImage =date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	

    		// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	            "../images/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();}

$req ='UPDATE expedition SET nom_expe="'.$nomexpe.'", lieu_expe="'.$lieuexpe.'", . img_expe="'.$nouvelleImage.'", date_expe="'.$date.'", dure_expe="'.$duree.'", id_aven="'.$numaven.'" WHERE id_expe='.$num ;
}
else{
	$req ='UPDATE expedition SET nom_expe="'.$nomexpe.'", lieu_expe="'.$lieuexpe.'" , date_expe="'.$date.'", dure_expe="'.$duree.'", id_aven="'.$numaven.'" WHERE id_expe='.$num ;
}



echo $req;

// Décommenter une fois la simulation fait
$resultat = $mabd->query($req);

?>

</body>
</html>