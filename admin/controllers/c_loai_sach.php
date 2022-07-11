<?php
    include_once('../libraries/xl_loai_sach.php');
    class c_loai_sach{
        private $xl_loai_sach;
        function __construct(){
            $this->xl_loai_sach = new xl_loai_sach();
        }

        function index(){
            // xử lý xóa loại sách
            if(isset($_GET['id-xoa'])){
                $result = $this->xl_loai_sach->xoa_loai_sach($_GET['id-xoa']);
                
            }
            // load danh sách loại sách
            $ds_loai_sach = $this->xl_loai_sach->load_toan_bo_danh_sach_loai_sach();

            // load view
            include_once("pages/ql_loai_sach/index.php");
        }

        function them(){

            if(isset($_POST['ten_loai_sach'])){
                $ten_loai_sach = $_POST['ten_loai_sach'];
                $id_loai_cha = $_POST['id_loai_cha'];
                $trang_thai = (isset($_POST['trang_thai']))?1:0;
            
                $result = $this->xl_loai_sach->them_loai_sach_moi($ten_loai_sach, $id_loai_cha, $trang_thai);
            }

            $ds_loai_sach_cap_1 = $this->xl_loai_sach->load_toan_bo_danh_sach_loai_sach(0);
            foreach($ds_loai_sach_cap_1 as $loai_sach_cap_1){
                $ds_loai_sach_cap_2 = $this->xl_loai_sach->load_toan_bo_danh_sach_loai_sach($loai_sach_cap_1->id);
                $loai_sach_cap_1->ds_loai_con = $ds_loai_sach_cap_2;
            }
            // load view
            include_once("pages/ql_loai_sach/them.php");
        }

        function sua(){
            $id_sua=$_GET['id_sua'];
            if(isset($_POST['ten_loai_sach'])){
                $ten_loai_sach = $_POST['ten_loai_sach'];
                $id_loai_cha = $_POST['id_loai_cha'];
                $trang_thai = (isset($_POST['trang_thai']))?1:0;
                
        
                $result = $this->xl_loai_sach->sua_loai_sach($ten_loai_sach, $id_loai_cha, $trang_thai, $id_sua);
            }

            $ds_loai_sach_cap_1 = $this->xl_loai_sach->load_toan_bo_danh_sach_loai_sach(0);
            foreach($ds_loai_sach_cap_1 as $loai_sach_cap_1){
                $ds_loai_sach_cap_2 = $this->xl_loai_sach->load_toan_bo_danh_sach_loai_sach($loai_sach_cap_1->id);
                $loai_sach_cap_1->ds_loai_con = $ds_loai_sach_cap_2;
            }

            $info_loai_sach_sua = $this->xl_loai_sach->load_info_loai_sach($id_sua);
            include_once('pages/ql_loai_sach/sua.php');
        }
        
    }

?>