<?php 
include_once('Controller/ShopController.php');
include_once('Controller/CartController.php');
include_once('Controller/CheckoutController.php');

$shop = new ShopController();
$cart = new CartController();
$checkout = new CheckoutController();

session_start();
if (isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
    switch ($action) {
        // shop
        case "listshop":
            $shop->index();
            break;
        // Giao dien
        case "listvechungtoi":
            $shop->vechungtoi();
            break;
        case "listlienhe":
            $shop->lienhe();
            break;
        case "listtrangchu":
            $shop->trangchu();
            break;
        // cart
        case "listgiohang":
            $cart->index();
            break;
        case "addcart":
            $cart->add();
            break;
        case "deletecart":
            $cart->delete();
            break;
        // checkout
        case "showcheckout":
            $checkout->index();
            break;
        case "checkout":
            $checkout->add();
            break;
    }
}
?>