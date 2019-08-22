<?php
include "lumacon.php";

class bookList{

    private $name;
    private $img;
    private $pdf;

    public function __construct($name, $img, $pdf){
        $this->name = $name;
        $this->img = $img;
        $this->pdf = $pdf;
    }

    public function getPdfFile(){
        return $this->pdf;
    }

    public function getImageFile(){
        return $this->img;
    }

    public function getBookName(){
        return $this->name;
    }
}

?>