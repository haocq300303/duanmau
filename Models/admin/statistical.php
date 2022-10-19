<?php
require "Models/db.php";
    function get_all_statistical() {
        $sql = "SELECT categories.id as madm, categories.name as tendm, count(products.id) as countsp, min(products.price) as minprice,  max(products.price) as maxprice, avg(products.price) as avgprice";
        $sql.= " FROM products LEFT JOIN categories on categories.id = products.id_category";
        $sql.= " GROUP BY categories.id ORDER BY categories.id DESC";
        $listtk = getData($sql, 'FETCH_ALL');
        return $listtk;
    }
?>