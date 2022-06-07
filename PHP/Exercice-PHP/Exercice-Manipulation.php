<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulation</title>
</head>
<body>



<?php


//    $cacahuete = fopen("machin.txt", "r");
//    while(!feof($cacahuete)){
//        // Lecture de la ligne du document , 4096 est le nombre de caractére
//        $ligne = fgets($cacahuete, 4096);
//        echo "<a href=\"$ligne => $cacahuete\"title=\"\"> $ligne</a>".'<br>';
//    }

   $test = 'http://bienvu.net/misc/customers.csv';
   $ligne = file($test);
  ?>

        <table> 
            <thead>
                <tr>
                    <th> Surname </th>
                    <th> Firstname </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> City </th>
                    <th> State </th>
                </tr>
            </thead>
        <tbody>

           <?php 

           foreach ($ligne as $lignetableau):
            // echo $lignetableau;
             $test1 = explode(",", $lignetableau);
  
            ?>

                <tr>
            <?php foreach ($test1 as $colonne) {?>

                    <td><?= $colonne ?>&nbsp;</td>

                    <!-- LE nbsp; SERT A CREER UN ESPACE POUR ESPACER LA COLONNE CITY ET PHONE -->
                
                <?php } ?>                       
            </tr>
                <?php endforeach; ?>
            </tbody>
            </table>

</body>
</html>