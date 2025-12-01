<?php
include_once("views/layouts/header.php");
?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form sửa tài khoản</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="index.php?action=updatetaikhoan" method="post">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Tên người dùng</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="user" placeholder="Điền tên người dùng vào đây" value="<?=$taiKhoan['user']?>">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Mật khẩu</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="pass" placeholder="Điền mật khẩu vào đây" value="<?=$taiKhoan['pass']?>">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Email</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="email" placeholder="Điền email vào đây" value="<?=$taiKhoan['email']?>">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Địa chỉ</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="address" placeholder="Điền địa chỉ vào đây" value="<?=$taiKhoan['address']?>">
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">SĐT</label>
                                    <input type="text" id="first-name-vertical" class="form-control" 
                                    name="tel" placeholder="Điền SĐT vào đây" value="<?=$taiKhoan['tel']?>">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?=$taiKhoan['id']?>">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Sửa</button>
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