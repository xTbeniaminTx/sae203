<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="index.php">Accueil</a> | <a href="catalogue.php"> catalogue </a> | <a href="admin/table1_gestion.php">admin</a>	
	<hr>
<h1>nos albums</h1>
<hr>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM chats INNER JOIN proprietaires ON chats._proprio_id = proprietaires.proprio_id";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<div>' ;
    echo '<h3>'.$value['chat_nom'] . '</h3>';
    echo '<p>Age: '.$value['chat_age']. ' ans </p>';
    echo '<p>Race: ' . $value['chat_race'] . ' </p>';
    echo '<p>' . $value['chat_poids'] . ' kg </p>';
    echo '<p>Genre: ' . $value['chat_genre'] . ' </p>';
    echo '<p>Date de naissance: ' . $value['chat_date'] . ' </p>';
    echo '<p> Propriétaire: ' . $value['proprio_nom'] . '</p>';
    echo '<img src="images/uploads/' .$value['chat_photo'].'" width="150px">';
    echo '</div><hr>';
}
?>

</body>
</html>