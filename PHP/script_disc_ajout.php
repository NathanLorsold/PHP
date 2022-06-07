<?php 

    include "DB2/db2.php";
    $db2 = ConnexionBase();
    // Outil servant à écrire un message d'erreur sur chaque page ou est initialisé l'outil.
    session_start();


            $titre = (isset($_POST["titre"]) && $_POST["titre"] != "") ? $_POST["titre"] : Null;
            $select = (isset($_POST["select"]) && $_POST["select"] != "") ? $_POST["select"] : Null;
            $annee = (isset($_POST["annee"]) && $_POST["annee"] != "") ? $_POST["annee"] : Null;
            $genre = (isset($_POST["genre"]) && $_POST["genre"] != "") ? $_POST["genre"] : Null;
            $label = (isset($_POST["label"]) && $_POST["label"] != "") ? $_POST["label"] : Null;
            $prix = (isset($_POST["prix"]) && $_POST["prix"] != "") ? $_POST["prix"] : Null;
            $picture = $_FILES["photo"]["name"];


            $dossier = "images/";
            $sizeMax = 1000000;
            $fileName = basename($_FILES["photo"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            $fileSize = $_FILES["photo"]["size"];
            $fileEmp = $_FILES["photo"]["tmp_name"]; // Emplacement du fichier de maniere temporaire sur le serveur
            $fileError = $_FILES["photo"]["error"];
            if (isset($_FILES['photo'])) {
                if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "PNG") {
                    $_SESSION['message'] = 'Type fichier incorrect';
                    header("location: disc_new.php");
                } else if ($fileSize > $sizeMax) {
                    $_SESSION['message'] = 'taille fichier trop volumineux';
                    header("location: disc_new.php");
                } else {
                    move_uploaded_file($fileEmp, $dossier . $fileName);
                    echo "Upload reussi";



                $requete = "INSERT INTO disc (disc_title, artist_id, disc_year, disc_label, disc_genre, disc_price, disc_picture) VALUES 
                ('$titre', '$select', '$annee', '$genre', '$label', '$prix', '$picture')";

                $stmt = $db2->prepare($requete);
                $stmt->execute([$titre, $select, $annee, $genre, $label, $prix, $picture]);

                header("location: discs.php");
                }
            }
?>