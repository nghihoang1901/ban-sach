<?php
    include_once('../libraries/database.php');
    class xl_sach extends Database{
    
        function load_toan_bo_danh_sach_sach(){
            $sql = "SELECT * FROM bs_sach";
            $this->setQuery($sql);
            $ds_sach = $this->loadAllRow();
            return $ds_sach;
        }
        function load_info_sach($id_sua){
            $sql = "SELECT * FROM bs_sach WHERE id = ". $id_sua;
            $this->setQuery($sql);
            $info_sach_sua = $this->loadRow();
            return $info_sach_sua;
        }
        
        function them_sach_moi($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat){
            $sql = "INSERT INTO bs_sach(ten_sach, id_tac_gia, gioi_thieu, doc_thu, id_loai_sach, id_nha_xuat_ban, so_trang, ngay_xuat_ban, kich_thuoc, sku, trong_luong, trang_thai, hinh, don_gia, gia_bia, noi_bat)
            VALUE(?, ?, ?, ?, ?, ?)";
            $this->setQuery($sql);
            $result = $this->execute(array($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat));
            return $result;
        }

        function cap_nhat_trang_thai_noi_bat_sach($id_sach, $column){
            $sql = "UPDATE bs_sach
                    SET $column = 1 - $column
                    WHERE id = ?";
            $this->setQuery($sql);
            $result = $this->execute(array($id_sach));
            return $result;
        }

        function sua_sach($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat, $id_sua){
            $sql = "UPDATE bs_sach
                SET ten_sach = ?, 
                id_tac_gia = ?, 
                gioi_thieu = ?,
                 doc_thu = ?,
                 id_loai_sach = ?,
                 id_nha_xuat_ban = ?,
                 so_trang = ?,
                 ngay_xuat_ban = ?,
                 kich_thuoc = ?,
                 sku = ?,
                 trong_luong = ?,
                 trang_thai = ?,
                 hinh = ?,
                 don_gia = ?,
                 gia_bia = ?,
                 noi_bat = ?
                WHERE id = ?";
            // $result = $dbh->prepare($sql);
            // $result->execute([$ten_loai_sach]);
            $this->setQuery($sql);
            $result = $this->execute(array($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat, $id_sua));

            return $result;
        }

        function xoa_sach($id_xoa){
            $sql = "DELETE FROM bs_sach WHERE id = " . $_GET['id_xoa'];
            $this->setQuery($sql);
            $result = $this->execute();
            return $result;
        }
    }

?>