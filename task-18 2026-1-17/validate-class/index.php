<?php
    require_once "App/Core/Validation/Validator.php";
    require_once "App/Core/Functions.php";
    session_start();
    get_messages();

    $page = isset($_GET['page'])? $_GET['page']: "register";

    switch($page){
        case "register":
            require_once "App/Views/RegisterView.php";
            break;
        case "validate":
            require_once "App/Controllers/RegisterController.php";
            break;
        default:
            require_once "App/Views/error.php";
            break;
    }
?>