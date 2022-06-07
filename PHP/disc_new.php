<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Ajout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<?php 
    require "DB2/db2.php";
    session_start();

    $db2 = ConnexionBase();
    //$requete1 = $db2->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id");
    $requete1 = $db2->query("SELECT * FROM artist ");

    // $requete1->execute();
    $tableau = $requete1->fetchAll(PDO::FETCH_OBJ);
?>


<body>
    <h2>Le formulaire d'ajout</h2>

    <hr>

    <h3> Ajouter un vinyle </h3>
    

<form action="script_disc_ajout.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputtitre">Titre <br>
        </label>
        <input type="text" class="form-control" id="inputtitre" name="titre" placeholder="Entrer un titre">
    </div>
    <br>
    <div>
        <label for="LabelArtiste">Artiste<br>
        </label>

                <select class="form-control" name="select">
                    <option selected>Selection par defaut</option>

                    <?php foreach($tableau as $disc) { ?>
                    <option value="<?php echo $disc->artist_id ?>"><?= $disc->artist_name ?></option>
                        <?php } ?>

                </select>

    <br>
            <div class="form-group">
        <label for="labelAnnee">Annee 
        <br>
        </label>
        <input type="text" class="form-control" id="inputannee" name="annee" placeholder="Entrer une annee">
    </div>
    
    </div>
    <br>
    <div class="form-group">
        <label for="labelGenre">Genre 
        <br>
        </label>
        <input type="text" class="form-control" id="inputGenre" name="genre" placeholder="Entrer un genre (Rock,Pop,Prog ...)">
    </div>
    
    </div>
    <br>
    <div class="form-group">
        <label for="LabelLabel">Label <br>
        </label>
        <input type="text" class="form-control" id="inputLabel" name="label" placeholder="Entrer un label (EMI,Warner,PolyGram,Univers sale...)">
    </div>
    
    </div>
    <br>
    <div class="form-group">
        <label for="LabelPrix">Prix 
    <br>
        </label>
        <input type="text" class="form-control" id="inputPrix" name="prix" placeholder="Entrer un prix">
    </div>
    
    </div>
    <br>


                <div class="form-group">
                    <label for="labelPhoto">Photo
                <br>
                    <input type="file" class="form-control-file" id="photo" name="photo"> <br>
                    <?php
                    if(isset($_SESSION['message'])){ 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                } ?>
                </div>
            </label>
        <br>
        <button type="submit" class="btn btn-primary" name="boutton">Ajouter</button>
        <a type="submit" class="btn btn-primary" href="discs.php">Retour</a>

</form> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>