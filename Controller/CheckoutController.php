<?php 
require_once('Model/CheckoutModel.php');
class CheckoutController {
    public function __construct()
    {
        $this->checkoutModel = new CheckoutModel();
    }
    
    // Load giu lieu gio hang
    public function index() {
        $tongTien = 0;
        if(isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $key => $item) {
                $SpDetail = $this->checkoutModel->getAllProductById($item['id']);
                $_SESSION['cart'][$key]['name'] = $SpDetail['name'];
                $_SESSION['cart'][$key]['price'] = $SpDetail['price'];
                $_SESSION['cart'][$key]['img'] = $SpDetail['img'];
                $tongTien+=$_SESSION['cart'][$key]['soLuong'] * $SpDetail['price'];
            }
        } else {
            $_SESSION['cart'] = [];
        }
        include_once("./views/checkout.php");
    }
    // add
    public function add() {
        if(isset($_POST['ten']) && $_POST['ten'] != "" && isset($_SESSION['cart'])) {
            $ten = $_POST['ten'];
            $diaChi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            $pttt = isset($_POST['pttt']) ? 1 : 0;
            $tongTien = 0;
            foreach($_SESSION['cart'] as $item) {
                $tongTien = $tongTien + $item['price'] * $item['soLuong'];    
            }
            $hoaDonId = $this->checkoutModel->insertHoaDon($ten, $diaChi, $sdt, $tongTien, $pttt);
            foreach($_SESSION['cart'] as $item) {
                $this->checkoutModel->insertCTHoaDon($hoaDonId, $item['id'], $item['soLuong'], $item['price']);
            }
            //  Xóa đơn hàng sau khi đặt
            unset($_SESSION['cart']);
            // Thong bao
            echo "<script>
                        alert('Đặt hàng thành công!');
                         window.location.href = 'index.php?action=listtrangchu';
                    </script>";
            exit();
        }
    }
}
?>
