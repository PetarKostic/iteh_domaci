<?php include("view/partials/header.php"); ?>
<?php include('controller/ProductsController.php'); ?>
<div class="header">
    <img src="public/img/river.jpg" alt="" height="350px" width="100%">
</div>
<div class="    ">
    <div class="content" style="text-align: center">
        <div id="products_box">
                    <?php foreach($proizvodi as $pro): ?>
                    <div class="container">
                        <div class="thumbnail">
                            <h2><?= $pro->product_title; ?></h2>
                            <img src="public/img/<?= $pro->product_image; ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><b>Price : $<?= $pro->product_price; ?></b></h4>
                                <h4><?= $pro->product_desc; ?></h4>
                            </div>
                            <p class="pull-right">31 reviews</p>
                            <p class="pull-left"><a href="index.php">Vrati se nazad</a></p>
                            <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>
</div>
<?php include("view/partials/footer.php"); ?>
</body>
</html>