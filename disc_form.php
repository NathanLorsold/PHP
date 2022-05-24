<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - détails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<?php 
    require "DB2/db2.php";

    $db2 = ConnexionBase();
    $id = $_GET['id'];
    $requete2 = $db2->prepare("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id = ?");
    $requete2->bindValue(1, $id);
    $requete2->execute();
    // $requete2->execute(array($id));
    $tableau = $requete2->fetch(PDO::FETCH_OBJ);
    $requete2->closeCursor();

    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db2->prepare("SELECT * FROM artist JOIN disc ON disc.artist_id = artist.artist_id WHERE disc_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));
    // on récupère le 1e (et seul) résultat :
    $Modif = $requete->fetch(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

    $requete1 = $db2->query("SELECT * FROM artist");
    $requete1->execute();
    $tableau3 = $requete1->fetchAll(PDO::FETCH_OBJ);


    ?>



<body>
    <h2> Le formulaire de modification </h2>
    <hr>
    <h3>Modifier un vinyle</h3>
<form>
  <div class="row">
    <div class=" col-12">
      <label for="inputTitre">Titre</label>
      <input type="text" class="form-control" id="inputTitre" value="<?php echo $tableau->disc_title?>" placeholder=" <?php echo $tableau->disc_title?> " >
      <br>

    </div>
    <div class="col-12">

      <label for="inputArtiste">Artiste</label>



      <select class="form-control">

            <option>            
              <?php echo $tableau->artist_name?>
            </option>
<!-- La boucle for pour afficher tous les noms des artistes dans le select. -->
          
          <?php foreach($tableau2 as $modif) { ?>
            <option value="<?php echo $Modif->artist_id ?>" selected><?php echo $Modif->artist_name ?></option>
                        <?php } ?>
                        <?php 


                    foreach ($tableau3 as $data){ ?>
                    <option value="<?=$data->artist_id ?>"> <?=$data->artist_name;?> </option>
                    <?php } ?>
                </select>

    </div>

    <br><br>

  </div>

  <div class="row">
        <div class="col-12">
        <br>

            <label for="LabelAnnee">Annee</label>
            <input type="text" class="form-control" id="inputAnnee" value=" <?php echo $tableau->disc_year?> " placeholder="<?php echo $tableau->disc_year?> " >
        </div>
        <div class="col-12">
        <br>

            <label for="LabelGenre">Genre</label>
            <input type="text" class="form-control" id="inputAddress2" value="<?php echo $tableau->disc_genre?> " placeholder="<?php echo $tableau->disc_genre?> " >
        </div>
    </div>
  <div class="row">
    <div class="col-12">
    <br>

      <label for="inputLabel">Label</label>
      <input type="text" class="form-control" id="inputLabel" value=" <?php echo $tableau->disc_label?> " placeholder="<?php echo $tableau->disc_label?> " >
    </div>
    <div class="col-12">
    <br>

      <label for="inputPrix">Prix</label>
      <input type="text" class="form-control" id="inputPrix" value="<?php echo $tableau->disc_price?> " placeholder="<?php echo $tableau->disc_price?> " >

    </div>
    <div class="col-12">
        <br>
      <label for="inputImage">Images</label>
      <br> 
      <img src="images/<?php echo $tableau->disc_picture; ?>">
      <br><br>

      <a class="btn btn-primary" href="disc_form.php" role="button">Modifier</a>
      <a class="btn btn-primary" href="discs.php" role="button">Retour</a>
  </div>
</body>
</html>