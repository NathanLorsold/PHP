<?php

require "DB2/db2.php";

$db2 = ConnexionBase();

// $requete = $db->query("SELECT * FROM disc");

// $tableau = $requete->fetchAll(PDO::FETCH_OBJ);

// var_dump($tableau);

 $requete1 = $db2->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id");
                    $requete1->execute();
                    $tableau = $requete1->fetchAll(PDO::FETCH_OBJ);                
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaquettes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>

    <?php $cd=0; ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                <?php   foreach ($tableau as $disc) {
                    $cd++;
                    }
                    ?>

                <h1>Liste des disques <?php echo"(".$cd.")"?> </h1>
                </div>
                    <div class="col-3">
                    <a class="btn btn-dark" href="disc_new.php" role="button">Ajouter</a>
                    </div>

                    </div>
        </div>
    </header>

                                
                        <?php    foreach ($tableau as $disc){  ?>
                            <div class="container">

                                    <div class="col-6 bg-dark text-white card m-2 p-0" style="width: 18rem;">
                                        <div class="card-header"><?=$disc->disc_title?></div>
                                        <img src="<?= "images/".$disc->disc_picture?>" class="card-img-top" alt="pochette" style="height: 18rem">
                                        <div class="card-body">
                                        <h3><?= $disc->artist_name; ?> </h3>
                                            <p>Label : <?= $disc->disc_label; ?>  </p>
                                            <p><?= $disc->disc_year; ?> : <?= $disc->disc_genre; ?></p>
                                            <a href="disc_detail.php?id=<?php echo $disc->disc_id; ?>">Details</a>

                                    </div>
                                    </div>
                                    </div>
                        <?php } ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>