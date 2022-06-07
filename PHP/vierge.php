<?php $requete1 = $db->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id");
                    $requete1->execute();
                    $tableau = $requete1->fetchAll(PDO::FETCH_OBJ);
                    foreach ($tableau as $data){
                    $cd++;?>
                    
        <div class="card">
            <div class="imgbx">
            <a href="disc_detail.php?id=<?php echo $data->disc_id; ?>">
                        <img src="jaquettes/<?= $data->disc_picture; ?>" alt="<?= $data->disc_title; ?>"
                            title=" <?= $data->disc_title; ?>" class="img-fluid"> </a>
            </div>
            <div class="content">
                <h2 class="card-title"><?= $data->disc_title; ?> </h2>
                <h3 class="car-subtitle"><?= $data->artist_name; ?> </h3>
                        <p class="card-text">Label : <?= $data->disc_label; ?>  </p>
                        <p><?= $data->disc_year; ?> | <?= $data->disc_genre; ?></p>
                        <a href="disc_detail.php?id=<?php echo $data->disc_id; ?>" id="Btn_details" class="Btn_details">Details</a>
                    <?php } ?>