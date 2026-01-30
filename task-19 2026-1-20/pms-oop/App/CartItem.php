<?php

    namespace PmsOop\App;

    class CartItem{
        private Product $product;
        private int $qty;

        public function __construct(Product $product, int $qty)
        {
            $this->product = $product;
            $this->qty = $qty;
        }

        public function set_product(Product $product): void{
            $this->product = $product;
        }

        public function get_product(): Product{
            return $this->product;
        }

        public function set_qty(int $qty): void{
            $this->qty = $qty;
        }

        public function get_qty(): int{
            return $this->qty;
        }

        public function get_subtotal(): float{
            return $this->qty * $this->product->get_price();
        }

        public function to_array(): array{
            return [
                    'product' => [
                        'id' => $this->product->get_id(),
                        'name' => $this->product->get_name(),
                        'price' => $this->product->get_price()
                    ],
                    'qty' => $this->qty,
                    'subtotal' => $this->get_subtotal()
            ];
        }

        public static function from_array(array $item): CartItem{
            $product = new Product($item['product']['id'], $item['product']['name'], $item['product']['price'], "");
            $qty = $item['qty'];
            return new self($product, $qty);
        }
    }
?>