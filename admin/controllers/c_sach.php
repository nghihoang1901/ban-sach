<?php
    include_once('../libraries/xl_sach.php');
    include_once('../libraries/xl_loai_sach.php');
    include_once('../libraries/xl_tac_gia.php');
    include_once('../libraries/xl_nxb.php');
    
    class c_sach{
        private $xl_sach, $xl_loai_sach, $xl_tac_gia, $xl_nxb;
        function __construct(){
            $this->xl_sach = new xl_sach();
            $this->xl_loai_sach = new xl_loai_sach();
            $this->xl_tac_gia = new xl_tac_gia();
            $this->xl_nxb = new xl_nxb();
        }

        function index(){

            // xoa
            if(isset($_GET['id_xoa'])){
                $result = $this->xl_sach->xoa_sach($_GET['id_xoa']);
            }

            if(isset($_POST['trang_thai'])){
                $this->xl_sach->cap_nhat_trang_thai_noi_bat_sach($_POST['trang_thai'], 'trang_thai');
            }
            if(isset($_POST['noi_bat'])){
                $this->xl_sach->cap_nhat_trang_thai_noi_bat_sach($_POST['noi_bat'], 'noi_bat');
            }

            // load danh sach sach
            $ds_sach = $this->xl_sach->load_toan_bo_danh_sach_sach();
            // load view
            include_once('pages/ql_sach/index.php');
        }

        function them(){
            $ds_loai_sach = $this->xl_loai_sach->load_toan_bo_danh_sach_loai_sach();
            $ds_tac_gia = $this->xl_tac_gia->load_toan_bo_danh_sach_tac_gia();
            $ds_nxb = $this->xl_nxb->load_toan_bo_danh_sach_nxb();

            if(isset($_POST['ten_sach'])){
                $ten_sach = $_POST['ten_sach'];
                $id_tac_gia = $_POST['id_tac_gia'];
                $gioi_thieu = $_POST['gioi_thieu'];
                $doc_thu = $_POST['doc_thu'];
                $id_loai_sach = $_POST['id_loai_sach'];
                $id_nha_xuat_ban = $_POST['id_nha_xuat_ban'];
                $so_trang = $_POST['so_trang'];
                $ngay_xuat_ban = $_POST['ngay_xuat_ban'];
                $kich_thuoc = $_POST['kich_thuoc'];
                $sku = $_POST['sku'];
                $trong_luong = $_POST['trong_luong'];
                $trang_thai = $_POST['trang_thai'];
                $hinh = $_POST['hinh'];
                $don_gia = $_POST['don_gia'];
                $gia_bia = $_POST['gia_bia'];
                $noi_bat = $_POST['noi_bat'];
                
                $result = $this->xl_sach->them_sach_moi($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat);
                
            }
            

            // load view
            include_once('pages/ql_sach/them.php');
        }

        function sua(){
            $id_sua='';
            if(isset($_GET['id_sua'])){
                $id_sua = $_GET['id_sua'];
            }
            else{
                redirect_by_javascript();
            }

            $info_sach_sua = $this->xl_sach->load_info_sach($id_sua);
            $ds_loai_sach = $this->xl_loai_sach->load_toan_bo_danh_sach_loai_sach();
            $ds_tac_gia = $this->xl_tac_gia->load_toan_bo_danh_sach_tac_gia();
            $ds_nxb = $this->xl_nxb->load_toan_bo_danh_sach_nxb();

            if(isset($_POST['ten_sach'])){
                $ten_sach = $_POST['ten_sach'];
                $id_tac_gia = $_POST['id_tac_gia'];
                $gioi_thieu = $_POST['gioi_thieu'];
                $doc_thu = $_POST['doc_thu'];
                $id_loai_sach = $_POST['id_loai_sach'];
                $id_nha_xuat_ban = $_POST['id_nha_xuat_ban'];
                $so_trang = $_POST['so_trang'];
                $ngay_xuat_ban = $_POST['ngay_xuat_ban'];
                $kich_thuoc = $_POST['kich_thuoc'];
                $sku = $_POST['sku'];
                $trong_luong = $_POST['trong_luong'];
                $trang_thai = $_POST['trang_thai'];
                $hinh = $_POST['hinh'];
                $don_gia = $_POST['don_gia'];
                $gia_bia = $_POST['gia_bia'];
                $noi_bat = $_POST['noi_bat'];
                
                $result = $this->xl_sach->sua_sach($ten_sach, $id_tac_gia, $gioi_thieu, $doc_thu, $id_loai_sach, $id_nha_xuat_ban, $so_trang, $ngay_xuat_ban, $kich_thuoc, $sku, $trong_luong, $trang_thai, $hinh, $don_gia, $gia_bia, $noi_bat, $id_sua);
            }

            
            include_once('pages/ql_sach/sua.php');

        }
    }

?>