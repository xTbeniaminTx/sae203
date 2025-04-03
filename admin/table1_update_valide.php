<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
	<h1>gestion de nos albums</h1>
	<h2>vous venez de modifier un album</h2>
	<hr>

	<?php
	// Initialize $photo to avoid undefined variable warnings.
	$photo = '';

	// Retrieve form values.
	$nom     = $_POST['nom'];
	$age     = $_POST['age'];
	$poids   = $_POST['poids'];
	$race    = $_POST['race'];
	$date    = $_POST['date'];
	$genre   = $_POST['genre'];
	$proprio = $_POST['proprio'];
	$num     = $_POST['num'];

	// Prepare chat_date for SQL.
	if(empty($date)) {
	    $date_sql = "NULL"; // Use NULL (without quotes) when date is empty.
	} else {
	    $date_sql = "'" . $date . "'";
	}

	// Connect to the database.
	$mabd = new PDO('mysql:host=db;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
	$mabd->query('SET NAMES utf8;');

	// Check if an image has been uploaded.
	$imageName = $_FILES["photo"]["name"];
	if($imageName != ""){
	    // Verify the image format.
	    $imageType = $_FILES["photo"]["type"];
	    if ( ($imageType != "image/png") &&
	         ($imageType != "image/jpg") &&
	         ($imageType != "image/jpeg") ) {
	        echo '<p>Désolé, le type d\'image n\'est pas reconnu ! Seuls les formats PNG et JPEG sont autorisés.</p>' . "\n";
	        die();
	    }

	    // Create a unique name for the uploaded image.
	    $nouvelleImage = date("Y_m_d_H_i_s") . "---" . $imageName;

	    // Move the uploaded file to the target directory.
	    if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	        if(!move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/uploads/" . $nouvelleImage)) {
	            echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>' . "\n";
	            die();
	        }
	    } else {
	        echo '<p>Problème : image non chargée...</p>' . "\n";
	        die();
	    }
	    
	    // Update $photo with the new image name.
	    $photo = $nouvelleImage;
	    
	    // Build the UPDATE query with the new photo.
	    $req = "UPDATE chats
	            SET chat_nom = '".$nom."',
	                chat_age = '".$age."',
	                chat_race = '".$race."',
	                chat_genre = '".$genre."',
	                chat_date = ".$date_sql.",
	                chat_photo = '".$photo."',
	                chat_poids = '".$poids."',
	                _proprio_id = '".$proprio."'
	            WHERE chat_id = '".$num."';";
	} else {
	    // Build the UPDATE query without updating the photo.
	    $req = "UPDATE chats
	            SET chat_nom = '".$nom."',
	                chat_age = '".$age."',
	                chat_race = '".$race."',
	                chat_genre = '".$genre."',
	                chat_date = ".$date_sql.",
	                chat_poids = '".$poids."',
	                _proprio_id = '".$proprio."'
	            WHERE chat_id = '".$num."';";
	}

	// Debug: display the generated query.
	echo 'juste pour le debug: ' . $req;
	
	// Execute the query.
	$resultat = $mabd->query($req);
	?>
</body>
</html>