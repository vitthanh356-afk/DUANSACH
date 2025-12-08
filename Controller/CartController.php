<?php 
require_once('Model/CartModel.php');
class CartController {
    public function __construct()
    {
        $this->cartModel = new CartModel();
    }
    // Add
    public function add() {
        if(isset($_GET['idsp'])) {
            $idSP = $_GET['idsp'];
            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            } 

            $SP = false;
            foreach($_SESSION['cart'] as $key => $item) {
                if($item['id'] == $idSP) {
                    $_SESSION['cart'][$key]['soLuong']++;
                    $SP = true;
                    break;
                }
            }  

            if ($SP == false) {
                $_SESSION['cart'][] = [
                "id" => $idSP,
                "soLuong" => 1
                ];
            }
            header("Location: index.php?action=listgiohang");
        }
    }
    // Hien thi
    public function index() {
        $tongTien = 0;
        if(isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $key => $item) {
                $SpDetail = $this->cartModel->getAllProductById($item['id']);
                $_SESSION['cart'][$key]['name'] = $SpDetail['name'];
                $_SESSION['cart'][$key]['price'] = $SpDetail['price'];
                $_SESSION['cart'][$key]['img'] = $SpDetail['img'];
                $tongTien+=$_SESSION['cart'][$key]['soLuong'] * $SpDetail['price'];
            }
        } else {
            $_SESSION['cart'] = [];
        }
        include_once("./views/cart.php");
    }
    // Delete
    public function delete() {
        if(isset($_GET['idsp'])) {
            $idSP = $_GET['idsp'];

            if(isset($_SESSION['cart'])) {
                foreach($_SESSION['cart'] as $key => $item) {
                    if($item['id'] == $idSP) {
                        unset($_SESSION['cart'][$key]);
                        break;
                    }
                }
                // Reset lại index mảng để tránh lỗi
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
        }
        header("Location: index.php?action=listgiohang");
        }
}
?>
