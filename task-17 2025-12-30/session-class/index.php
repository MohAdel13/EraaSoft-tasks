<?php
    session_start();
    require_once "models/Session.php";
    require_once "views/layouts/header.php";
    require_once "config/db.php";
    require_once "core/functions.php";
    require_once "core/validations.php";

    show_message();
    
    $page = isset($_GET['page'])? $_GET['page'] : 'home';

    switch($page){
        case 'home':
            require_once "views/home.php";
            break;
        case 'about':
            require_once "views/about.php";
            break;
        case 'profile':
            if(Session::check('user')){
                require_once "views/profile.php";
            }
            else{
                require_once "views/home.php";
            }
            break;
        case 'logout':
            if(Session::check('user')){
                require_once "controllers/auth/LogoutController.php";
            }
            else{
                require_once "views/home.php";
            }
            break;
        case 'register':
            if(!Session::check('user')){
                require_once "views/auth/register.php";
            }
            else{
                require_once "views/profile.php";
            }
            break;
        case 'auth-register':
            require_once "controllers/auth/RegisterController.php";
            break;
        case 'login':
            if(!Session::check('user')){
                require_once "views/auth/login.php";
            }
            else{
                require_once "views/profile.php";
            }
            break;
        case 'auth-login':
            require_once "controllers/auth/LoginController.php";
            break;
        default: require_once 'views/error.php';  
    }


    require_once "views/layouts/footer.php";
?>