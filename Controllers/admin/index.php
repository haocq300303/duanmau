<?php
    $page = isset($_GET["page"]) ? $_GET["page"] : "";
    switch ($page){
        case "category":
            require "category.php";
            break;
        case "product":
            require "product.php";
            break;
        case "user":
            require "user.php";
            break;
        case "comment":
            require "comment.php";
            break;
        case "statistical":
            require "Models/admin/statistical.php";
            $results = get_all_statistical();
            require "statistical.php";
            break;
        default:
            $VIEW_NAME = "home.php";
            break;
    }
    require "Views/admin/layout.php";
?>