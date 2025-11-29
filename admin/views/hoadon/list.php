<?php
include_once("views/layouts/header.php");
?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Hóa đơn</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hóa đơn</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="?action=createhoadon" class="btn btn-primary"> Thêm </a>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>SĐT</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tổng tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allHoaDon as $item) { ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['tenkhachhang'] ?></td>
                                <td><?= $item['diachi'] ?></td>
                                <td><?= $item['sdt'] ?></td>
                                <td><?= $item['ngaygiodat'] ?></td>
                                <td><?= $item['tongtien'] ?></td>
                                <td>
                                    <a href="index.php?action=edithoadon&id=<?= $item['id'] ?>"
                                        class="btn btn-secondary">Sửa</a>

                                </td>
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