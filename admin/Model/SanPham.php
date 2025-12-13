<?php 
include_once("pdo.php");
class SanPham {
    public function getAll() {
        $sql = "select * from sanpham";
        return pdo_query($sql);
    }
    public function insert($ten, $gia, $moTa, $idDanhMuc, $idNhaXuatBan, $anh) {
        $sql = "insert into sanpham (name, price, img, mota, iddm, idnxb) values (?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ten, $gia, $anh, $moTa, $idDanhMuc, $idNhaXuatBan);
    }
    public function getOne($id) {
        $sql = "select * from sanpham where id = ?";
        return pdo_query_one($sql, $id);
    }
    public function update($id, $ten, $gia, $moTa, $idDanhMuc, $idNhaXuatBan, $anh) {
        if($anh == null) {
            $sql = "update sanpham set name=?, price=?, mota=?, iddm=?, idnxb=? where id=?";
            pdo_execute($sql, $ten, $gia, $moTa, $idDanhMuc, $idNhaXuatBan, $id);
        } else {
            $sql = "update sanpham set name=?, price=?, img=?, mota=?, iddm=?, idnxb=? where id=?";
            pdo_execute($sql, $ten, $gia, $anh, $moTa, $idDanhMuc, $idNhaXuatBan, $id);
        }
    }


    public function delete($id) {
        $sql = "update sanpham set deleted = 1 where id = ?";
        pdo_execute($sql, $id);
    }    
    public function restore($id) {
        $sql = "update sanpham set deleted = 0 where id = ?";
        pdo_execute($sql, $id);
    }
    // Thongke
    public function getBestSeller() {
        $sql = "SELECT * FROM sanpham ORDER BY luotxem DESC LIMIT 10";
        return pdo_query($sql); 
    }
    public function getNewest() {
        $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 10";
        return pdo_query($sql);
    }
}

?>