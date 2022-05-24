<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Fonction</title>
</head>
<body>


<!-- <a href=https://www.reddit.com/>Reddit Hug</a> -->
    <?php

function redit($lien,$titre) {
echo"<a href=$lien>$titre</a>";

}redit("https://www.reddit.com/","Reddit Hug");

        $prenom = "Dave";
        $nom = "Loper";


        function bonjour($prenom,$nom){

            echo"<br>"."Cc ".$prenom .$nom;

        }

        bonjour("Dave","Loper");
// 2.---------------------------------------------------------

        // $tab = array(4, 3, 8, 2);
        // $resultat = array_sum($tab);

        // echo "<br>".($resultat);

// 3.----------------------------------------------------------
$resultat = "Seasy95";

    function complex_password($resultat) {

       global $resultat;

        $min = preg_match("@[a-z]@", $resultat);
        $maj = preg_match("@[A-Z]@", $resultat);
        $chiffre = preg_match("@[0-9]@", $resultat);
    
        if (($min && $maj && $chiffre)<8)
            echo "<br>"."false";
        else
            echo "<br>"."true";

    }

        complex_password("La sécurité de votre mdp est : ".$resultat);


    ?>

</body>
</html>