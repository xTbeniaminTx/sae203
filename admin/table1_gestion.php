<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../index.php">retour au site</a> 
<a href="admin.php">Retour</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p>pensez a proteger le dossier admin avec un htaccess :-)</p>
<hr>
<a href="table1_new_form.php">ajouter un album</a>
<table border=1>
	<thead>
		<tr><td>nom</td><td>age</td><td>poids</td><td>race</td><td>date</td><td>photo</td><td>proprio id</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=db;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM chats";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['chat_nom'] . '</td>';
    echo '<td>' . $value['chat_age'] . '</td>';
    echo '<td>' . $value['chat_poids'] . '</td>';
    echo '<td>' . $value['chat_race'] . '</td>';
    echo '<td>' . $value['chat_date'] . '</td>';
    echo '<td><img src="images/uploads/' . $value['chat_photo'] . '" width="150px"><br>' . $value['chat_photo'] . '</td>';
    echo '<td>' . $value['_proprio_id'] . '</td>';
    echo '<td> <a href="table1_delete.php?num=' . $value['chat_id'] . '" > supprimer </a></td>';
    echo '<td> <a href="table1_update_form.php?num=' . $value['chat_id'] . '"> modifier </a></td>';

    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>