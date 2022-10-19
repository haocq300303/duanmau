<?php
$act = isset($_GET['act']) ? $_GET['act'] : "";
switch ($act) {
    case 'edit':
        $VIEW_NAME = "Views/admin/category/edit.php";
        break;
    case 'list':
        $VIEW_NAME = "Views/admin/category/list.php";
        break;
    default:
        $VIEW_NAME = "Views/admin/category/add.php";
        break;
}


