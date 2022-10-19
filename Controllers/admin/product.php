<?php
    require "Models/admin/category.php";
    require "Models/admin/product.php";
    $act = isset($_GET['act']) ? $_GET['act'] : "";
    switch ($act) {
        case 'edit':
            if(isset($_GET['editId'])) {
                $id = $_GET['editId'];
                $row = get_one_product($id);
            }
            $categories = get_all_category();
            $VIEW_NAME = "Views/admin/product/edit.php";
            break;
        case 'list':
            if(isset($_GET['deleteId'])){
                $id = $_GET['deleteId'];
                delete_product($id);
            }
            $results = get_all_product();
            $VIEW_NAME = "Views/admin/product/list.php";
            break;
        default:
            $categories = get_all_category();
            $VIEW_NAME = "Views/admin/product/add.php";
            break;
    }
?>
