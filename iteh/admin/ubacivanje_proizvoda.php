
<!-- ukljucujemo kontroler jer moramo da zovemo metode,da bi mogli da isciramo kategorije i brendove -->
<?php include('../controller/controller.php'); ?>
<div>
<br><br>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <form action="" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="id">Id proizvoda</label>
                    <input type="text" class="form-control" id="id" name="product_id" placeholder="Unesi id proizvoda"  >
                </div>
                <div class="form-group">
                    <label for="Ime">Ime proizvoda</label>
                    <input type="text" class="form-control"id="ime" name="product_title" placeholder="Unesi ime" required>
                </div>
                <div class="form-group">
                    <label for="pitanje" class=" control-label">
                        Kategorija prizvoda
                    </label>
                    <div class="form-group">
                        <select class="form-control" name="cat" id="kategorija">
                            <option>Select a Category</option>
                            <?php
                            $kategorije = vratiSveKategorije();
                            foreach ($kategorije->kategorije as $kategorija):
                                ?>
                                <option value="<?php echo $kategorija->cat_id; ?>">
                                    <?php echo $kategorija->cat_title; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Brand proizvoda">Brand proizvoda</label>
                        <select class="form-control" name="product_brand" id="brend">
                            <option>Select a Brand</option>
                            <?php
                            $brendovi = vratiSveBrendove();
                            foreach ($brendovi->brendovi as $brend):
                                ?>
                                <option value="<?php echo $brend->brand_id; ?>">
                                    <?php echo $brend->brand_title; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Slika proizvoda">Slika proizvoda</label>
                    <input type="file" name="product_image" accept="image/*" required id="slika">
                </div>
                <div class="form-group">
                    <label for="Ime">Cena proizvoda</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Unesi cenu" required id="cena">
                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="user-message" class=" control-label">
                    Opis proizvoda
                </label>
                <div class="form-group">
                    <textarea name="product_desc"  id="opis" class="form-control" cols="20" rows="8" placeholder="Unesite opis proizvoda" style="height: 210px;"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="Ime">Kljuce reci</label>
                <input type="text" class="form-control" id="kljucne" name="product_keywords" placeholder="Unesi kljucne reci" required>
            </div>
        </div>
    </div>
    <div class="dugmici">

        <div class="form-group col-md-4 col-md-offset-4 " style="padding-top: 60px;">
            <button type="submit" id="dug" class="btn btn-primary btn-lg btn-block" name="posalji">INSERT</button>
        </div>   
    </div>
</form>
<span id="span"></span>
</div>
</div>