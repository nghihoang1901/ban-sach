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
                                <label>giới thiệu</label>
                                <textarea class="form-control" rows="3" name="gioi_thieu"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Loại sách</label>
                                <select name="id_loai_sach" id="" class="form-control">
                                    <option value="0">Không có loại sách</option>
                                    <?php
                                    foreach($ds_loai_sach_cap_1 as $loai_con_cap_1){
                                        ?>
                                        <option value="<?php echo $loai_con_cap_1->id; ?>">
                                            <?php echo $loai_con_cap_1->ten_loai_sach; ?>
                                        </option>
                                        <?php

                                        if(count($loai_con_cap_1->ds_loai_con) > 0){
                                            foreach($loai_con_cap_1->ds_loai_con as $loai_con_cap_2){
                                                ?>
                                                <option value="<?php echo $loai_con_cap_2->id; ?>">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $loai_con_cap_2->ten_loai_sach; ?>
                                                </option>
                                                <?php 
                                            }
                                        }
                                    }
                                    ?>

                                </select>
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <br />
                                <label class="switch">
                                    <input name="trang_thai" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>hình</label>
                                <input type="file" name="hinh">
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