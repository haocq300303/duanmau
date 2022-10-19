<?php
    require "Models/db.php";
    function add_category($name){
        $sql = "INSERT INTO categories VALUES (null,'$name')";
        getData($sql,'');
    }

    function delete_category($id) {
        $sql = "DELETE FROM categories WHERE id='$id';ALTER TABLE categories AUTO_INCREMENT= '$id';";
        getData($sql,'');
    }

    function get_all_category(){
        $sql = "SELECT * FROM categories";
        $results = getData($sql, "FETCH_ALL");
        return $results;
    }
    function get_one_category($id) {
        $sql = "SELECT * FROM categories WHERE id='$id'";
        $result = getData($sql, "FETCH_ONE");
        return $result;
    }

    function edit_category($name,$id){
        $sql = "UPDATE categories SET name='$name' WHERE id='$id'";
        getData($sql,'');
    }
?>
