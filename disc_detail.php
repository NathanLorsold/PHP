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
    $requete1 = $db2->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id where disc_id = $id");
    $requete1->execute();
    $tableau = $requete1->fetch(PDO::FETCH_OBJ);

?>


<body>
    <h2> Details </h2>
<form action="script_disc_delete.php" method="post">
  <div class="row">
    <div class=" col-6">
      <label for="inputTitre">Titre</label>
      <input type="text" class="form-control" id="inputTitre" placeholder=" <?php echo $tableau->disc_title?> " readonly>
    </div>
    <div class="col-6">
      <label for="inputArtiste">Artiste</label>
      <input type="password" class="form-control" id="inputArtiste" placeholder="<?php echo $tableau->artist_name?> " readonly>
    </div>

    <br><br>

  </div>

  <div class="row">
        <div class="col-6">
        <br>

            <label for="LAbelAnnee">Annee</label>
            <input type="text" class="form-control" id="inputAnnee" placeholder="<?php echo $tableau->disc_year?> " readonly>
        </div>
        <div class="col-6">
        <br>

            <label for="LabelGenre">Genre</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="<?php echo $tableau->disc_genre?> " readonly>
        </div>
    </div>
  <div class="row">
    <div class="col-6">
    <br>

      <label for="inputLabel">Label</label>
      <input type="text" class="form-control" id="inputLabel" placeholder="<?php echo $tableau->disc_label?> " readonly>
    </div>
    <div class="col-6">
    <br>

      <label for="inputPrix">Prix</label>
      <input type="text" class="form-control" id="inputPrix" placeholder="<?php echo $tableau->disc_price?> " readonly>

    </div>
    <div class="col-6">
        <br>
      <label for="inputImage">Images</label>
      <br> 
      <img src="images/<?php echo $tableau->disc_picture; ?>">
      <br><br>

      <a class="btn btn-primary" href="disc_form.php?id=<?php echo $tableau->disc_id; ?>" role="button">Modifier</a>

       <a class="btn btn-primary" type="submit" onclick="functiondelete()"  href="script_disc_delete.php?id=<?= $tableau->disc_id?>" role="button" id="btndelete">Supprimer</a>

       <script type="text/javascript">
         function functiondelete() {
          var text;
          if (confirm("Voulez vous réellement supprimer ?") == true) {
            text = "Vous avez delete";
          } else {
            text = "Vous n'avez pas delete";
          }
            document.getElementById("");
         }
         console.log(text);
      </script>

      <a class="btn btn-primary" href="discs.php" role="button">Retour</a>
  </div>
</form>
</body>
</html>