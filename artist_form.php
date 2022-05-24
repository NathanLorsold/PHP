<?php
    require "DB/db.php";
    $db = connexionBase();
    $id = $_GET["id"];
    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
    $requete->execute(array($id));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Update</title>
</head>
<body>

        <h1>Artiste n°<?=$myArtist->artist_id ?></h1>

        <a href="artists.php">Retour à la liste des artistes</a>

        <br>
        <br>

    <form action ="script_artist_modif.php" method="post">

            <input type="hidden" name="id" value="<?= $myArtist->artist_id ?>">

            <label for="nom_for_label">Nom de l'artiste :</label><br>
            <input type="text" name="nom" id="nom_for_label" value="<?= $myArtist->artist_name ?>">
            <br><br>

            <label for="url_for_label">Adresse site internet :</label><br>
            <input type="text" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>">
            <br><br>

            <input type="reset" value="Annuler">
            <input type="submit" value="Modifier">

    </form>

    

</body>
</html>