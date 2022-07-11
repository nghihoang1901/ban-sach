
<?php
    add_confirm_box_before_delete();

    if(isset($result)){
        notice_after_process($result, 'Đã xoá thành công tác giả có id là ' . $_GET['id_xoa'], 'Có lỗi xảy ra trong lúc xoá tác giả id là ' . $_GET['id_xoa'], 'tac_gia');
    }
?>


<div class="row">


    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý tác giả</h1>
        
        <a href="?page=tac_gia&chuc_nang=them">
            <button type="button" class="btn btn-primary">Thêm tác giả mới</button>
        </a>
        
    </div>
    <!--End Page Header -->
    <div class="main_content">

        <div class="table-responsive">
            <table id="ds_tac_gia" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên tác giả</th>
                        <th>giới thiệu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds_tac_gia as $tac_gia) {
                    ?>
                        <tr>
                            <td><?php echo $tac_gia->id ?></td>
                            <td><?php echo $tac_gia->ten_tac_gia ?></td>
                            <td><?php echo $tac_gia->gioi_thieu ?></td>
                            <td>

                                <a href="?page=tac_gia&chuc_nang=sua&id_sua=<?php echo $tac_gia->id; ?>">
                                    <button type="button" class="btn btn-info">
                                        Sửa
                                    </button>
                                </a>

                                <a href="?page=tac_gia&id-xoa=<?php echo $tac_gia->id; ?>" onclick="return check_before_delete();">
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