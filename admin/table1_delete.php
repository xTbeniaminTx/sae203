<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
<hr> <h1>gestion des chats</h1> <hr>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$num=$_GET['num'];

$mabd = new PDO('mysql:host=db;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
$mabd->query('SET NAMES utf8;');

$req = 'DELETE from chats WHERE chat_id='.$num; 

echo $req;
 
$resultat = $mabd->query($req);

echo '<h2>vous venez de supprimer l\'album numéro '.$num.'</h2>';
?>

</body>
</html>