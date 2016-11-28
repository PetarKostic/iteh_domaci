<?php
$file = "konekcija.php";
if (file_exists($file)) {
    include($file);
} else {
    echo "Doslo je do greske pri ucitavanju stranice,<br>molimo vas navratite kasnije";
}
include("model/domen/brand.php");
include("model/domen/kategorija.php");
include("model/domen/proizvod.php");
include("model/function.php");

function vratiSveBrendove() {
    return json_decode(Funkcije::vratiBrendove());
}

function vratiSveKategorije() {
    return json_decode(Funkcije::vratiKategorije());
}

function vratiProizvode() {
    if (!isset($_GET['cat'])) {
        if (!isset($_GET['brand'])) {
            return json_decode(Funkcije::vratiProizvode());
        }
    }
}

function vratiPro_Kategorije() {
    if (isset($_GET['cat'])) {
        $cat_id = $_GET['cat'];
        return json_decode(Funkcije::vratiPro_Kategorije($cat_id));
    }
}

function vratiPro_Brend() {
    if (isset($_GET['brand'])) {

        $brand_id = $_GET['brand'];
        return json_decode(Funkcije::vratiPro_Brend($brand_id));
    }
}

function nadjiProizvod($naziv)
{
    return json_decode(Funkcije::nadjiProizvod($naziv));
}

if (isset($_GET['pro_id'])) {
    $proizvodi = Funkcije::vratiProizvodePoId($_GET['pro_id']);
}



?>