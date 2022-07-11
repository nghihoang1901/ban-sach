<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Thêm sách mới</h1>
    </div>
    <!--end page header -->
</div>
<?php
    if(isset($result)){
        notice_after_process($result, 'thêm sách mới thành công', 'thêm sách mới thất bại, vui lòng kiểm tra và thử lại', $_GET['page']);
    }
?>    

<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Form Elements
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input class="form-control" name="ten_sach">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>tác giả</label>
                                <select name="id_tac_gia" id="">
                                    <?php
                                        foreach ($ds_tac_gia as $tac_gia) {
                                            $selected = "";
                                            if($tac_gia->id == $info_sach_sua->id_loai_sach){
                                                $selected = 'selected= "true"';
                                            }
                                            ?>
                                            <option <?= $selected ?> value="<?= $tac_gia->id ?>"><?= $tac_gia->ten_tac_gia ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>giới thiệu</label>
                                <textarea class="form-control" rows="3" name="gioi_thieu"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Loại sách</label>
                                <select name="id_loai_sach" id="">
                                    <?php
                                        foreach ($ds_loai_sach as $loai_sach) {
                                            $selected = "";
                                            if($loai_sach->id == $info_sach_sua->id_loai_sach){
                                                $selected = 'selected= "true"';
                                            }
                                            ?>
                                            <option <?= $selected ?> value="<?= $loai_sach->id ?>"><?= $loai_sach->ten_loai_sach ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Nhà xuất bản</label>
                                <select name="id_nxb" id="">
                                    <?php
                                        foreach ($ds_nxb as $nxb) {
                                            $selected = "";
                                            if($nxb->id == $info_sach_sua->id_loai_sach){
                                                $selected = 'selected= "true"';
                                            }
                                            ?>
                                            <option <?= $selected ?> value="<?= $nxb->id ?>"><?= $nxb->ten_nha_xuat_ban ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Đơn giá</label>
                                <input class="form-control" placeholder="Enter text" name="don_gia">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit Button</button>
                            <button type="reset" class="btn btn-success">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>