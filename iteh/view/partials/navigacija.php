<div class="col-md-6">
    <div class="page-header" id="lista">
        <nav class="navbar navbar-default"  role="navigation">
            <div class="navbar-header">
                <ul class="nav navbar-nav" id="lista">
                    <li> <a href="index.php" class="navbar-brand"><b>Brandovi</b></a></li>
                    <?php
                    $brandovi = vratiSveBrendove();
                    foreach ($brandovi->brendovi as $brend):
                        ?>
                        <li> <a href="index.php?brand=<?php echo $brend->brand_id ?>" class="navbar-brand"><?php echo $brend->brand_title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="col-md-6">
    <div class="page-header" id="lista">
        <nav class="navbar navbar-default"  role="navigation">
            <div class="navbar-header">
                <ul class="nav navbar-nav" id="lista">
                    <li> <a href="index.php" class="navbar-brand"><b>Kategorije</b></a></li>
                    <?php
                    $kategorija = vratiSveKategorije();
                    foreach ($kategorija->kategorije as $vrednost):
                        ?>
                        <li> <a href="index.php?cat=<?php echo $vrednost->cat_id ?>" class="navbar-brand"><?php echo $vrednost->cat_title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>   <!--    kraj navigacije za kategorije i brendove  -->