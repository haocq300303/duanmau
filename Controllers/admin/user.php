<?php
    require "Models/admin/user.php";
    if(isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];
        delete_account($id);
    }
    $results = get_all_users();
    $VIEW_NAME = "Views/admin/user/list.php";
?>

