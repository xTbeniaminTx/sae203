<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour à l'accueil</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<h2>vous venez d'ajouter un article</h2>
<hr>
<?php
	$nom=$_POST['nom'];
	$age=$_POST['age'];
	$poids=$_POST['poids'];
	$race=$_POST['race'];
	$genre=$_POST['genre'];
	$proprio=$_POST['proprio'];
	
	$mabd = new PDO('mysql:host=db;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
	$mabd->query('SET NAMES utf8;');
	
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
				$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
		
	
				// dépot du fichier téléchargé dans le dossier /var/www/r214/images/uploads
				if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
					if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
					"../images/uploads/".$nouvelleImage)) {
						echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
						die();
					}
				} else {
					echo '<p>Problème : image non chargée...</p>'."\n";
					die();
				}
				
	$req = 'INSERT INTO chats(chat_nom, chat_age, chat_poids, chat_race, chat_genre,_proprio_id, chat_photo) VALUES("'.$nom.'",'.$age.', '. $poids .', "'. $race .'", '. $genre .', '. $proprio .',"' .$nouvelleImage.'")';
	$resultat = $mabd->query($req);
?>
</tbody>
</table>
</body>
</html>