<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Thêm sách mới</h1>
    </div>
    <!--end page header -->
</div>

<?php
    if(isset($result)){
        notice_after_process($result, 'thêm tác giả mới thành công', 'thêm tác giả mới thất bại, vui lòng kiểm tra và thử lại', $_GET['page']);
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
                                <label>Tên tác giả</label>
                                <input class="form-control" name="ten_tac_gia">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>giới thiệu</label>
                                <textarea class="form-control" rows="3" name="gioi_thieu"></textarea>
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