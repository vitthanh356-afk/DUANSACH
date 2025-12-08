<?php 
include_once("layout/header.php");
?>
<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">

            <!-- Cột thông tin thanh toán -->
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="checkout-address">
                    <div class="title-left">
                        <h3>Thông tin thanh toán</h3>
                    </div>

                    <form class="needs-validation" novalidate action="index.php?action=checkout" method="POST">

                        <div class="mb-3">
                            <label for="username">Họ tên *</label>
                            <input type="text" class="form-control" id="username" required name="ten">
                            <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Địa chỉ *</label>
                            <input type="text" class="form-control" id="address" required name="diachi">
                        </div>

                        <div class="mb-3">
                            <label for="address">SĐT *</label>
                            <input type="text" class="form-control" id="address" required name="sdt">
                        </div>

                        <hr class="mb-4">

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address" name="pttt" value="1">
                            <label class="custom-control-label" for="same-address">Thanh toán online</label>
                        </div>

                </div>
            </div>

            <!-- Cột giỏ hàng -->
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="odr-box">
                            <div class="title-left">
                                <h3>Giỏ hàng</h3>
                            </div>
                            <div class="rounded p-2 bg-light">
                                <?php foreach ($_SESSION['cart'] as $item) { ?>
                            <div class="media mb-2 border-bottom">
                                <img src="admin/<?= $item['img'] ?>" width="60">

                                <div class="media-body">
                                    <a><?= $item['name'] ?></a>
                                    <div class="small text-muted">
                                        Giá: <?= $item['price'] ?> VNĐ 
                                        <span class="mx-2">|</span> Số lượng: <?= $item['soLuong'] ?> 
                                        <span class="mx-2">|</span> Thành tiền: <?= $item['price'] * $item['soLuong'] ?> VNĐ
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="order-box">
                            <div class="title-left">
                                <h3>Thanh toán</h3>
                            </div>

                            <div class="d-flex">
                                <h4>Tạm tính</h4>
                                <div class="ml-auto font-weight-bold"><?= number_format($tongTien)?> VNĐ</div>
                            </div>

                            <hr class="my-1">

                            <div class="d-flex">
                                <h4>Phí ship</h4>
                                <div class="ml-auto font-weight-bold"> Free </div>
                            </div>

                            <hr>

                            <div class="d-flex gr-total">
                                <h5>Tổng</h5>
                                <div class="ml-auto h5"><?= number_format($tongTien)?> VNĐ</div>
                            </div>

                            <hr>
                        </div>
                    </div>

                    <!-- Nút submit -->
                    <div class="col-12 d-flex shopping-box">
                        <button type="submit" class="ml-auto btn hvr-hover">Đặt hàng</button>
                    </div>

                </div>
            </div>

            </form>

        </div>
    </div>
</div>
<!-- End Cart -->

<?php 
include_once("layout/footer.php");
?>
