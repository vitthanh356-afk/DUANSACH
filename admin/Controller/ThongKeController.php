<?php 
include_once("Model/SanPham.php");
class ThongKeController {
    private $sanPham;
    public function __construct()
    {
        $this->sanPham = new SanPham();
    }
    // List
    public function index() {
        include_once("./views/thongke/list.php");
    }
    // Listbanchay
    public function bestseller() {
        $allSanPham = $this->sanPham->getBestSeller();
        include_once("./views/thongke/listbanchay.php");
    }
    // Listmoinhat
    public function newest() {
        $allSanPham = $this->sanPham->getNewest();
        include_once("./views/thongke/listmoinhat.php");
    }
}
?>