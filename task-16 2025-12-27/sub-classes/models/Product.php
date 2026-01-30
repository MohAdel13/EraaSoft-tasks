<?php
    class Product{
        public $name;
        public $price;
        public $image;
        public $description;

        public function upload_image($image){
            $this->image = $image;
        }

         public function calc_price(){
            return $this->price;
        }

        public function __construct($name, $price, $image, $description){
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->description = $description;
        }
    }
?>