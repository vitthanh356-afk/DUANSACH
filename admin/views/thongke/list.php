<?php include_once("views/layouts/header.php"); ?>

<div class="page-heading">
    <h3>Thống kê sản phẩm</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">

                <!-- Tổng doanh thu -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple"><i class="bi bi-bar-chart"></i></div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Tổng doanh thu</h6>
                                    <h6 class="font-extrabold mb-0">
                                        <?= number_format($totalDoanhThu['totalDoanhThu'])?> VNĐ
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tổng hóa đơn -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue"><i class="bi bi-receipt"></i></div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Tổng hóa đơn</h6>
                                    <h6 class="font-extrabold mb-0"><?= $totalHoaDon['totalHoaDon'] ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tổng SP đã bán -->
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green"><i class="bi bi-pie-chart"></i></div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Đã bán</h6>
                                    <h6 class="font-extrabold mb-0"><?= $totalDaBan['totalHoaDon']?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5"></div>
                    </div>
                </div> -->

            </div>

            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            

            <!-- HAI NÚT + BẢNG SẢN PHẨM -->
            <div class="row mt-4">
                <div class="col-12">

                    <a href="index.php?action=listthongke&type=bestseller" class="btn btn-primary">Sản phẩm bán chạy</a>
                    <a href="index.php?action=listthongke&type=newest" class="btn btn-success">Sản phẩm mới nhất</a>

                    <hr>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($allSanPham as $item) { ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['price'] ?></td>
                                    <td><img width="100px" src="./<?= $item['img'] ?>"></td>
                                    <td><?= $item['mota'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <!-- Cột phải: danh sách tài khoản -->
        <!-- <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4>Các tài khoản</h4>
                </div>
                <div class="card-content pb-4">
                    
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="name ms-4">
                                <h5 class="mb-1"></h5>
                                <h6 class="text-muted mb-0"></h6>
                            </div>
                        </div>
                </div>
            </div>
        </div> -->
    </section>

</div>

<?php include_once("views/layouts/footer.php"); ?>
