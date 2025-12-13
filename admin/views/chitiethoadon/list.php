<?php include_once("views/layouts/header.php"); ?>

<div class="row">
    <!-- CỘT TRÁI: Thông tin hóa đơn -->
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Chi tiết hóa đơn số <?= $id ?></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="index.php?action=listupdate" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">

                        <div class="form-body">
                            <div class="form-group">
                                <label>Khách hàng</label>
                                <input disabled value="<?= $hoaDon['tenkhachhang'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input disabled value="<?= $hoaDon['diachi'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>SĐT</label>
                                <input disabled value="<?= $hoaDon['sdt'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Ngày đặt hàng</label>
                                <input disabled value="<?= $hoaDon['ngaygiodat'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Phương thức thanh toán</label>
                                <input disabled value="<?= $hoaDon['pttt'] == 0 ? "OFFLINE" : "ONLINE" ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tổng tiền</label>
                                <input disabled value="<?= number_format($hoaDon['tongtien']) ?> VNĐ" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Trạng thái</label>
                                <input type="hidden" name="id" value="<?= $hoaDon['id'] ?>">
                                <select name="trangthai" class="form-select">
                                    <option <?= $hoaDon['trangthai'] == 0 ? "selected" : "" ?> value="0">Mới đặt</option>
                                    <option <?= $hoaDon['trangthai'] == 1 ? "selected" : "" ?> value="1">Đang giao</option>
                                    <option <?= $hoaDon['trangthai'] == 2 ? "selected" : "" ?> value="2">Giao thành công</option>
                                    <option <?= $hoaDon['trangthai'] == 3 ? "selected" : "" ?> value="3">Đã hủy</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mt-2">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- CỘT PHẢI: Sản phẩm đã mua -->
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sản phẩm đã mua</h4>
            </div>

            <div class="card-content">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                                <th>Ảnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($allChiTietHoaDon as $item) { ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['soluong'] ?></td>
                                    <td><?= number_format($item['gia']) ?> VNĐ</td>
                                    <td><?= number_format($item['gia'] * $item['soluong']) ?> VNĐ</td>
                                    <td><img width="80" src="./<?= $item['img'] ?>"></td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td><strong>Tổng tiền</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong><?= number_format($hoaDon['tongtien']) ?> VNĐ</strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include_once("views/layouts/footer.php"); ?>
