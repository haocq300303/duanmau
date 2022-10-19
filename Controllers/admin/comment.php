<?php
    require "Models/admin/comment.php";
    if(isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];
        delete_comment($id);
    }
    $results = get_all_comment();
    $VIEW_NAME = "Views/admin/comment/list.php";
?>


