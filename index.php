<?php 
include_once('Controller/ShopController.php');
$shop = new ShopController();
if (isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
    switch ($action) {
        // shop
        case "listshop":
            $shop->index();
            break;
    }
}
?>