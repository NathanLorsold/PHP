<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
       <?php

        // 1. ---------------------------------

        for ($a = 0; $a < 152; $a++) 
        
        { 
            if ($a % 2 == 1)
            {
              echo "$a - ";
            }        
        
        }
        
        // 2. -----------------------------

      //   $b = 0;
      //   while ($b <= 150) {
      //       echo " <br> Je dois faire des sauvegardes régulières de mes fichiers <br>";
      //       $b++;
      //   }

        // 3. --------------------------------


echo '<table border="1" width="400">';
     echo '<tr>';
      echo '<td></td>';
      for($j=0 ; $j<=12; $j++){
          echo'<td> <b>'.$j.'</b></td> ';
      }
      echo'</tr>';
      for ($a=0; $a<=12; $a++) {
        echo '<tr>';
        for ($j=-1; $j<=12; $j++) {
           if ($j==-1) {
              echo '<th>'.$a.'</th>';
           }
           else {
           echo "<td>" . $a*$j;
           echo '</td>';

           }
            //   if ($a==$j) {
            //      echo '<td>';
            //   } else {
            //      echo '<td>';
            //   }
        }
        echo '</tr>';
        $j=1;
     }
     echo '</table>';

      ?>
</body>
</html>