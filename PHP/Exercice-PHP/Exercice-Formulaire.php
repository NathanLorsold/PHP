<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

<form action="page.php" method="post">
    Votre e-mail : <input type="text" name="email" />
    <input type="hidden" name="secret" value="texte à passer discrètement" />
    <input type="submit" value="OK" />
</form> 


<?php

    echo "Votre societé est : ". $_REQUEST['societe']."<br>";
    echo "La personne a contacté est : ".$_REQUEST['nom']."<br>";
    echo "L'adresse de l'entreprise est :".$_REQUEST['adresseEntreprise']."<br>";
    echo "Le code postal est :".$_REQUEST['codePostal']."<br>";
    echo "La ville est : ".$_REQUEST['ville'].'<br>';
    echo "L'Email est : ".$_REQUEST['mail'].'<br>';
    echo "Le numéro de téléphone est : ".$_REQUEST["phone"]."<br>";
    echo "Le choix du menu déroulant est : ".$_REQUEST["deroulantLanguage"]."<br>";





        ?>
</body>
</html>