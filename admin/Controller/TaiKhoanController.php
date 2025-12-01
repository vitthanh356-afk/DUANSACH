<?php 
include_once("Model/TaiKhoan.php");
class TaiKhoanController {
    private $taiKhoan;
    public function __construct()
    {
        $this->taiKhoan = new TaiKhoan();
    }
    // List
    public function index() {
        $allTaiKhoan = $this->taiKhoan->getAll();
        include_once("./views/taikhoan/list.php");
    }
    // Thêm
    public function create() {
        include_once("./views/taikhoan/create.php");
    }
    public function store() {
        if(isset($_POST['user'])) {
            $nguoiDung = $_POST['user'];
            $matKhau = $_POST['pass'];
            $email = $_POST['email'];
            $diaChi = $_POST['address'];
            $sdt = $_POST['tel'];
            $this->taiKhoan->insert($nguoiDung, $matKhau, $email, $diaChi, $sdt);
            header("Location:index.php?action=listtaikhoan");
        }    
    }
    // Sửa
    public function edit() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $taiKhoan = $this->taiKhoan->getOne($id);
            include_once("./views/taikhoan/edit.php");
        }
    }
    public function update() {
        if(isset($_POST['user'])) {
            $id = $_POST['id'];
            $nguoiDung = $_POST['user'];
            $matKhau = $_POST['pass'];
            $email = $_POST['email'];
            $diaChi = $_POST['address'];
            $sdt = $_POST['tel'];
            $this->taiKhoan->update($id, $nguoiDung, $matKhau, $email, $diaChi, $sdt);
            header("Location:index.php?action=listtaikhoan");
        }
    }
    // Xóa
    public function delete() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->taiKhoan->delete($id);
            header("Location:index.php?action=listtaikhoan");
        }
    }
    // Khôi phục
    public function restore() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->taiKhoan->restore($id);
            header("Location:index.php?action=listtaikhoan");
        }
    }
}
?>