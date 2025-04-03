<!DOCTYPE html>
<html>
<head>
	<title>Nos Albums</title>
</head>
<body>
<a href="index.php">Accueil</a> | <a href="catalogue.php">Catalogue</a> | <a href="admin/table1_gestion.php">Admin</a>	
<hr>
<h1>Nos Albums</h1>
<hr>
<?php
// Connect to the database
$mabd = new PDO('mysql:host=db;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
$mabd->query('SET NAMES utf8;');

// Retrieve chats joined with proprietaires
$req = "SELECT * FROM chats INNER JOIN proprietaires ON chats._proprio_id = proprietaires.proprio_id";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<div>';
    echo '<h3>' . $value['chat_nom'] . '</h3>';
    echo '<p>Age: ' . $value['chat_age'] . ' ans</p>';
    echo '<p>Race: ' . $value['chat_race'] . '</p>';
    echo '<p>' . $value['chat_poids'] . ' kg</p>';
    
    // Convert numeric genre to text ("Male" if 1, "Female" if 0)
    $genreText = ($value['chat_genre'] == 1) ? "Male" : "Female";
    echo '<p>Genre: ' . $genreText . '</p>';
    
    // Format the date in French using IntlDateFormatter if a valid date exists
    $dateValue = $value['chat_date'];
    if (!empty($dateValue)) {
        $dateObj = new DateTime($dateValue);
        $fmt = new IntlDateFormatter(
            'fr_FR', 
            IntlDateFormatter::NONE, 
            IntlDateFormatter::NONE, 
            'Europe/Paris', 
            IntlDateFormatter::GREGORIAN
        );
        $fmt->setPattern('dd MMMM yyyy');  // e.g. "10 février 2012"
        $dateFr = $fmt->format($dateObj);
    } else {
        $dateFr = "Date non définie";
    }
    echo '<p>Date de naissance: ' . $dateFr . '</p>';
    
    echo '<p>Propriétaire: ' . $value['proprio_nom'] . '</p>';
    echo '<img src="images/uploads/' . $value['chat_photo'] . '" width="150px">';
    echo '</div><hr>';
}
?>
</body>
</html>