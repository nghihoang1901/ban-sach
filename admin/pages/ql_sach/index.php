
<?php
    add_confirm_box_before_delete();

    if(isset($result)){
        notice_after_process($result, 'Đã xoá thành công sách có id là ' . $_GET['id_xoa'], 'Có lỗi xảy ra trong lúc xoá sách id là ' . $_GET['id_xoa'], 'sach');
    }
?>

<div class="row">

    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý sách</h1>
        <a href="?page=sach&chuc_nang=them">
            <button type="button" class="btn btn-info">Thêm sách mới</button>
        </a>

    </div>
    <div class="main_content">

        <div class="table-responsive ">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sách</th>
                        <th>Giới thiệu</th>
                        <th>id loại sách</th>
                        <th>Trạng thái</th>
                        <th>Hình</th>
                        <th>Đơn giá</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds_sach as $sach) {
                    ?>
                    <tr>
                        <td><?php echo $sach->id ?></td>
                        <td><?php echo $sach->ten_sach ?></td>
                        <td><?php echo $sach->gioi_thieu ?></td>
                        <td><?php echo $sach->id_loai_sach ?></td>
                        <td><?php echo $sach->trang_thai ?></td>
                        <td><?php echo $sach->hinh ?></td>
                        <td><?php echo $sach->don_gia ?></td>
                        <td>

                            <a href="?page=sach&chuc_nang=sua&id_sua= <?php echo $sach->id ?>">
                                <button type="button" class="btn btn-info">Sửa</button>
                            </a>
                            <a href="?page=sach&id_xoa= <?php echo $sach->id ?>"
                                onclick="return check_before_delete()">
                                <button type="button" class="btn btn-danger">Xoá</button>
                            </a>

                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <!--End Page Header -->
</div>