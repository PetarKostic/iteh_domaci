<?php
include('../controller/controller.php');
$proizvodi = vratiProizvode();
foreach ($proizvodi->proizvod as $pro):
    ?>
    <div class="col-md-4">
        <h2 align="center"><?php echo $pro->ime_proizvoda; ?></h2>
        <a href="details.php?pro_id=<?php echo $pro->proizvod_id; ?>"> <img src="../public/img/<?php echo $pro->slika_proizvoda; ?>
                                                                           " height="142" width="200" ></a>
        <div class="col-md-12">     
            <div class="col-md-6"> <p>Cena : <?= $pro->cena_proizvoda . "$"; ?></p></div>
            <div class="col-md-6 "> 
                <form action="" method="get">
                    <input type="hidden" name="proizvod" value="<?php echo $pro->proizvod_id; ?>">
                    <input type="submit" name="obrisi" value="Obrisi">
                </form>
            </div>
        </div>
    </div>
    <?php
endforeach;
?>