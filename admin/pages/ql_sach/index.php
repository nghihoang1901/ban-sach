
<?php
    add_confirm_box_before_delete();

    if(isset($result)){
        notice_after_process($result, 'Đã xoá thành công sách có id là ' . $_GET['id_xoa'], 'Có lỗi xảy ra trong lúc xoá sách id là ' . $_GET['id_xoa'], 'sach');
    }
?>
<style>
    #ds_sach img{
        max-width: 50px;
        cursor: pointer;
    }
</style>
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
            <table id="ds_sach" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sách</th>
                        <th>Giới thiệu</th>
                        <th>Trạng thái</th>
                        <th>nổi bật</th>

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
                        <td>
                        <form action="" method="post">
                                <input type="hidden" name="trang_thai" value="<?= $sach->id ?>">
                                <button type="submit">
                                    <img src="pages/ql_sach/images/icon/<?php echo ($sach->trang_thai)?'tick.png':'delete.png' ?>" alt="">
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="noi_bat" value="<?= $sach->id ?>">

                                <button type="submit">
                                    <img src="pages/ql_sach/images/icon/<?php echo ($sach->noi_bat)?'tick.png':'inoge.png' ?>" alt="">
                                </button>
                            </form>
                        </td>
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