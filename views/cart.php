<?php 
include_once("layout/header.php");
?>
<!-- Start Cart  -->
    <div class="cart-box-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="table-main table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Loại bỏ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($_SESSION['cart'] as $item) {?>
                  <tr>
                    <td class="thumbnail-img">
                      <a href="#">
                        <img
                          class="img-fluid"
                          src="admin/<?= $item['img']?>"
                          alt=""
                        />
                      </a>
                    </td>
                    <td class="name-pr">
                      <a href="#"><?= $item['name']?></a>
                    </td>
                    <td class="price-pr">
                      <p><?= number_format($item['price'])?> VNĐ</p>
                    </td>
                    <td class="quantity-box">
                      <input
                        type="number"
                        size="4"
                        value="<?= $item['soLuong'] ?>"
                        min="0"
                        step="1"
                        class="c-input-text qty text"
                      />
                    </td>
                    <td class="total-pr">
                      <p><?= number_format($item['price'] * $item['soLuong'])?> VNĐ</p>
                    </td>
                    <td class="remove-pr">
                      <a href="index.php?action=deletecart&idsp=<?= $item['id'] ?>">
                        <i class="fas fa-times"></i>
                      </a>
                    </td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="row my-5">
          <div class="col-lg-6 col-sm-6">
            <div class="coupon-box">
              <div class="input-group input-group-sm">
                <input
                  class="form-control"
                  placeholder="Nhập mã khuyến mãi của bạn"
                  aria-label="Coupon code"
                  type="text"
                />
                <div class="input-group-append">
                  <button class="btn btn-theme" type="button">
                    Áp dụng 
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row my-5">
          <div class="col-lg-8 col-sm-12"></div>
          <div class="col-lg-4 col-sm-12">
            <div class="order-box">
              <h3>Tóm tắt đơn hàng</h3>
              <div class="d-flex">
                <h4>Tạm tính</h4>
                <div class="ml-auto font-weight-bold"><?= number_format($tongTien)?> VNĐ</div>
              </div>
              <hr class="my-1" />
              <div class="d-flex">
                <h4>Phí ship</h4>
                <div class="ml-auto font-weight-bold">Free</div>
              </div>
              <hr />
              <div class="d-flex gr-total">
                <h5>Tổng</h5>
                <div class="ml-auto h5"><?= number_format($tongTien)?> VNĐ</div>
              </div>
              <hr />
            </div>
          </div>
          <div class="col-12 d-flex shopping-box">
            <a href="index.php?action=showcheckout" class="ml-auto btn hvr-hover">Thanh toán</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Cart -->
     <?php 
include_once("layout/footer.php");
?>