<?php 
include_once("pdo.php");
class ThongKe {
    // Tổng doanh thu
    public function getTotalDoanhThu() {
        $sql = "SELECT SUM(tongtien) as totalDoanhThu FROM hoadon";
        return pdo_query_one($sql);
    }
    // Tổng hóa đơn
    public function getTotalHoaDon() {
        $sql = "SELECT COUNT(id) as totalHoaDon FROM hoadon";
        return pdo_query_one($sql);
    }
    // Tổng đã bán
    public function getTotalDaBan() {
        $sql = "SELECT SUM(soluong) as totalHoaDon FROM chitiethoadon";
        return pdo_query_one($sql);
    }
}
?>