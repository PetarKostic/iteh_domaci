<?php

class Funkcije {

    public static function vratiProizvode() {
        global $mysqli;
        $sql = "select * from products LIMIT 0,6";
        $rez = $mysqli->query($sql);
        $listaProizvoda = [];
        while ($row = $rez->fetch_assoc()) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $cat_id = $row['cat_id'];
            $brand_id = $row['brand_id'];
            $product_price = $row['product_price'];
            $product_desc = $row['product_desc'];
            $product_image = $row['product_image'];
            $product_keywords = $row['product_keywords'];
            $proizvod = new Proizvod();
            $proizvod->setProizvodId($product_id);
            $proizvod->setImeProizvoda($product_title);
            $proizvod->setProizvodKategorije($cat_id);
            $proizvod->setProizvoBrend($brand_id);
            $proizvod->setCenaProizvoda($product_price);
            $proizvod->setOpisProizvoda($product_desc);
            $proizvod->setSlikaProizvoda($product_image);
            $proizvod->setKljucneProizvoda($product_keywords);
            array_push($listaProizvoda, $proizvod);
        }
        return '{"proizvod":' . json_encode($listaProizvoda) . "}";
    }

    public static function vratiPro_Brend($brand_id) {
        global $mysqli;
        $sql = "select * from products where brand_id=" . $brand_id;
        $rez = $mysqli->query($sql);
        $count_brands = $rez->num_rows;
        $listaProizvoda = [];
        while ($row = $rez->fetch_assoc()) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $cat_id = $row['cat_id'];
            $brand_id = $row['brand_id'];
            $product_price = $row['product_price'];
            $product_desc = $row['product_desc'];
            $product_image = $row['product_image'];
            $product_keywords = $row['product_keywords'];
            $proizvod = new Proizvod();
            $proizvod->setProizvodId($product_id);
            $proizvod->setImeProizvoda($product_title);
            $proizvod->setProizvodKategorije($cat_id);
            $proizvod->setProizvoBrend($brand_id);
            $proizvod->setCenaProizvoda($product_price);
            $proizvod->setOpisProizvoda($product_desc);
            $proizvod->setSlikaProizvoda($product_image);
            $proizvod->setKljucneProizvoda($product_keywords);
            array_push($listaProizvoda, $proizvod);
        }
        return '{"proizvod":' . json_encode($listaProizvoda) . "}";
    }

    public static function vratiPro_Kategorije($cat_id) {
        global $mysqli;
        $sql = "select * from products where cat_id=" . $cat_id;
        $rez = $mysqli->query($sql);
        $count_brands = $rez->num_rows;
        $listaProizvoda = [];
        while ($row = $rez->fetch_assoc()) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $cat_id = $row['cat_id'];
            $brand_id = $row['brand_id'];
            $product_price = $row['product_price'];
            $product_desc = $row['product_desc'];
            $product_image = $row['product_image'];
            $product_keywords = $row['product_keywords'];
            $proizvod = new Proizvod();
            $proizvod->setProizvodId($product_id);
            $proizvod->setImeProizvoda($product_title);
            $proizvod->setProizvodKategorije($cat_id);
            $proizvod->setProizvoBrend($brand_id);
            $proizvod->setCenaProizvoda($product_price);
            $proizvod->setOpisProizvoda($product_desc);
            $proizvod->setSlikaProizvoda($product_image);
            $proizvod->setKljucneProizvoda($product_keywords);
            array_push($listaProizvoda, $proizvod);
        }
        return '{"proizvod":' . json_encode($listaProizvoda) . "}";
    }

    public static function vratiBrendove() {
        include('konekcija.php');
        global $mysqli;
        $sql = "select * from brands  LIMIT 0,6";
        $rez = $mysqli->query($sql);
        $listaBrendova = array();
        while ($row = $rez->fetch_assoc()) {
            $brand = new Brand();
            $brand_id = $row['brand_id'];
            $brand_title = $row['brand_title'];
            $brand->setBrandId($row['brand_id']);
            $brand->setBrandTitle($row['brand_title']);
            array_push($listaBrendova, $brand);
        }
        return '{"brendovi":' . json_encode($listaBrendova) . '}';
    }

    public static function vratiKategorije() {
        global $mysqli;
        $sql = "select * from categories  LIMIT 0,6";
        $rez = $mysqli->query($sql);
        $listaKategorija = [];
        while ($row = $rez->fetch_assoc()) {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            $kategorija = new Kategorije();
            $kategorija->setCatId($row['cat_id']);
            $kategorija->setCatTitle($row['cat_title']);
            array_push($listaKategorija, $kategorija);
        }
        return '{"kategorije":' . json_encode($listaKategorija) . "}";
    }

    public static function logovanje($username,$password)
    { 
        global $mysqli;
        $sql = "select * from users where username = '$username' && password = '$password'";
        $rez = $mysqli->query($sql);
        $broj_redova = $rez->num_rows;
    if  ($broj_redova == 1) {
            $niz = $rez->fetch_assoc();
            extract($niz);
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $acces_level;
    if  (isset($_SESSION['username'])) {
            $sql = "update users set last_log_time = now()";
            $mysqli->query($sql);
            $_SESSION['vreme'] = $last_log_time;
            return 'admin/admin.php';
    }
    } else {

        return 'index.php';
    }
    }

    public static function vratiProizvodePoId($id)
    {
        global $mysqli;
        $sql = "select * from products where product_id = {$id}";
        $rez = $mysqli->query($sql);
        $niz = [];
        while($row = $rez->fetch_object())
        {
            $niz[] = $row;
        }
        return $niz;
    }

    public static function nadjiProizvod($search)
    {
        global $mysqli;
        $sql = "select * from products where product_keywords like '%$search%'";
        $rez = $mysqli->query($sql);
        $listaProizvoda = [];
        while ($row = $rez->fetch_assoc()) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $cat_id = $row['cat_id'];
            $brand_id = $row['brand_id'];
            $product_price = $row['product_price'];
            $product_desc = $row['product_desc'];
            $product_image = $row['product_image'];
            $product_keywords = $row['product_keywords'];
            $proizvod = new Proizvod();
            $proizvod->setProizvodId($product_id);
            $proizvod->setImeProizvoda($product_title);
            $proizvod->setProizvodKategorije($cat_id);
            $proizvod->setProizvoBrend($brand_id);
            $proizvod->setCenaProizvoda($product_price);
            $proizvod->setOpisProizvoda($product_desc);
            $proizvod->setSlikaProizvoda($product_image);
            $proizvod->setKljucneProizvoda($product_keywords);
            array_push($listaProizvoda, $proizvod);
        }
        return '{"proizvod":' . json_encode($listaProizvoda) . "}";
    }

}

?>