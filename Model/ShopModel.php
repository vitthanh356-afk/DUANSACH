<?php 
include_once("pdo.php");
class ShopModel {
    // List
    public function getAll() {
        $sql = "select * from sanpham where deleted = 0";
        return pdo_query($sql);
    }
}
?>