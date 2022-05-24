<?php
    // Contrôle de l'ID (si inexistant ou <= 0, retour à la liste) :
    if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0);  

    // Si la vérification est ok :
    include "DB2/db2.php"; 
    $db2 = connexionBase();

    try {
        // Construction de la requête DELETE sans injection SQL :
        $requete = $db2->prepare("DELETE FROM disc WHERE disc_id = ?");
        $requete->execute(array($_GET["id"]));
        $requete->execute();
        $requete->closeCursor();
    }
    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_disc_delete.php)");
    }

    // Si OK: redirection vers la page artists.php
    header("Location: discs.php");

        // Fermeture du script
        exit;

?>