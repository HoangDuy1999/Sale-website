
            <div class="error_pagenotfound"> <strong>4<span id="animate-arrow">0</span>4 </strong> <br />
                <b>Ohh... Không tìm thấy trang!</b> <em>Bạn hãy chọn nút bên dưới để quay trở về!</em>
                <br />
                <a href="index.php" class="button-back"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; Trở về</a>
            </div>
            <!-- end error page notfound -->




<?php 
    if (isset($_GET["id"]))
    {
        switch ($_GET["id"]){
            case 1:
                echo "<h2>Tên đăng nhập và mật khẩu không tồn tại</h2>";
                break;
        }
    }
?>