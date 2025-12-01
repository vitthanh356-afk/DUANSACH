<?php 
include_once("pdo.php");
class NhaXuatBan {
    // List
    public function getAll() {
        $sql = "select * from nhaxuatban";
        return pdo_query($sql);
    }
    // Create
    public function insert($ten, $diaChi) {
        $sql = "insert into nhaxuatban (name, address) values (?, ?)";
        pdo_query($sql, $ten, $diaChi);
    }
    // Update
    public function getOne($id) {
        $sql = "select * from nhaxuatban where id = ?";
        return pdo_query_one($sql, $id);
    }
    public function update($id, $ten, $diaChi) {
        $sql = "update nhaxuatban set `name` = ?, address = ? where id = ?";
        pdo_execute($sql, $ten, $diaChi, $id);
    }
    // Delete
    public function delete($id) {
        $sql = "update nhaxuatban set deleted = 1 where id = ?";
        pdo_execute($sql, $id);
    }    
    // Restore
    public function restore($id) {
        $sql = "update nhaxuatban set deleted = 0 where id = ?";
        pdo_execute($sql, $id);
    }
}
?>