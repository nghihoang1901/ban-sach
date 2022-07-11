<?php
function notice_after_process($result, $mess_success, $mess_fail, $page_redirect = ''){
    if($result !== false){
        ?>
        <script>
            alert('<?= $mess_success ?>');
            window.location.href = '?page=<?= $page_redirect ?>';
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('<?= $mess_fail ?>')
        </script>
        <?php
    }
}

function add_confirm_box_before_delete(){
    ?>
    <script>
        function check_before_delete(){
            var kq = confirm('Bạn có chắc chắn muốn xoá không?');
            if(kq){
                return true;
            }
            else {
                return false;
            }
        }
    </script>
    <?php
}
function sua($id_sua, $page_redirect){
    $id_sua = "";
    if(isset($_GET['id_sua'])){
        $id_sua = $_GET['id_sua'];
    }
    else{
        ?>
        <script>
            window.location.href = '?page=<?= $page_redirect ?>';
        </script>
        <?php
    }
}
?>