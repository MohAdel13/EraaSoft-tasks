<?php
    require_once "App/config/config.php";
    require_once "vendor/autoload.php";

    use PmsOop\App\Database;

    $pdo = Database::get_instance($config)->get_connection();
    
    $page = isset($_GET['page'])? $_GET['page']: 'home';
    require_once "App/views/layout/header.php";

    switch($page){
        case "home":
            require_once "App/views/home/home.php";
            break;
        case "product-add":
            require_once "App/views/new_product/new_product.php";
            break;
        case "product-store":
            require_once "App/controllers/ProductController.php";
            break;
        case "product-view":
            require_once "App/views/product/product.php";
            break;
        case "cart-control":
            require_once "App/controllers/CartController.php";
            break;
        case "cart":
            require_once "App/views/cart/cart.php";
            break;
    }


    require_once "App/views/layout/footer.php";
?>