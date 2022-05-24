<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Le nom de la personne est : ".$_REQUEST['nom']."<br>";
    echo "Le prenom de la personne est : ".$_REQUEST['prenom']."<br>";
    echo "Le sexe de la personne est : ".$_REQUEST['Féminin']."<br>";
    echo "La date de naissance est : ".$_REQUEST['ddn']."<br>";
    echo "Le code postal est :".$_REQUEST['codepostal']."<br>";
    echo "L'Email est : ".$_REQUEST['email'].'<br>';
    echo "Le choix du menu déroulant est : ".$_REQUEST["sujet1"]."<br>";

    ?>

</body>
</html>