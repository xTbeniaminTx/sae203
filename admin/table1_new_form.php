<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p>ajouter ici un album</p>
<hr>
<form method="POST" action="table1_new_valide.php" enctype="multipart/form-data">
    nom: <input type="text" name="nom"><br>
    age: <input type="number" name="age"><br>
    poids: <input type="text" name="poids"><br>
    race: <input type="text" name="race"><br>
    
    <!-- Radio buttons for genre -->
    genre:<br>
    <label>
        <input type="radio" name="genre" value="1" checked> Male
    </label><br>
    <label>
        <input type="radio" name="genre" value="0"> Female
    </label><br>
    
    Photo: <input type="file" name="photo" required /><br />
    
    propriétaire:
    <select name="proprio">
        <?php
            $mabd = new PDO('mysql:host=db;dbname=sae203Base;charset=UTF8;', 'sae203User', 'MonSuperMotDePasse1');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT proprio_nom, proprio_prenom, proprio_id FROM proprietaires";
            $resultat = $mabd->query($req);
            foreach ($resultat as $value) {
                echo '<option value="' . $value["proprio_id"] . '">' . $value["proprio_nom"] . ' ' . $value["proprio_prenom"] . '</option>';
            }
        ?>
    </select>
    <br>
    <input type="submit" name="Sauvegarde" value="Sauvegarde">
</form>
</body>
</html>