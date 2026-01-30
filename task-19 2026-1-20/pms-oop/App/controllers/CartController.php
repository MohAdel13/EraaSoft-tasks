<?php

    namespace PmsOop\App\controllers;

    use PDO;
    use PmsOop\App\Cart;
    use PmsOop\App\Product;

    class CartController{
        public static function handle(PDO $pdo){
            $cart = new Cart();
            $action = $_GET['action'];
            switch($action){
                case "add":
                    if($_SERVER['REQUEST_METHOD'] === 'GET'){
                        $id = (int) $_GET['id'];
                        $qty = (float) $_GET['qty'];
                        $product = Product::get_product_by_id($pdo, $id);
                        if($product){
                            $cart->add_to_cart($product, $qty);
                            set_messages([['content' => "Product Added!", 'type'=> 'success']]);
                        }
                    }
                    break;

                case "remove":
                    if($_SERVER['REQUEST_METHOD'] === 'GET'){
                        $id = (int) $_GET['id'];
                        $product = Product::get_product_by_id($pdo, $id);
                        if($product){
                            $cart->remove_from_cart($product);
                            set_messages([['content' => "Product Deleted!", 'type'=> 'danger']]);
                        }
                    }
                    break;

                case "clear":
                    if($_SERVER['REQUEST_METHOD'] === 'GET'){
                        $cart->clear();
                        set_messages([['content' => "Cart is Cleared!", 'type'=> 'danger']]);
                    }
                    break;
            }

            header("Location: index.php?page=cart");
            die();

        }
    }

    CartController::handle($pdo);
?>