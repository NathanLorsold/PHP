<?php

    include "DB2/db2.php"; 
    $db2 = connexionBase();

    // Récupération des valeurs :
    $id = (isset($_GET['id']) && $_GET['id'] != "") ? $_GET['id'] : Null;
    $titre = (isset($_POST['titre']) && $_POST['titre'] != "") ? $_POST['titre'] : Null;
    $artiste = (isset($_POST['artiste']) && $_POST['artiste'] != "") ? $_POST['artiste'] : Null;
    $annee = (isset($_POST['annee']) && $_POST['annee'] != "") ? $_POST['annee'] : Null;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
    $label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
    $prix = (isset($_POST['prix']) && $_POST['prix'] != "") ? $_POST['prix'] : Null;
    // $picture = $_FILES["photo"]["name"];

    // Si la vérification des données est ok :

        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db2->prepare("UPDATE disc SET disc_title = '$titre' , disc_year = '$annee' , disc_label = '$label', disc_genre = '$genre' , disc_price = '$prix' WHERE disc_id = '$id'");      
        // $requete->bindValue("$id", $_POST['id'], PDO::PARAM_INT);
        // $requete->bindValue("$titre", $_POST['titre'], PDO::PARAM_STR);
        // $requete->bindValue("$annee", $_POST['annee'], PDO::PARAM_STR);
        // $requete->bindValue("$photo", $_POST['photo'], PDO::PARAM_STR);
        // $requete->bindValue("$label", $_POST['label'], PDO::PARAM_STR);
        // $requete->bindValue("$genre", $_POST['genre'], PDO::PARAM_STR);
        // $requete->bindValue("$prix", $_POST['prix'], PDO::PARAM_STR);

        $requete->execute();

        $requete->closeCursor();
        
    header("Location: disc_detail.php?id=" . $id);
    exit;
?>