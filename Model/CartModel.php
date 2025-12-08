<?php 
include_once("pdo.php");

class CartModel {
    public function getAllProductById($id) {
        $sql = "select * from sanpham where deleted = 0 and id = ?";
        return pdo_query_one($sql, $id);
    }
}
?>