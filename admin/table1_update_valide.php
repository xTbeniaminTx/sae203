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

	$nom=$_POST['nom'];
	$age=$_POST['age'];
	$poids=$_POST['poids'];
	$race=$_POST['race'];
	$date=$_POST['date'];
	$genre=$_POST['genre'];
	$proprio=$_POST['proprio'];
	$num=$_POST['num'];

	$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
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
				$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
		
	
				// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
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
	
	
				$req = "UPDATE chats
				SET chat_nom = '".$nom."', chat_age = '".$age."', chat_race = '".$race."', chat_genre = '".$genre."', chat_date = '".$date."', chat_photo = '".$photo."', chat_poids = '".$poids."' , _proprio_id = '".$proprio."'
			    WHERE proprio_id='".$num."';"
			}
		else{
			$req = "UPDATE chats
			SET chat_nom = '".$nom."', chat_age = '".$age."', chat_race = '".$race."', chat_genre = '".$genre."', chat_date = '".$date."', chat_poids = '".$poids."' , _proprio_id = '".$proprio."'
			WHERE proprio_id='".$num"';"
			}

			echo 'juste pour le debug'.$req;
			$resultat =$mabd ->query($req);
?>

</tbody>
</table>
</body> 

</html>