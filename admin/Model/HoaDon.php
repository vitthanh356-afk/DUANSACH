<?php 
include_once("pdo.php");
class HoaDon {
    // list
    public function getAll() {
        $sql = "select * from hoadon";
        return pdo_query($sql);
    }
    // create
    public function insert($ten, $diaChi, $ngayGio, $tong, $sdt) {
        $sql = "insert into hoadon (tenkhachhang, diachi, sdt, ngaygiodat, tongtien) values (?, ?, ?, ?, ?)";
        pdo_query($sql, $ten, $diaChi, $ngayGio, $tong, $sdt);
    }
    // update
    public function getOne($id) {
        $sql = "select * from hoadon where id = ?";
        return pdo_query_one($sql, $id);
    }
    public function update($id, $ten, $diaChi,$sdt, $ngayGio, $tong ) {
        $sql = "update hoadon set `tenkhachhang` = ?, diachi = ?, sdt = ?, ngaygiodat = ?, tongtien = ? where id = ?";
        pdo_execute($sql, $ten, $diaChi, $sdt, $ngayGio, $tong, $id);
    }
}
?>