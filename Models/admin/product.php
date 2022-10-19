<?php
    function add_product($name, $price, $reduced_price, $input_day, $id_category, $especially, $image, $desc, $view) {
        $sql = "INSERT INTO products VALUES (null,'$name', '$price', '$reduced_price', '$input_day', '$id_category', 
            '$especially', '$image', '$desc', '$view');";
        getData($sql,'');
    }

    function get_all_product() {
        $sql = "SELECT * FROM products";
        $results = getData($sql,'FETCH_ALL');
        return $results;
    }
    function delete_product($id) {
        $sql = "DELETE FROM products WHERE id='$id';ALTER TABLE categories AUTO_INCREMENT= '$id';";
        getData($sql,'');
    }
    function get_one_product($id) {
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = getData($sql, "FETCH_ONE");
        return $result;
    }
    function edit_product($id, $name, $price, $reduced_price, $input_day, $id_category, $especially, $image, $desc, $view){
        $sql = "UPDATE products SET name='$name', price='$price', reduced_price='$reduced_price', input_day='$input_day', 
            id_category='$id_category', especially='$especially', image='$image', description='$desc', view='$view'  WHERE id='$id'";
        getData($sql,'');
    }
?>
