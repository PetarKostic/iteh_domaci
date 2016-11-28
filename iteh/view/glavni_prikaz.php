<?php require('controller/main.php'); ?>

<?php 
    $broj = count($proizvodi->proizvod);
    if ($broj == 0) : ?>
        <div class="col-md-12">
            <div class="alert alert-info text-center">
                <strong><?php echo "U bazi ne postoji nijedan proizvod te kategorije"; ?></strong>
            </div>
        </div>
    <?php endif; ?>
    
    <?php foreach ($proizvodi->proizvod as $pro): ?>
        <div class="col-md-4  thumbnail" >
            <a href="details.php?pro_id=<?= $pro->proizvod_id; ?>"><h2 align="center"><?= $pro->ime_proizvoda; ?></h2></a>
                <img src="public/img/<?= $pro->slika_proizvoda; ?>" height="142" width="200" class="img-rounded"></a>
            <div class="col-md-12">     
                <div class="col-md-6"> <p class="pull-left">Cena : <?= $pro->cena_proizvoda . "$"; ?></p></div>
                <div class="col-md-6 "> <a class="pull-right" href="details.php?pro_id=<?= $pro->proizvod_id; ?>">detaljnije</a></div>
            </div>
        </div> 
    <?php endforeach; ?> 
 
 
