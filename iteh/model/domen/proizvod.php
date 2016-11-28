<?php

class Proizvod {

    public $proizvod_id = 0;
    public $proizvod_kategorije = 0;
    public $proizvo_brend = 0;
    public $ime_proizvoda = "";
    public $cena_proizvoda = 0;
    public $opis_proizvoda = "";
    public $slika_proizvoda = "";
    public $kljucne_proizvoda = "";

    /**
     * @return int
     */
    public function getCenaProizvoda() {
        return $this->cena_proizvoda;
    }

    /**
     * @param int $cena_proizvoda
     */
    public function setCenaProizvoda($cena_proizvoda) {
        $this->cena_proizvoda = $cena_proizvoda;
    }

    /**
     * @return string
     */
    public function getImeProizvoda() {
        return $this->ime_proizvoda;
    }

    /**
     * @param string $ime_proizvoda
     */
    public function setImeProizvoda($ime_proizvoda) {
        $this->ime_proizvoda = $ime_proizvoda;
    }

    /**
     * @return string
     */
    public function getKljucneProizvoda() {
        return $this->kljucne_proizvoda;
    }

    /**
     * @param string $kljucne_proizvoda
     */
    public function setKljucneProizvoda($kljucne_proizvoda) {
        $this->kljucne_proizvoda = $kljucne_proizvoda;
    }

    /**
     * @return string
     */
    public function getOpisProizvoda() {
        return $this->opis_proizvoda;
    }

    /**
     * @param string $opis_proizvoda
     */
    public function setOpisProizvoda($opis_proizvoda) {
        $this->opis_proizvoda = $opis_proizvoda;
    }

    /**
     * @return int
     */
    public function getProizvoBrend() {
        return $this->proizvo_brend;
    }

    /**
     * @param int $proizvo_brend
     */
    public function setProizvoBrend($proizvo_brend) {
        $this->proizvo_brend = $proizvo_brend;
    }

    /**
     * @return int
     */
    public function getProizvodId() {
        return $this->proizvod_id;
    }

    /**
     * @param int $proizvod_id
     */
    public function setProizvodId($proizvod_id) {
        $this->proizvod_id = $proizvod_id;
    }

    /**
     * @return int
     */
    public function getProizvodKategorije() {
        return $this->proizvod_kategorije;
    }

    /**
     * @param int $proizvod_kategorije
     */
    public function setProizvodKategorije($proizvod_kategorije) {
        $this->proizvod_kategorije = $proizvod_kategorije;
    }

    /**
     * @return string
     */
    public function getSlikaProizvoda() {
        return $this->slika_proizvoda;
    }

    /**
     * @param string $slika_proizvoda
     */
    public function setSlikaProizvoda($slika_proizvoda) {
        $this->slika_proizvoda = $slika_proizvoda;
    }

}

?>