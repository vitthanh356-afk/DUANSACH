<?php
session_start();

// Nếu chưa đăng nhập → chuyển về login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// ====================== CONTROLLER ======================
include_once("Controller/DanhMucController.php");
include_once("Controller/SanPhamController.php");
include_once("Controller/HoaDonController.php");
include_once("Controller/ChiTietHoaDonController.php");
include_once("Controller/NhaXuatBanController.php");
include_once("Controller/TaiKhoanController.php");

$danhMuc = new DanhMucController();
$sanPham = new SanPhamController();
$hoaDon = new HoaDonController();
$chiTietHoaDon = new ChiTietHoaDonController();
$nhaXuatBan = new NhaXuatBanController();
$taiKhoan = new TaiKhoanController();

// ====================== ROUTER ======================
if (isset($_GET['action']) && $_GET['action'] != "") {

    $action = $_GET['action'];

    switch ($action) {

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

        // chitiethoadon
        case "listchitiethoadon":
            $chiTietHoaDon->index();
            break;

        // nhaxuatban
        case "listnhaxuatban":
            $nhaXuatBan->index();
            break;
        case "createnhaxuatban":
            $nhaXuatBan->create();
            break;
        case "storenhaxuatban":
            $nhaXuatBan->store();
            break;
        case "editnhaxuatban":
            $nhaXuatBan->edit();
            break;
        case "updatenhaxuatban":
            $nhaXuatBan->update();
            break;
        case "deletenhaxuatban":
            $nhaXuatBan->delete();
            break;
        case "restorenhaxuatban":
            $nhaXuatBan->restore();
            break;

        // taikhoan
        case "listtaikhoan":
            $taiKhoan->index();
            break;
        case "createtaikhoan":
            $taiKhoan->create();
            break;
        case "storetaikhoan":
            $taiKhoan->store();
            break;
        case "edittaikhoan":
            $taiKhoan->edit();
            break;
        case "updatetaikhoan":
            $taiKhoan->update();
            break;
        case "deletetaikhoan":
            $taiKhoan->delete();
            break;
        case "restoretaikhoan":
            $taiKhoan->restore();
            break;
    }

} else {
    // Mặc định vào trang danh mục
    $danhMuc->index();
}
?>
