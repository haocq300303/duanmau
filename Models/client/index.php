<?php
require "Models/db.php";
    // Get All categoties
function get_all_category(){
    $sql_get_categoty = "SELECT * FROM categories";
    $categories = getData($sql_get_categoty, "FETCH_ALL");
    return $categories;
}

    // get product dac biet
function get_product_special() {
    $sql_get_product_special = "SELECT * FROM products WHERE especially='true'";
    $product_specials = getData($sql_get_product_special, "FETCH_ALL");
    return $product_specials;
}

    // get All product
function get_all_product() {
    $sql = "SELECT * FROM products";
    $products = getData($sql, "FETCH_ALL");
    return $products;
}

function get_9_product_new() {
    $sql = "SELECT * FROM products WHERE 1 ORDER BY id DESC LIMIT 0,9";
    $products = getData($sql, "FETCH_ALL");
    return $products;
}

function insert_account($username, $email, $password){
    $sql = "INSERT INTO users(username, email, password) values('$username', '$email', '$password')";
    getData($sql, '');
}

function checkuser($username, $password){
    $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
    $user = getData($sql, 'FETCH_ONE');
    return $user;
}

function get_one_product($id) {
    $sql = "SELECT * FROM products WHERE id='$id'";
    $result = getData($sql, "FETCH_ONE");
    return $result;
}

function insert_comment($content, $id_user, $name_user,  $id_product, $date_comment) {
    $sql = "INSERT INTO comments(content, id_user, name_user, id_product, date_comment) values('$content', '$id_user', '$name_user', '$id_product',  '$date_comment')";
    getData($sql, '');
}

function get_all_comment_by_id($id_product) {
    $sql = "SELECT * FROM comments WHERE id_product= '$id_product' ORDER BY id DESC";
    $results = getData($sql, 'FETCH_ALL');
    return $results;
}

function loadall_pro_top10(){
    $sql = "SELECT * FROM products WHERE 1 ORDER BY view DESC LIMIT 0,10";
    $listpro = getData($sql, 'FETCH_ALL');
    return $listpro;
}

function get_product_by_category($id){
    $sql = "SELECT * FROM products WHERE id_category = '$id'";
    $listpro = getData($sql, "FETCH_ALL");
    return $listpro;
}

function checkEmail($email) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = getData($sql, "FETCH_ONE");
    return $result;
}

function get_one_user($id) {
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = getData($sql, 'FETCH_ONE');
    return $result;
}

function update_account($id, $username, $email, $password){
    $sql = "UPDATE users SET username='$username', email='$email', password='$password'  WHERE id='$id'";
    getData($sql, '');
}

?>
