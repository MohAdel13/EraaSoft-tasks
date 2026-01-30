<?php
    class BabyCar extends Product{
        public $age;
        public $weight;
        public $materials=[];
        public $specialTax;

        public function display_materials(){
            return $this->materials;
        }

        public function get_final_price(){
            $finalPrice = $this->price + ($this->price * $this->specialTax / 100);

            return $finalPrice;
        }

        public function __construct($name, $price, $image, $description, $age, $weight, $materials, $specialTax)
        {
            parent::__construct($name, $price, $image, $description);
            $this->age = $age;
            $this->weight = $weight;
            $this->materials = $materials;
            $this->specialTax = $specialTax;
        }
    }
?>