<?php 
include_once("Model/ChiTietHoaDon.php");
class ChiTietHoaDonController {
    private $chiTietHoaDon;
    public function __construct()
    {
        $this->chiTietHoaDon = new ChiTietHoaDon();
    }
    // List
    public function index() {
        $id = $_GET['id'] ?? 0;
        $allChiTietHoaDon = $this->chiTietHoaDon->getByHoaDon($id);
        include_once("./views/chitiethoadon/list.php");
    }
}
?>