<?php 
include_once("pdo.php");
class TaiKhoan {
    // List
    public function getAll() {
        $sql = "select * from taikhoan";
        return pdo_query($sql);
    }
    // Create
    public function insert($nguoiDung, $matKhau, $email, $diaChi, $sdt) {
        $sql = "insert into taikhoan (user, pass, email, address, tel) values (?, ?, ?, ?, ?)";
        pdo_query($sql, $nguoiDung, $matKhau, $email, $diaChi, $sdt);
    }
    // Update
    public function getOne($id) {
        $sql = "select * from taikhoan where id = ?";
        return pdo_query_one($sql, $id);
    }
    public function update($id, $nguoiDung, $matKhau, $email, $diaChi, $sdt) {
        $sql = "update taikhoan set `user` = ?, pass = ?, email = ?, address = ?, tel = ? where id = ?";
        pdo_execute($sql, $nguoiDung, $matKhau, $email, $diaChi, $sdt, $id);
    }
    // Delete
    public function delete($id) {
        $sql = "update taikhoan set deleted = 1 where id = ?";
        pdo_execute($sql, $id);
    }    
    // Restore
    public function restore($id) {
        $sql = "update taikhoan set deleted = 0 where id = ?";
        pdo_execute($sql, $id);
    }
}
?>