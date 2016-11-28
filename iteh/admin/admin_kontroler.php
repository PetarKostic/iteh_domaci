<?php

if (isset($_GET['ubaci'])) {

    $ubaci = $_GET['ubaci'];
    switch ($ubaci) {
        case 'kat':
            include('ubacivanje_kategorija.php');
            break;
        case 'brend':
            include('ubacivanje_brenda.php');
            break;
        case 'proizvod':
            include('ubacivanje_proizvoda.php');
            break;
    }
}

if (isset($_POST['submit'])) {
    include("../konekcija.php");
    $id_brenda = $_POST['brend_id'];
    $brend_ime = $_POST['brend_ime'];

    global $mysqli;
    $sql = "insert into brands values('$id_brenda','$brend_ime')";
    if ($mysqli->query($sql) === TRUE) {

        $ok = "Uspesno ubacivanje";
    } else {
        $error = "Doslo je do greske";
    }
}
if (isset($_POST['sacuvaj'])) {
    include("../konekcija.php");
    $cat_id = $_POST['kat_id'];
    $cat_ime = $_POST['kat_ime'];

    global $mysqli;
    $sql = "insert into categories values('$cat_id','$cat_ime')";
    if ($mysqli->query($sql) === TRUE) {

        $ok = "Uspesno ubacivanje";
    } else {
        $error = "Doslo je do greske";
    }
}

if (isset($_GET['obrisi'])) {
    include('../konekcija.php');
    global $mysqli;
    $id = $_GET['proizvod'];
    $sql = "delete  from products where product_id = '$id'";
    if ($mysqli->query($sql) === TRUE) {

        $ok = "Uspesno brisanje proizvoda";
    } else {
        $error = "Doslo je do greske";
    }
}
?>
