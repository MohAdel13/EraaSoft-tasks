<?php
    Session::remove('user');

    header("Location: index.php?page=login");
    die();
?>