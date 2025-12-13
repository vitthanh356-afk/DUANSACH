<?php 
include_once("pdo.php");
class ShopModel {
    // List
    public function getAll() {
        $sql = "select * from sanpham where deleted = 0";
        return pdo_query($sql);
    }
    // Detail
    public function getOne($id) {
        $sql = "select * from sanpham where id = ?";
        return pdo_query_one($sql, $id);
    }
}
?>