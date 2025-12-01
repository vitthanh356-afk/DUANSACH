<?php 
include_once("Model/HoaDon.php");
class HoaDonController {
    private $hoaDon;
    public function __construct()
    {
        $this->hoaDon = new HoaDon();
    }
    // List
    public function index() {
        $allHoaDon = $this->hoaDon->getAll();
        include_once("./views/hoadon/list.php");
    }
    // Thêm
    public function create() {
        include_once("./views/hoadon/create.php");
    }
    public function store() {
        if(isset($_POST['ten'])) {
            $ten = $_POST['tenkhachhang'];
            $diaChi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            $ngayGio = $_POST['ngaygiodat'];
            $tong = $_POST['tongtien'];
            $this->hoaDon->insert($ten, $diaChi, $sdt, $ngayGio, $tong);
            header("Location:index.php?action=listhoadon");
        }    
    }
    // Sửa
    public function edit() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $hoaDon = $this->hoaDon->getOne($id);
            include_once("./views/hoadon/edit.php");
        }
    }
    public function update() {
        if(isset($_POST['ten'])) {
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $diaChi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            $ngayGio = $_POST['ngaygiodat'];
            $tong = $_POST['tongtien'];
            $this->hoaDon->update($id, $ten, $diaChi, $sdt, $ngayGio, $tong);
            header("Location:index.php?action=listhoadon");
        }
    }
}
?>