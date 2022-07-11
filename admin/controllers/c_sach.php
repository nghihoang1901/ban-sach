<?php
    include_once('../libraries/xl_sach.php');
    class c_sach{
        private $xl_sach;
        function __construct(){
            $this->xl_sach = new xl_sach();
        }

        function index(){

            // xoa
            if(isset($_GET['id_xoa'])){
                $result = $this->xl_sach->xoa_sach($_GET['id_xoa']);
            }
            // load danh sach sach
            $ds_sach = $this->xl_sach->load_toan_bo_danh_sach_sach();
            // load view
            include_once('pages/ql_sach/index.php');
        }

        function them(){
            if(isset($_POST['ten_sach'])){
                $ten_sach = $_POST['ten_sach'];
                $gioi_thieu = $_POST['gioi_thieu'];
                $id_loai_sach = $_POST['id_loai_sach'];
                $trang_thai = (isset($_POST['trang_thai']))?1:0;
                $hinh = $_POST['hinh'];
                $don_gia = $_POST['don_gia'];
                
                $result = $this->xl_sach->them_sach_moi($ten_sach, $gioi_thieu, $id_loai_sach, $trang_thai, $hinh, $don_gia);
                
            }
            $ds_loai_sach_cap_1 = $this->xl_sach->load_danh_sach_loai_sach();

            // load view
            include_once('pages/ql_sach/them.php');
        }

        function sua(){
            $id_sua = $_GET['id_sua'];
            if(isset($_POST['ten_sach'])){
                $ten_sach = $_POST['ten_sach'];
                $gioi_thieu = $_POST['gioi_thieu'];
                $id_loai_sach = $_POST['id_loai_sach'];
                $trang_thai = (isset($_POST['trang_thai']))?1:0;
                $hinh = $_POST['hinh'];
                $don_gia = $_POST['don_gia'];
                
                $result = $this->xl_sach->sua_sach($ten_sach, $gioi_thieu, $id_loai_sach, $trang_thai, $hinh, $don_gia, $id_sua);
            }
            $ds_loai_sach_cap_1 = $this->xl_sach->load_danh_sach_loai_sach();
            $info_sach_sua = $this->xl_sach->load_info_sach($id_sua);
            include_once('pages/ql_sach/sua.php');

        }
    }

?>