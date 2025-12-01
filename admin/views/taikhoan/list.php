<?php
include_once("views/layouts/header.php");
?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Quản lý tài khoản</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="?action=createtaikhoan" class="btn btn-primary"> Thêm </a>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Người dùng</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>SĐT</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allTaiKhoan as $item) { ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['user'] ?></td>
                                <td><?= $item['pass'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['address'] ?></td>
                                <td><?= $item['tel'] ?></td>
                                <td>
                                    <a href="index.php?action=edittaikhoan&id=<?= $item['id'] ?>"
                                        class="btn btn-secondary">Sửa</a>
                                    <?php if ($item['deleted'] == 0) { ?>
                                        <a href="index.php?action=deletetaikhoan&id=<?= $item['id'] ?>"
                                           onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                    <?php } else { ?>
                                        <a href="index.php?action=restoretaikhoan&id=<?= $item['id'] ?>"
                                           onclick="return confirm('Bạn có muốn khôi phục không?')" class="btn btn-warning">Khôi phục</a>
                                    <?php } ?>
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