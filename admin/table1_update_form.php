<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p>modification d'un album</p>

<?php
$id_expe=$_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM  expedition WHERE id_expe=".$id_expe;
$resultat = $mabd->query($req);
$album = $resultat->fetch();
echo $album['nom_expe'];
echo $album['date_expe'];
?>

<hr>
<form action="table1_update_valide.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="num"  value="<?php echo $album['id_expe']; ?>">
    Nom:<input type="text" name="nomexpe" value="<?php echo $album['nom_expe']?>" ><br>
    Lieu:<input type="text" name="lieuexpe" value="<?php echo $album['lieu_expe']?>" ><br>
    photo:<input type="file" name="photo" value="<?php echo $album['img_expe']?>" ><br>
    Date:<input type="datetime-local" name="date" value="<?php echo $album['date_expe']?>"><br>
    Durée:<input type="text" name="duree" value="<?php echo $album['dure_expe']?>"><br>
    aventurier:
    <select name="numaven">
    	<?php
		$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Gui1598G$');
        $mabd->query('SET NAMES utf8;');
		$req = "SELECT * FROM  aventurier ";
		$resultat = $mabd->query($req);

    foreach ($resultat as $value) {
        $selection="";
    if($album['id_aven'] == $value['nom_aven']) $selection="selected";          
    echo '<option '.$selection . ' value="' .  $value['id_aven'] . '"> ' .  $value['nom_aven'] . '</option>';
            
}
?>

    	
    </select>
    <br>   
    <input type="submit" name="">
</form>

</body>
</html>