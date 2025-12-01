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
        $allChiTietHoaDon = $this->chiTietHoaDon->getAll();
        include_once("./views/chitiethoadon/list.php");
    }
}
?>