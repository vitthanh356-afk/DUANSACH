<?php 
include_once("Model/NhaXuatBan.php");
class NhaXuatBanController {
    private $nhaXuatBan;
    public function __construct()
    {
        $this->nhaXuatBan = new NhaXuatBan();
    }
    // List
    public function index() {
        $allNhaXuatBan = $this->nhaXuatBan->getAll();
        include_once("./views/nhaxuatban/list.php");
    }
    // Thêm
    public function create() {
        include_once("./views/nhaxuatban/create.php");
    }
    public function store() {
        if(isset($_POST['name'])) {
            $ten = $_POST['name'];
            $diaChi = $_POST['address'];
            $this->nhaXuatBan->insert($ten, $diaChi);
            header("Location:index.php?action=listnhaxuatban");
        }    
    }
    // Sửa
    public function edit() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $nhaXuatBan = $this->nhaXuatBan->getOne($id);
            include_once("./views/nhaxuatban/edit.php");
        }
    }
    public function update() {
        if(isset($_POST['name'])) {
            $id = $_POST['id'];
            $ten = $_POST['name'];
            $diaChi = $_POST['address'];
            $this->nhaXuatBan->update($id, $ten, $diaChi);
            header("Location:index.php?action=listnhaxuatban");
        }
    }
    // Xóa
    public function delete() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->nhaXuatBan->delete($id);
            header("Location:index.php?action=listnhaxuatban");
        }
    }
    // Khôi phục
    public function restore() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->nhaXuatBan->restore($id);
            header("Location:index.php?action=listnhaxuatban");
        }
    }
}
?>