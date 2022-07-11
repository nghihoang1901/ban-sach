<?php
include_once('../libraries/xl_tac_gia.php');
    class c_tac_gia{
        private $xl_tac_gia;
        function __construct(){
            $this->xl_tac_gia = new xl_tac_gia();
        }

        function index(){

            // xoa
            if(isset($_GET['id_xoa'])){
                $result = $this->xl_tac_gia->xoa($_GET['id_xoa']);
            }
            // load danh sach sach
            $ds_tac_gia = $this->xl_tac_gia->load_toan_bo_danh_sach_tac_gia();
            // load view
            include_once('pages/ql_tac_gia/index.php');
        }
    
        function them(){
            
            if(isset($_POST['ten_tac_gia'])){
                $ten_tac_gia = $_POST['ten_tac_gia'];
                $gioi_thieu = $_POST['gioi_thieu'];
                
                $result = $this->xl_tac_gia->them($ten_tac_gia, $gioi_thieu);
            }

            include_once('pages/ql_tac_gia/them.php');

        }
        function sua(){
            $id_sua = $_GET['id_sua'];

            if(isset($_POST['ten_tac_gia'])){
                $ten_tac_gia = $_POST['ten_tac_gia'];
                $gioi_thieu = $_POST['gioi_thieu'];
                
                $result = $this->xl_tac_gia->sua($ten_tac_gia, $gioi_thieu);
            }
            $info_tac_gia = $this->xl_tac_gia->load_info_tac_gia($id_sua);

            include_once('pages/ql_tac_gia/sua.php');
        }
    }
?>