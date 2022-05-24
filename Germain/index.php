<?php
include "DB/db.php";
// include "partials/header.php";
?>
<div class="container">
    <h1>Nous avons  <span class="text-primary"><?= count($tableau) ?></span>  Artistes en stock : </h1>
    <table class="table table-striped">
        <tr>
            <th>Nom</th>
            <th>Disques</th>
        </tr>

        <?php foreach ($tableau as $artist) : ?>

            <tr>
                <td class=""><?= $artist->artist_name ?></td>
                <td class=""> <a class="btn btn-dark btn-sm" href="detail.php?id=<?= $artist->artist_id ?>&&name=<?=$artist->artist_name ?>"  ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vinyl-fill" viewBox="0 0 16 16">
                            <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0z" />
                        </svg></a> </td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>


