<?php 
include_once("Model/SanPham.php");
include_once("Model/ThongKe.php");
class ThongKeController {
    private $sanPham;
    private $thongKe;
    public function __construct()
    {
        $this->sanPham = new SanPham();
        $this->thongKe = new ThongKe();
    }
    // list
    public function index() {
        $type = $_GET['type'] ?? 'all';
        switch ($type) {
            case 'bestseller':
                $allSanPham = $this->sanPham->getBestSeller();
                break;
            case 'newest':
                $allSanPham = $this->sanPham->getNewest();
                break;
            default:
                $allSanPham = $this->sanPham->getAll();
                break;
        }
        // Thống kê
        $totalDoanhThu = $this->thongKe->getTotalDoanhThu();
        $totalHoaDon = $this->thongKe->getTotalHoaDon();
        $totalDaBan = $this->thongKe->getTotalDaBan();
        include_once("./views/thongke/list.php");
    }
}
?>