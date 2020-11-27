<?php
     session_start();
     include "../lib/DataProvider.php";

     //Kiểm tra có người dùng đăng nhập với quyền admin hay chưa?

     if(!isset($_SESSION["MaLoaiTaiKhoan"]) || $_SESSION["MaLoaiTaiKhoan"]!= 2)
     DataProvider::ChangeURL("../index.php");

     $c = 0;
     if(isset($_GET["c"]))
           $c=$_GET["c"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang Admin</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css"/>
    <link rel="icon" type="image/ico" href="images/user.png" />
    <link rel="stylesheet" type="text/css" href="css/error.css"/>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
     <div id="header">
         <marquee><a href="index.php">
           Hệ thống quản lý bán hàng của shop Deploy99 
         </a></marquee>
         
     </div>
     <div id="menu">
        <?php
           include "modules/mMenu.php";
           include "modules/mLogin.php";
        ?>
        <div class="clear"></div>
     </div>
     <div id="content">
         <?php
            switch($c)
            {
                case 0:
                    include "pages/pIndex.php";
                break;
                case 1:
                    include "pages/qlTaiKhoan/pIndex.php";
                break;
                case 2:
                    include "pages/qlSanPham/pIndex.php";
                break;
                case 3:
                    include "pages/qlLoai/pIndex.php";
                break;
                case 4:
                    include "pages/qlHang/pIndex.php";
                break;
                case 5:
                    include "pages/qlDonDatHang/pIndex.php";
                break;
                default:
                include "pages/pError.php";
            break;
            }
        ?>
    </div>
    <div id="footer">
    Thiết kế bởi <i class="fa fa-heart" style="color: #e60000;" aria-hidden="true"></i> Deploy99
     <a id="back-to-top" href="#" class="btn btn-info btn-md back-to-top" role="button"><i class="fa fa-eject"></i></a>
</div>

</body>

</html>