<?php
include_once("views/layouts/header.php");
?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Chi tiết hóa đơn</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết hóa đơn</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Id hóa đơn</th>
                            <th>Id sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allChiTietHoaDon as $item) { ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['id_hoadon'] ?></td>
                                <td><?= $item['id_sanpham'] ?></td>
                                <td><?= $item['soluong'] ?></td>
                                <td><?= $item['gia'] ?></td>
                                <td><?php 
                                    if ($item['trangthai'] == 0) {
                                        echo '<button class="btn btn-success">Đã thanh toán</button>';
                                    } else {
                                        echo '<button class="btn btn-danger">Chưa thanh toán</button>';
                                    }
                                ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php
include_once("views/layouts/footer.php");
?>
<!-- 1 -->