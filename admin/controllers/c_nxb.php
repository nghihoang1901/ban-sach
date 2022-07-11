<?php
include_once('../libraries/xl_nxb.php');
    class c_nxb{
        private $xl_nxb;
        function __construct(){
            $this->xl_nxb = new xl_nxb();
        }

        function index(){

            // xoa
            if(isset($_GET['id_xoa'])){
                $result = $this->xl_nxb->xoa($_GET['id_xoa']);
            }
            // load danh sach sach
            $ds_nxb = $this->xl_nxb->load_toan_bo_danh_sach_nxb();
            // load view
            include_once('pages/ql_nha_xuat_ban/index.php');
        }
        function them(){
            if(isset($_POST['ten_nha_xuat_ban'])){
                $ten_nha_xuat_ban = $_POST['ten_nha_xuat_ban'];
                $dia_chi = $_POST['dia_chi'];
                $dien_thoai = $_POST['dien_thoai'];
                $email = $_POST['email'];
                
                $result = $this->xl_nxb->them_nxb($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email);
            }
            include_once('pages/ql_nha_xuat_ban/them.php');
        }
        function sua(){
            $id_sua = $_GET['id_sua'];
            
            
            if(isset($_POST['ten_nha_xuat_ban'])){
                $ten_nha_xuat_ban = $_POST['ten_nha_xuat_ban'];
                $dia_chi = $_POST['dia_chi'];
                $dien_thoai = $_POST['dien_thoai'];
                $email = $_POST['email'];
                
                $result = $this->xl_nxb->sua_nxb($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email);
            }
            $info_nxb = $this->xl_nxb->load_info_nxb($id_sua);
            include_once('pages/ql_nha_xuat_ban/sua.php');

        }
    }
?>