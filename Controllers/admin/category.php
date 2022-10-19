<?php
    include "Models/admin/category.php";
    $act = isset($_GET['act']) ? $_GET['act'] : "add";
    switch ($act){
        case 'add':
            $VIEW_NAME = "Views/admin/category/add.php";
            break;
        case 'edit':
            if(isset($_GET['editId'])) {
                $id = $_GET['editId'];
                $row = get_one_category($id);
            }
            $VIEW_NAME = "Views/admin/category/edit.php";
            break;
        case 'list':
            if(isset($_GET['deleteId'])){
                $id = $_GET['deleteId'];
                delete_category($id);
            }
            $results = get_all_category();
            $VIEW_NAME = "Views/admin/category/list.php";
            break;
        default:
            break;
    }
?>
