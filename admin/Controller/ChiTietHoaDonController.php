<?php 
include_once("Model/ChiTietHoaDon.php");
include_once("Model/HoaDon.php");
include_once("Model/SanPham.php");
class ChiTietHoaDonController {
    private $chiTietHoaDon;
    private $hoaDon;
    private $sanPham;
    public function __construct()
    {
        $this->chiTietHoaDon = new ChiTietHoaDon();
        $this->hoaDon = new HoaDon();
        $this->sanPham = new SanPham();
    }
    // List
    public function index() {
        $id = $_GET['id'] ?? 0;
        $hoaDon = $this->hoaDon->getOne($id);
        $allChiTietHoaDon = $this->chiTietHoaDon->getByHoaDon($id);
        foreach($allChiTietHoaDon as $key => $item) {
            $sanPham = $this->sanPham->getOne($item['id_sanpham']);
            $allChiTietHoaDon[$key]['img'] = $sanPham['img'];
            $allChiTietHoaDon[$key]['name'] = $sanPham['name'];
        }
        include_once("./views/chitiethoadon/list.php");
    }
    // Update trạng thái
    public function update() {
        if (isset($_POST['id']) && isset($_POST['trangthai'])) {
            $id = $_POST['id'];
            $trangThai = $_POST['trangthai'];
            $this->chiTietHoaDon->updateStatus($id, $trangThai);
            header("Location: index.php?action=listchitiethoadon&id=" . $id);
            exit();
        } else {
            // nếu thiếu dữ liệu thì quay về danh sách hoá đơn
            header("Location: index.php?action=listhoadon");
        }
    }
}
?>