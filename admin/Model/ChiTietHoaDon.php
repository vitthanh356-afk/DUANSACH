<?php 
include_once("pdo.php");
class ChiTietHoaDon {
    // List
    public function getAll() {
        $sql = "select * from chitiethoadon";
        return pdo_query($sql);
    }
}
?>