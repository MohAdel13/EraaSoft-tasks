<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'blog_app';

    try{
        $conn = mysqli_connect($hostname, $username, $password, $database);
    }
    catch(Exception){
        header('Location: views/mentainance.php');
        die();
    }
?>