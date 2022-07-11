<?php
    include_once('../libraries/database.php');
    class xl_nxb extends Database{

        function load_toan_bo_danh_sach_nxb(){
            $sql = "SELECT * FROM bs_nha_xuat_ban";
            $this->setQuery($sql);
            $ds_nxb = $this->loadAllRow();
            return $ds_nxb;
        }

        function load_info_nxb($id_sua){
            $sql = "SELECT * FROM bs_nha_xuat_ban WHERE id= ". $id_sua;
            // $sth = $dbh->prepare($sql);
            // $sth->execute();
            // $info_sach_sua = $sth->fetch(PDO::FETCH_OBJ);
            $this->setQuery($sql);
            $info_nxb = $this->loadRow();
            return $info_nxb;
        }

        function sua_nxb($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email){
            $sql = "UPDATE bs_nha_xuat_ban
                SET ten_nha_xuat_ban =?,
                    dia_chi = ?,
                    dien_thoai = ?,
                    email = ?
                WHERE id = ?";
            // $result = $dbh->exec($sql);
            $this->setQuery($sql);
            $result = $this->execute(array($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email));
            return $result;
        }

        function them_nxb($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email){
            $sql = "INSERT INTO bs_nha_xuat_ban(ten_nha_xuat_ban, dia_chi, dien_thoai, email)
                VALUE(?, ?, ?, ?)";
            // $result = $dbh->exec($sql);
            $this->setQuery($sql);
            $result = $this->execute(array($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email));
            return $result;
        }

        function xoa($id_xoa){
            $sql = 'DELETE FROM bs_nha_xuat_ban WHERE id = '. $_GET['id-xoa'];
            // $result = $dbh->exec($sql);
            $this->setQuery($sql);
            $result = $this->execute();
            return $result;
        }
    }

?>