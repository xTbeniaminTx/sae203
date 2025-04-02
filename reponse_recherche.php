<?php
include ('header.php');


if (empty($_GET['race'])) {
    header('Location: form_recherche.php');
    exit();
}


$race = htmlspecialchars($_GET['race'], ENT_QUOTES, 'UTF-8');
?>

<h2>Résultats de la recherche</h2>
<a href="index.php">retour au tableau de bord</a> 

<p>... ici les chats dont la race est <?php echo $race; ?> ...</p>

<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Âge</th>
            <th>Race</th>
            <th>Propriétaire</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Minou</td>
            <td>4 ans</td>
            <td>Siamois</td>
            <td>Eva</td>
        </tr>
        <tr>
            <td>Trésor</td>
            <td>5 ans</td>
            <td>Persan</td>
            <td>Mathilde</td>
        </tr>
        <tr>
            <td>Robert</td>
            <td>21 ans</td>
            <td>Tigré européen</td>
            <td>Jean</td>
        </tr>
    </tbody>
</table>

<a href="form_recherche.php">Nouvelle recherche</a> 
<?php
include ('footer.php');
?>
