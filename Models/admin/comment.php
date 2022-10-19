<?php
    require "Models/db.php";
    function insert_comment($content, $id_user, $name_user,  $id_product, $date_comment) {
        $sql = "INSERT INTO comments(content, id_user, id_product, date_comment) values('$content', '$id_user', '$id_product', '$name_user', '$date_comment')";
        getData($sql, '');
    }

    function get_all_comment() {
        $sql = "SELECT * FROM comments";
        $results = getData($sql, 'FETCH_ALL');
        return $results;
    }

    function get_all_comment_by_id($id_product) {
        $sql = "SELECT * FROM comments WHERE id_product= '$id_product' ORDER BY id DESC";
        $results = getData($sql, 'FETCH_ALL');
        return $results;
    }

    function delete_comment($id) {
        $sql = "DELETE FROM  comments WHERE id='$id'";
        getData($sql, '');
    }
?>
