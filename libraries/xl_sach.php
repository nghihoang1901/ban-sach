<?php
    include_once('../libraries/database.php');
    class xl_sach extends Database{
    
        function load_danh_sach_loai_sach(){
            $sql = "SELECT * FROM bs_loai_sach WHERE id_loai_cha = 0";
            $this->setQuery($sql);
            $ds_loai_sach_cap_1 = $this->loadAllRow();

            foreach($ds_loai_sach_cap_1 as $loai_sach_cap_1){
                $sql = "SELECT * FROM bs_loai_sach WHERE id_loai_cha = ". $loai_sach_cap_1->id;
                $this->setQuery($sql);
                $ds_loai_sach_cap_2 = $this->loadAllRow();

                $loai_sach_cap_1->ds_loai_con = $ds_loai_sach_cap_2;
            }
            return $ds_loai_sach_cap_1; 
        }
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
        function them_sach_moi($ten_sach, $gioi_thieu, $id_loai_sach, $trang_thai, $hinh, $don_gia){
            $sql = "INSERT INTO bs_sach(ten_sach, gioi_thieu, id_loai_sach, trang_thai, hinh, don_gia)
            VALUE(?, ?, ?, ?, ?, ?)";
            $this->setQuery($sql);
            $result = $this->execute(array($ten_sach, $gioi_thieu, $id_loai_sach, $trang_thai, $hinh, $don_gia));
            return $result;
        }

        function sua_sach($ten_sach, $gioi_thieu, $id_loai_sach, $trang_thai, $hinh, $don_gia){
            $sql = "UPDATE bs_sach
                SET ten_sach =?,
                    gioi_thieu = ?,
                    id_loai_sach = ?,
                    trang_thai = ?,
                    hinh = ?,
                    don_gia = ? 
                WHERE id = ?";
            // $result = $dbh->prepare($sql);
            // $result->execute([$ten_loai_sach]);
            $this->setQuery($sql);
            $result = $this->execute(array($ten_sach, $gioi_thieu, $id_loai_sach, $trang_thai, $hinh, $don_gia));

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