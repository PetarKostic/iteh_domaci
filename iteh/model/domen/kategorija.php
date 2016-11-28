<?php

class Kategorije {

    public $cat_id = 0;
    public $cat_title = "";

    /**
     * @return int
     */
    public function getCatId() {
        return $this->cat_id;
    }

    /**
     * @param int $cat_id
     */
    public function setCatId($cat_id) {
        $this->cat_id = $cat_id;
    }

    /**
     * @return string
     */
    public function getCatTitle() {
        return $this->cat_title;
    }

    /**
     * @param string $cat_title
     */
    public function setCatTitle($cat_title) {
        $this->cat_title = $cat_title;
    }

}
