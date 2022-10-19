<?php
require "Models/db.php";
function insert_account($username, $email, $password){
    $sql = "INSERT INTO users(username, email, password) values('$username', '$email', '$password')";
    getData($sql, '');
}
function checkuser($username, $password){
    $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
    $user = getData($sql, 'FETCH_ONE');
    return $user;
}
function checkemail($email){
    $sql = "SELECT * FROM users WHERE email='".$email."'";
    $user = getData($sql, 'FETCH_ONE');
    return $user;
}
function update_account($id,$user, $pass, $email, $address, $tel){
    $sql = "UPDATE `account` SET `user` = '$user', `pass` = '$pass', `email` = '$email', `address` = '$address', `tel` = '$tel' WHERE `account`.`id` = $id";
    pdo_execute($sql);
}
function get_all_users(){
    $sql = "SELECT * FROM users";
    $results = getData($sql,'FETCH_ALL');
    return $results;
}
function delete_account($id){
    $sql = "DELETE FROM  users WHERE id=".$id;
    getData($sql, '');
}
?>