<?php
$file = "../konekcija.php";
if (file_exists($file)) {
    include($file);
} else {
    echo "Doslo je do greske pri ucitavanju stranice,<br>molimo vas navratite kasnije";
}
include("../model/domen/brand.php");
include("../model/domen/kategorija.php");
include("../model/domen/proizvod.php");
include("../model/function.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['sifra'];
    var_dump($_POST);
    $putanja = Funkcije::logovanje($username,$password);
    header("location:../{$putanja}");
}

	function vratiProizvode() {
            return json_decode(Funkcije::vratiProizvode());
    }

    function vratiSveBrendove() {
    return json_decode(Funkcije::vratiBrendove());
	}

	function vratiSveKategorije() {
    return json_decode(Funkcije::vratiKategorije());
	}



?>