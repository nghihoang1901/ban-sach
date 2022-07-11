
<?php
    add_confirm_box_before_delete();

    if(isset($result)){
        notice_after_process($result, 'Đã xoá thành công nhà xuất bản có id là ' . $_GET['id_xoa'], 'Có lỗi xảy ra trong lúc xoá nhà xuất bản id là ' . $_GET['id_xoa'], 'nha_xuat_ban');
    }
?>


<div class="row">


    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý nhà xuất bản</h1>
        
        <a href="?page=nha_xuat_ban&chuc_nang=them">
            <button type="button" class="btn btn-primary">Thêm nhà xuất bản mới</button>
        </a>
        
    </div>
    <!--End Page Header -->
    <div class="main_content">

        <div class="table-responsive">
            <table id="ds_nxb" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên nhà xuất bản</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds_nxb as $nxb) {
                    ?>
                        <tr>
                            <td><?php echo $nxb->id ?></td>
                            <td><?php echo $nxb->ten_nha_xuat_ban ?></td>
                            <td><?php echo $nxb->dia_chi ?></td>
                            <td><?php echo $nxb->dien_thoai ?></td>
                            <td><?php echo $nxb->email ?></td>
                            <td>

                                <a href="?page=nha_xuat_ban&chuc_nang=sua&id_sua=<?php echo $nxb->id; ?>">
                                    <button type="button" class="btn btn-info">
                                        Sửa
                                    </button>
                                </a>

                                <a href="?page=nha_xuat_ban&id-xoa=<?php echo $nxb->id; ?>" onclick="return check_before_delete();">
                                    <button type="button" class="btn btn-danger">
                                        Xoá
                                    </button>
                                </a>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <script>
            // $(document).ready( function () {
            //     console.log($('#ds_loai_sach'));
            //     $('#ds_loai_sach').DataTable();
            // });
        </script>

    </div>
</div>