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
<p>pensez à protéger le dossier admin avec un htaccess :-)</p>
<hr>
<a href="table1_new_form.php">ajouter un album</a>
<table border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>nom</td>
			<td>age</td>
			<td>poids</td>
			<td>race</td>
			<td>date</td>
			<td>photo</td>
			<td>genre</td>
			<td>propriétaire</td>
			<td>supprimer</td>
			<td>modifier</td>
		</tr>
	</thead>
	<tbody>
<?php
// Connexion à la base de données
$mabd = new PDO('mysql:host=db;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
$mabd->query('SET NAMES utf8;');

// Requête avec jointure pour récupérer les informations du propriétaire
$req = "SELECT c.*, p.proprio_id AS owner_id, p.proprio_nom AS owner_nom, p.proprio_prenom AS owner_prenom 
        FROM chats c 
        LEFT JOIN proprietaires p ON c._proprio_id = p.proprio_id";
$resultat = $mabd->query($req);

// Parcours des résultats et affichage dans le tableau
foreach ($resultat as $value) {
    echo '<tr>';
    // First column: Chat ID
    echo '<td>' . $value['chat_id'] . '</td>';
    echo '<td>' . $value['chat_nom'] . '</td>';
    echo '<td>' . $value['chat_age'] . '</td>';
    echo '<td>' . $value['chat_poids'] . '</td>';
    echo '<td>' . $value['chat_race'] . '</td>';
    echo '<td>' . $value['chat_date'] . '</td>';
    echo '<td><img src="../images/uploads/' . $value['chat_photo'] . '" width="150px"><br>' . $value['chat_photo'] . '</td>';
    
    // Colonne pour le genre : affiche "Male" si chat_genre vaut 1, sinon "Female"
    $genreText = ($value['chat_genre'] == 1) ? "Male" : "Female";
    echo '<td>' . $genreText . '</td>';
    
    // Colonne pour afficher l'id et le nom du propriétaire (par exemple "3 - Dupont Jean")
    $ownerDetails = '';
    if (isset($value['owner_id'])) {
        $ownerDetails = $value['owner_id'] . ' - ' . $value['owner_nom'] . ' ' . $value['owner_prenom'];
    }
    echo '<td>' . $ownerDetails . '</td>';
    
    echo '<td><a href="table1_delete.php?num=' . $value['chat_id'] . '">supprimer</a></td>';
    echo '<td><a href="table1_update_form.php?num=' . $value['chat_id'] . '">modifier</a></td>';
    echo '</tr>';
}
?>
	</tbody>
</table>
</body>
</html>