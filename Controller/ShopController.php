<?php 
require_once('Model/ShopModel.php');
class ShopController {
    public function __construct()
    {
        $this->shopModel = new ShopModel();
    }
    public function index() {
        $allSanPham = $this->shopModel->getAll();
        include_once("./views/shop.php");
    }
    public function vechungtoi() {
        include_once("./views/about.php");
    }
    public function lienhe() {
        include_once("./views/lienhe.php");
    }
    public function trangchu() {
        include_once("./views/home.php");
    }
    // Chi tiết
    public function detail() {
        $id = $_GET['id'] ?? 0;
        $allSanPham = $this->shopModel->getOne($id);
        include_once("./views/detail.php");
    }
}
?>