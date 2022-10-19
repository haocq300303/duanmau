<?php
    $url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
    switch ($url){
        case "/admin":
            include "Controllers/admin/index.php";
            break;
        default:
            include "Controllers/client/index.php";
            break;
    }
?>