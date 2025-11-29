<?php
include_once("Controller/DanhMucController.php");
include_once("Controller/SanPhamController.php");
include_once("Controller/HoaDonController.php");

$danhMuc = new DanhMucController();
$sanPham = new SanPhamController();
$hoaDon = new HoaDonController();
if(isset($_GET['action']) && $_GET['action'] != "") {
$action = $_GET['action'];
    switch($action) {
        //danhmuc
        case "listdanhmuc":
            $danhMuc->index();
            break;
        case "createdanhmuc":
            $danhMuc->create();
            break;
        case "storedanhmuc":
            $danhMuc->store();
            break;
        case "editdanhmuc":
            $danhMuc->edit();
            break;
        case "updatedanhmuc":
            $danhMuc->update();
            break;
        case "deletedanhmuc":
            $danhMuc->delete();
            break;
        case "restoredanhmuc":
            $danhMuc->restore();
            break;
        //sanpham
        case "listsanpham":
            $sanPham->index();
            break;
        case "createsanpham":
            $sanPham->create();
            break;
        case "storesanpham":
            $sanPham->store();
            break;
        case "editsanpham":
            $sanPham->edit();
            break;
        case "updatesanpham":
            $sanPham->update();
            break;
        case "deletesanpham":
            $sanPham->delete();
            break;
        case "restoresanpham":
            $sanPham->restore();
            break;
        //hoadon
        case "listhoadon":
            $hoaDon->index();
            break;
        case "createhoadon":
            $hoaDon->create();
            break;
        case "storehoadon":
            $hoaDon->store();
            break;
        case "edithoadon":
            $hoaDon->edit();
            break;
        case "updatehoadon":
            $hoaDon->update();
            break;
    }
} else {
    $danhMuc->index();
}

?>