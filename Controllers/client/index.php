<?php
require "Models/client/index.php";
    $page = isset($_GET["page"]) ? $_GET["page"] : "home";
    $categories = get_all_category();
    $all_10_products = loadall_pro_top10();
    switch ($page){
        case "home":
            $product_specials = get_product_special();
            $products = get_9_product_new();
            $VIEW_NAME = "home.php";
            break;
        case "product":
            if(isset($_GET['category'])) {
                $iddm = $_GET['category'];
                $results = get_product_by_category($iddm);
            } else {
                $results = get_all_product();
            }
            $VIEW_NAME = "product.php";
            break;
        case "detail":
            if(isset($_GET['idPro'])) {
                $id = $_GET['idPro'];
                $row = get_one_product($id);
            }
            $VIEW_NAME = "detail.php";
            break;
        case "introduce":
            $VIEW_NAME = "introduce.php";
            break;
        case "contact":
            $VIEW_NAME = "contact.php";
            break;
        case "feedback":
            $VIEW_NAME = "feedback.php";
            break;
        case "hoidap":
            $VIEW_NAME = "q&a.php";
            break;
        case "register":
            $VIEW_NAME = "register.php";
            break;
        case "quenmk":
            $VIEW_NAME = "quenmk.php";
            break;
        case "capnhattk":
            $VIEW_NAME = "capnhattk.php";
            break;
        default:
            echo '<h1>404 not found</h1>';
            break;
    }
    require "Views/client/layout.php";
?>