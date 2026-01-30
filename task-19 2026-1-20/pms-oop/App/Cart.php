<?php
    namespace PmsOop\App;

    class Cart{
        private array $items=[];
        private const SESSION_KEY = "cart_items";

        public function __construct(){
            if(session_status() === PHP_SESSION_DISABLED){
                session_start();
            }
            if(isset($_SESSION[self::SESSION_KEY])){
                $this->load_from_session($_SESSION[self::SESSION_KEY]);
            }
        }

        public function get_cart_items(): array{
            return $this->items;
        }

        public function get_total_quantity(): int{
            $total = 0;
            foreach($this->items as $item){
                $total += $item->get_qty();
            }

            return $total;
        }

        public function get_total(): float{
            $total = 0.0;
            foreach($this->items as $item){
                $total += $item->get_subtotal();
            }

            return $total;
        }

        private function load_from_session(array $data): void{
            foreach($data as $itemData){
                $this->items[] = CartItem::from_array($itemData);
            }
        }

        private function save_to_session(): void{
            $data = [];
            foreach($this->items as $item){
                $data[] = $item->to_array();
            }
            $_SESSION[self::SESSION_KEY] = $data;
        }

        public function add_to_cart(Product $product, int $qty): void{
            foreach($this->items as $item){
                if($item->get_product()->get_id() === $product->get_id()){
                    $item->set_qty($item->get_qty() + $qty);
                    $this->save_to_session();
                    return;
                }
            }

            $this->items[] = new CartItem($product, $qty);
            $this->save_to_session();
        }

        public function remove_from_cart(Product $product): void{
            for($i = 0; $i < count($this->items); $i++){
                if($this->items[$i]->get_product()->get_id() === $product->get_id()){
                    unset($this->items[$i]);
                    $this->items = array_values($this->items);
                    $this->save_to_session();
                    break;
                }
            }
        }

        public function clear(): void{
            $this->items = [];
            unset($_SESSION[self::SESSION_KEY]);
        }
    }
?>