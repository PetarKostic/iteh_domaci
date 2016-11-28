<?php require("view/partials/header.php"); ?>
<?php include("controller/ProductsController.php"); ?>

<div id="headerWrapper">
    <img src="public/img/river.jpg" alt="" height="350px" width="100%">
</div>

<?php require('view/partials/navigacija.php'); ?>

<div class="col-md-4 col-md-offset-4">  
    <form action="" method="get" class="form-inline">
        <div class="form-group">
            <div class="">
                <input type="text" name="search" id="search" placeholder="Search">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-1">
                <input type="submit" class="btn btn-primary" value="Search" name="nadji" style="width: 150px;" onkeyup="posaljiZahtev()">
            </div>
        </div>
    </form>  
</div> 

<div class="container " id="sve">
    <div class="content"> 
        <div id="products_box" class="col-md-12" >
            <?php
            include('view/glavni_prikaz.php');
            ?>        
            <div>
                <span id="odgovorS"></span>
            </div>
        </div>
    </div> 
</div>

<div id="prikaz"></div>

<?php include("view/partials/footer.php"); ?>

