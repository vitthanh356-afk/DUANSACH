<?php 
include_once("pdo.php");
class ChiTietHoaDon {
    // List
    public function getAll() {
        $sql = "select * from chitiethoadon";
        return pdo_query($sql);
    }
    // Lọc id
    public function getByHoaDon($id_hoadon) {
        $sql = "SELECT * FROM chitiethoadon WHERE id_hoadon = ?";
        return pdo_query($sql, $id_hoadon);
}
}
?>