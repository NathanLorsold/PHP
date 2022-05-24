<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Tableaux</title>
</head>
<body>
    <?php


        $test = array("Janvier"=>31, "Février"=>28, "Mars"=>31, "Avril"=>30, "Mai"=>31, "Juin"=>30, "Juillet"=>31, "Aout"=>31, "Septembre"=>30, "Octobre"=>31, "Novembre"=>30, "Décembre"=>31); 

        echo '<table border="1" width="400">';

        foreach ($test as $mois => $jour)
        { 
        echo "<tr></tr>";
        echo "Nombre de jour dans le mois de $mois : $jour Jours <br/>"; 
        echo "<td>$mois</td>";
        echo "<td>$jour</td>";
        }

echo '</table>';

$nom = array("Janvier"=>31, "Février"=>28, "Mars"=>31, "Avril"=>30, "Mai"=>31, "Juin"=>30, "Juillet"=>31, "Aout"=>31, "Septembre"=>30, "Octobre"=>31, "Novembre"=>30, "Décembre"=>31);   
sort($nom);

for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
{
   echo "$nom[$nb1]<br>";
}


$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

// ksort($capitales);
// var_dump($capitales);
// asort($capitales);

// 1. CAPITALES AVEC SON PAYS

// foreach ($capitales as $capitales => $pays) {
//     echo "$capitales => $pays<br>";
// }

// 1-2. PAYS AVEC SA CAPITALE

// foreach ($capitales as $capitales => $pays) {

//     echo "$pays => $capitales<br>";

// }

// foreach ($capitales as $capitale => $pays) {
//     // echo strncmp($capitale,"B",1);
//     if (strncmp($capitale,"B",1) == 0) {
//         echo "gnegne claqué au max";
//     }
    // echo $capitales;
    // strpos($capitales,"B",0);
// }
// echo stristr($capitales,'b');

// unset ($capitales["Bagdad"]);


// 2. NOMBRE DE PAYS DANS LE TABLEAU.

// echo(count($capitales));

// sort($capitales);

// foreach ($capitales as $capitales => $pays) {
// }
//     echo "$capitales<br>";

// 3. SUPPRIMER DU TABLEAU TOUTES LES CAPITALES NE COMMENÇANT PAS PAR LA LETTRE "B", PUIS AFFICHEZ LE CONTENU DU TABLEAU.

// unset($capitales["Paris"]);

// echo $capitales;

// $key = '';
// $search = array_search($key, $capitales);
// var_dump($search);
// if($search != true){
//   unset($capitales[$key]);
//   foreach($capitales as $country => $city){
//          echo $country." : ".$city."<br>";
//      }

// };


// 3.1 DEPARTEMENTS 

// $cacahuete = array(
//     "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
//     "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
//     "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
//     "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
// );

// asort($cacahuete);

// foreach ($cacahuete as $regions => $departements ) {
//     echo "<table>  <tr> ".$regions. " <tr> ";
//     asort($departements);
//     print_r($departements);
// }


// 3.2 

// $cacahuete = array(
//     "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
//     "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
//     "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
//     "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
// );

// foreach ($cacahuete as $regions => $departements) {
//     echo "$regions <br>";
//     print_r($departements);
// }


?>

</body>
</html>