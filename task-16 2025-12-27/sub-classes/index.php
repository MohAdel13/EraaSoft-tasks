<?php
    require_once "views/layouts/header.php";
    require_once "models/Product.php";
    require_once "models/Book.php";
    require_once "models/BabyCar.php";

    $page = isset($_GET['page'])? $_GET['page']: "products";

    switch($page){
        case "products":
            require_once "views/products.php";
            break;
        default:
            require_once "views/error.php";
            break;
    }

    require_once "views/layouts/footer.php";
?>