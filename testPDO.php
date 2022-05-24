<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PDO</title>
</head>
<body>
<?php

try 
{
    $db = new PDO("mysql:host=localhost;charset=utf8;dbname=record", "admin", "votremotdepasse");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die("<br>".'Fin du script');
}
?>

<main role="main">
    <h1 class="center-align">Liste des disques (<?= count($discs) ?>)</h1>
    <div class="row section">
        <!-- For each discs it creates a card with all the informations about the disc -->
        <?php foreach ($discs as $disc): ?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img
                            alt="Image du disque"
                            class="responsive-img"
                            src="../../assets/img/<?= $disc->disc_picture ?>"
                        >
                    </div>
                    <div class="card-content">
                        <div class="center-align row">
                            <p class="flow-text" id="artistName">
                                <?= $disc->artist_name ?> (<?= $disc->disc_title ?>)
                            </p>
                            <div class="col s12">
                                <p><b>Année</b>: <?= $disc->disc_year ?></p>
                                <p><b>Label</b>: <?= $disc->disc_label ?></p>
                                <p><b>Genre</b>: <?= $disc->disc_genre ?></p>
                                <p><b>Prix</b>: <?= $disc->disc_price ?>€</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a
                            class="btn deep-orange lighten-1"
                            href="details.php?disc_id=<?= $disc->disc_id ?>"
                            id="detailsButton"
                        >
                            Détails
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if (isset($_SESSION["connected"])): ?>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large deep-orange lighten-1" href="create.php">
                <i class="material-icons">add</i>
            </a>
        </div>
    <?php endif; ?>
</main>


</body>
</html>



<?php while($discs = $disc->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo ($discs['id']); ?></td>
       <td><?php echo ($discs['name']); ?></td>
     </tr>
     <?php endwhile; ?>
é 