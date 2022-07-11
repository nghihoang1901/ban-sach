<?php
    include_once('../libraries/database.php');
    class xl_tac_gia extends Database{

        function load_toan_bo_danh_sach_tac_gia(){
            $sql = "SELECT * FROM bs_tac_gia";
            $this->setQuery($sql);
            $ds_tac_gia = $this->loadAllRow();
            return $ds_tac_gia;
        }

        function load_info_tac_gia($id_sua){
            $sql = "SELECT * FROM bs_tac_gia WHERE id= ". $id_sua;
            // $sth = $dbh->prepare($sql);
            // $sth->execute();
            // $info_sach_sua = $sth->fetch(PDO::FETCH_OBJ);
            $this->setQuery($sql);
            $info_tac_gia = $this->loadRow();
            return $info_tac_gia;
        }

        function sua($ten_tac_gia, $gioi_thieu){
            $sql = "UPDATE bs_tac_gia
                SET ten_tac_gia =?,
                    gioi_thieu = ?,
                WHERE id = ?";
            $this->setQuery($sql);
            $result = $this->execute(array($ten_tac_gia, $gioi_thieu));
            return $result;
        }

        function them($ten_tac_gia, $gioi_thieu){
            $sql = "INSERT INTO bs_tac_gia(ten_tac_gia, gioi_thieu)
                VALUE(?, ?)";
            // $result = $dbh->exec($sql);
            $this->setQuery($sql);
            $result = $this->execute(array($ten_tac_gia, $gioi_thieu));
            return $result;
        }

        function xoa($id_xoa){
            $sql = 'DELETE FROM bs_tac_gia WHERE id = '. $_GET['id-xoa'];
            // $result = $dbh->exec($sql);
            $this->setQuery($sql);
            $result = $this->execute();
            return $result;
        }
    }

?>