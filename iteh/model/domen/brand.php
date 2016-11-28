<?php

class Brand {

    public $brand_id = 0;
    public $brand_title = "";

    /**
     * @return int
     */
    public function getBrandId() {
        return $this->brand_id;
    }

    /**
     * @param int $brand_id
     */
    public function setBrandId($brand_id) {
        $this->brand_id = $brand_id;
    }

    /**
     * @return string
     */
    public function getBrandTitle() {
        return $this->brand_title;
    }

    /**
     * @param string $brand_title
     */
    public function setBrandTitle($brand_title) {
        $this->brand_title = $brand_title;
    }

}
