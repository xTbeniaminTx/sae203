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
<hr>
<?php
    $num = $_GET['num'];
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
    $mabd->query('SET NAMES utf8;');
    $req = "SELECT * FROM  chats WHERE chat_id=".$num;
    $resultat = $mabd->query($req);
    $album = $resultat->fetch();
    echo $album['chat_nom'];
    echo $album['chat_age'];
?>

<hr>

<form action="table1_update_valide.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="num" value="<?php echo $album['chat_id'] ?>"><br>
    nom:<input type="text" name="nom" value="<?php echo $album['chat_nom'] ?>"><br>
    age:<input type="number" name="age" value="<?php echo $album['chat_age'] ?>"><br>
    race:<input type="text" name="race" value="<?php echo $album['chat_race'] ?>"><br>
    date:<input type="date" name="date" value="<?php echo $album['chat_date'] ?>"><br>
    genre:<input type="number" name="genre" value="<?php echo $album['chat_genre'] ?>"><br>
    poids:<input type="text" name="poids" value="<?php echo $album['chat_poids'] ?>"><br>
    photo : <input type="file" name="photo">
    propriétaire:
        <select name="proprio">
                <?php
                $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT proprio_nom, proprio_prenom, proprio_id FROM proprietaires ";
                $resultat = $mabd->query($req);

        foreach ($resultat as $value) {
            $selection="";
            if($album['_proprio_id'] == $value['proprio_id']) $selection="selected";          
            echo '<option '.$selection . ' value="' .  $value['proprio_id'] . '"> ' .  $value['proprio_nom'] . '</option>';
        }
        ?>
        </select>
    <input type="submit" name="">
</form>

</body>
</html>