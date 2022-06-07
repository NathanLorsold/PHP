<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $dossier = 'http://bienvu.net/misc/customers.csv';
    $ligne = file($dossier);
    ?>

    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">Surname</th>
                <th scope="col">FirstName</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($ligne as $ligneTab) :
                $ligneTab2 = explode(",", $ligneTab); ?>
                <tr>
                       <?php foreach ($ligneTab2 as $info) { ?>

                        <td><?= $info ?></td>

                    <?php } ?> 
                </tr>
            <?php endforeach; ?>
        <?php
        ?>
</body>
</html>