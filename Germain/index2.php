<?php
try{
    $db = new PDO('mysql:host=database;dbname=record;charset=utf8','root','tiger');
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(Exception $e){
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
}

    $requete = $db->query("SELECT * FROM artist");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>

        <?php foreach ($tableau as $artist): ?>

        <!-- <?php var_dump($artist); // Le var_dump() est écrit à titre informatif ?> -->
        <tr>
            <td><?= $artist->artist_id ?></td>
            <td><?= $artist->artist_name ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</body>
</html>