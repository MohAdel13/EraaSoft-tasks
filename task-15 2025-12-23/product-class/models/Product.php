<?php
    class Product{
        private $name;
        private $price;
        private $brand;
        private $image;
        private $description;
        private $tax;

        public function getName(){
            return $this->name;
        }

         public function getPrice(){
            return $this->price;
        }

         public function getBrand(){
            return $this->brand;
        }

         public function getImage(){
            return $this->image;
        }

         public function getDescription(){
            return $this->description;
        }

         public function getTax(){
            return $this->tax;
        }

        public function priceAfterDiscount(){
            return $this->price - ($this->price * 10/100);
        }

        public function getFinalPrice(){
            $price = $this->priceAfterDiscount();
            return  $price + ($price * $this->tax/100);
        }

        public function __construct($name, $price, $brand, $image, $description, $tax){
            $this->name = $name;
            $this->price = $price;
            $this->brand = $brand;
            $this->image = $image;
            $this->description = $description;
            $this->tax = $tax;
        }
    }
?>