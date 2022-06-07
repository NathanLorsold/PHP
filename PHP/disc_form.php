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
    $requete1 = $db2->prepare("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id where disc_id = $id");
    $requete1->execute();
    $tableau = $requete1->fetch(PDO::FETCH_OBJ);
    $requete1->CloseCursor();


    // // On crée une requête préparée avec condition de recherche :
    // $requete = $db2->prepare("SELECT * FROM artist JOIN disc ON disc.artist_id = artist.artist_id WHERE disc_id=?");
    // // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    // $requete->execute(array($id));
    // // on récupère le 1er (et seul) résultat :
    // $Modif = $requete->fetch(PDO::FETCH_OBJ);
    // // on clôt la requête en BDD
    // $requete->closeCursor();




    ?>



<body>
    <h2> Le formulaire de modification </h2>
    <hr>
    <h3>Modifier un vinyle</h3>
<form action="script_disc_modif.php" method="post">
  <div class="row">
      <div class="col-12">
      <input type="hidden" class="form-control" name="idm" value="<?php echo $tableau->disc_id?>">
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <label for="inputTitre">Titre</label>
      <input type="text" class="form-control" name="titrem" value="<?php echo $tableau->disc_title?>" placeholder="<?php echo $tableau->disc_title?>">
      <br>

    </div>
    <div class="col-12">

      <label for="inputArtiste">Artiste</label>



      <select class="form-control">

            <option name="artistem">            
              <?php echo $tableau->artist_name?> 
            </option>


    <!-- La boucle for pour afficher tous les noms des artistes dans le select. -->
          

          <?php    
          $requete1 = $db2->query("SELECT * FROM artist");
          $requete1->execute();
          $tableau1 = $requete1->fetchAll(PDO::FETCH_OBJ);

    foreach($tableau1 as $modif) { ?>
            <option value="<?php echo $modif->artist_id ?>"><?php echo $modif->artist_name; ?></option>
                        <?php } ?>
                </select>

    </div>

    <br><br>

  </div>

  <div class="row">
        <div class="col-12">
        <br>

            <label for="LabelAnnee">Annee</label>
            <input type="text" class="form-control" id="inputAnnee" name="anneem" value=" <?php echo $tableau->disc_year?> " placeholder="<?php echo $tableau->disc_year?> " >
        </div>
        <div class="col-12">
        <br>

            <label for="LabelGenre">Genre</label>
            <input type="text" class="form-control" id="inputAddress2" name="genrem" value="<?php echo $tableau->disc_genre?> " placeholder="<?php echo $tableau->disc_genre?> " >
        </div>
    </div>
  <div class="row">
    <div class="col-12">
    <br>

      <label for="inputLabel">Label</label>
      <input type="text" class="form-control" id="inputLabel" name="labelm" value=" <?php echo $tableau->disc_label?> " placeholder="<?php echo $tableau->disc_label?> " >
    </div>
    <div class="col-12">
    <br>

      <label for="inputPrix">Prix</label>
      <input type="text" class="form-control" id="inputPrix" name="prixm" value="<?php echo $tableau->disc_price?> " placeholder="<?php echo $tableau->disc_price?> " >

    </div>
    <div class="col-12">
        <br>
      <label for="inputImage">Images</label>
      <br> 
      <img src="images/<?php echo $tableau->disc_picture; ?>">
      <br><br>


      <button type="submit" class="btn btn-primary" href="script_disc_modif.php?id=<?php echo $tableau->disc_id ?>" role="button">Modifier l'enregistrement</button>
      <a class="btn btn-primary"href="disc_detail.php?id=<?php echo $tableau->disc_id ?>" role="button">Retour</a>
  </div>
  </form>
</body>
</html>