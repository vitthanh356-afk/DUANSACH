<?php
include_once("views/layouts/header.php");
?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form thêm hóa đơn</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="index.php?action=storehoadon" method="post">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Khách hàng</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="tenkhachhang" placeholder="Điền tên khách hàng vào đây">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Địa chỉ</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="diachi" placeholder="Điền địa chỉ vào đây">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">SĐT</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="sdt" placeholder="Điền SĐT vào đây">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Ngày đặt hàng</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="ngaygiodat" placeholder="Điền ngày đặt hàng vào đây">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Tổng tiền</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="tongtien" placeholder="Điền tổng tiền vào đây">
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Thêm</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Làm mới</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once("views/layouts/footer.php");
?>