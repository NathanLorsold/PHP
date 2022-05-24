<?php
    // Récupération des valeurs :
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $titre = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $artiste = (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : Null;
    $annee = (isset($_POST['annee']) && $_POST['annee'] != "") ? $_POST['annee'] : Null;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
    $label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
    $prix = (isset($_POST['prix']) && $_POST['prix'] != "") ? $_POST['prix'] : Null;


    // En cas d'erreur, on renvoie vers le formulaire
    if ($id == Null) {
        header("Location: discs.php");
    }
    elseif ($nom == Null || $url == Null) {
        header("Location: disc_detail.php?id=".$id);
    }

    // Si la vérification des données est ok :
    include "DB2/db2.php"; 
    $db2 = connexionBase();

    try {
        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db2->prepare("UPDATE disc SET disc_id = , disc_title, disc_year, disc_picture,disc_label,disc_genre, disc_price WHERE disc_id = :id;");
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
        $requete->bindValue(":url", $url, PDO::PARAM_STR);

        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_artist_modif.php)");
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: artist_detail.php?id=" . $id);
    exit;
?>