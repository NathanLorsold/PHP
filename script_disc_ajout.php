<?php 

// if (isset($_POST['boutton'])) {
//     echo "Vous avez bien cliqué sur le bouton";
// }else 
// echo "Ta fait de la d mon reuf";

            // Récupération des données extraits via $_POST :
            // extract($_POST);
            $titre = (isset($_POST["titre"]) && $_POST["titre"] != "") ? $_POST["titre"] : Null;
            $select = (isset($_POST["select"]) && $_POST["select"] != "") ? $_POST["select"] : Null;
            $annee = (isset($_POST["annee"]) && $_POST["annee"] != "") ? $_POST["annee"] : Null;
            $genre = (isset($_POST["genre"]) && $_POST["genre"] != "") ? $_POST["genre"] : Null;
            $label = (isset($_POST["label"]) && $_POST["label"] != "") ? $_POST["label"] : Null;
            $prix = (isset($_POST["prix"]) && $_POST["prix"] != "") ? $_POST["prix"] : Null;
            $photo = (isset($_POST["photo"]) && $_POST["photo"] != "") ? $_POST["photo"] : Null;

                // $titre = isset ($_POST["titre"]);
                // $select = isset ($_POST["select"]);
                // $annee =isset($_POST["annee"]);
                // $genre =isset($_POST["genre"]);
                // $label =isset($_POST["label"]);
                // $prix =isset($_POST["prix"]);
                // $photo =isset($_POST["photo"]);

            // ceci était un test foiré je crois mdrrr

            // Récupération de l'Artiste (même traitement, avec une syntaxe abrégée)
            // $Artiste = (isset($_POST['url']) && $_POST['url'] != "") ? $_POST['url'] : Null;
            // var_dump($nom);
            // var_dump($url);
            // En cas d'erreur, on renvoie vers le formulaire

            if ($titre == Null || $prix == Null) {
                header("Location: disc_new.php");
            }

            // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
            include "DB2/db2.php";
            $db2 = connexionBase();
            // var_dump($db2);

            try {
                // Construction de la requête INSERT sans injection SQL :
                $requete = $db2->prepare("INSERT INTO disc (disc_title, artist_id,disc_year, disc_label, disc_genre, disc_price, disc_picture) VALUES (:titre, :select, :annee, :genre, :label, :prix, :photo);");
        
                 var_dump($requete);
                 //die;
                // die;s
                // Association des valeurs aux paramètres via bindValue() :

                 $requete->bindValue(":titre", $titre, PDO::PARAM_STR);
                 $requete->bindValue(":select", $select, PDO::PARAM_INT);
                 $requete->bindValue(":annee", $annee, PDO::PARAM_STR);
                 $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
                 $requete->bindValue(":label", $label, PDO::PARAM_STR);
                 $requete->bindValue(":prix", $prix, PDO::PARAM_STR);
                 $requete->bindValue(":photo", $photo, PDO::PARAM_STR);

            
                // Lancement de la requête :
                $requete->execute();
            
                // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
                $requete->closeCursor();
            }
            
            // Gestion des erreurs
            catch (Exception $e) {
                var_dump($requete->queryString);
                var_dump($requete->errorInfo());
                echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
                die("Fin du script (script_disc_ajout.php)");
            }
            
            // Si OK: redirection vers la page artists.php
            header("Location: discs.php");
            
            // Fermeture du script
            exit;
?>