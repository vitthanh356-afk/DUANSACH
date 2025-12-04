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
}
?>