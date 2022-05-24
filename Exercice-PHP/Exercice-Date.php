<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Date</title>
</head>
<body>
        <?php

        $ddate = "2017-07-19";
        $date = new DateTime($ddate);
        $week = $date->format("W");
        echo "Le numéro de la semaine est : ".$week."<br>";

//2 --------------------------------------------------------------------

        $debut = new DateTime('2020-04-25');
        $fin = new DateTime('2020-06-11');
        $entredeux = $debut->diff($fin);
        echo $entredeux->format('%R%a jours');

//3---------------------------------------------------------------------------- 

    //     function est_bissextile($annee)
    // {
    //     return date("m-d", strtotime("$annee-02-29")) == "02-29";
    //     echo est_bissextile('2015'); // 0
    // echo est_bissextile('2016'); // 1
    // echo est_bissextile('2017'); // 0
    // echo est_bissextile('2018'); // 0
    // echo est_bissextile('2019'); // 0
    // echo est_bissextile('2020'); // 1
    // }

//4-----------------------------------------------------------------------

    //  function estAnneeBissextile($annee)
    //   {
    //      $estMultipleDeQuatreCent = ( ($annee % 400) == 0);
    //      $estMultipleDeQuatre = ( ($annee % 4) == 0);
    //      $estPasMultipleDeCent = ( ($annee % 100) != 0);      
    //      return ( $estMultipleDeQuatreCent || ( $estMultipleDeQuatre &&
    //     $estPasMultipleDeCent ) );
    //   }

    //   $y = date("2022"); 
    //   if(estAnneeBissextile($y))
    //         $message = "<br>".$y." est une année bissextile !<br/>";
    //   else  $message = "<br>".$y." n'est pas une année bissextile !<br/>";
    //   echo $message;

//5----------------------------------------------------------------------------------------

      //  function isValid($date, $format = 'Y-m-d'){
      //   $dt = DateTime::createFromFormat($format, $date);
      //   return $dt && $dt->format($format) === $date;
      // }
      // var_dump(isValid('2019-17-32'));

//6-------------------------------------------------------------------------------

      // echo date("h").date("i");

      // $oldDate   = "now";
      // $date1 = date("Y-m-d", strtotime($oldDate.'+ 1 month'));
      // echo $date1;

//7-------------------------------------------------------------------------------

      // echo "<br>".date("H:i", time()+(720*3600))

      //   echo "<br>".date(1000200000);

      // echo "<br>".$date -> format("Y-m-d");

      // Pourquoi cette méthode fonctionne pas ='(

//7------------------------------------------------------------------------------------- 

      // $date = date("Y-m-d", 1000200000);

      // echo "<br><br>" .$date;

      // Attentats des tours jumelles.




































        ?>

</body>
</html>