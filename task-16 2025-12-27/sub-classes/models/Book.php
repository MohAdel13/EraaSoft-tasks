<?php
    class Book extends Product{
        public $publishers=[];
        public $writter;
        public $color;
        public $supplier;


        public function choose_publisher(){
            if(!empty($this->publishers)){
                $index =  rand(0, count($this->publishers) - 1);

                return $this->publishers[$index];
            }

            return null;
        }

        public function set_publisher($publisher){
            $this->publishers[] = $publisher;
        }

        public function show_all_publishers(){
            return $this->publishers;
        }

        public function __construct($name, $price, $image, $description, $publishers, $writter, $color, $supplier)
        {
            parent::__construct($name, $price, $image, $description);
            $this->publishers = $publishers;
            $this->writter = $writter;
            $this->color = $color;
            $this->supplier = $supplier;
        }
    }
?>