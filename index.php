<?php
    session_start();
    include "lib/DataProvider.php";
    
    $_SESSION["path"] = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deploy99</title>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  


    <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/style-error.css"/>

</head>
<body>
<div id ="wrapper">
    <?php
        include "modules/mHeader.php";
        //include "modules/mSidebar.php";
        ?>
    <div id="content">
        <?php
            $a=1;
            if(isset($_GET["a"])==true)
            $a=$_GET["a"];
            switch ($a){
            case 1:
                    include "pages/pIndex.php";
                break;
            case 2:
                    include "pages/pSanPhamTheoHang.php";
                break;
            case 3:
                    include "pages/pSanPhamTheoLoai.php";
                break;
            case 4:
                    include "pages/pChiTiet.php";
                break;
            case 5:
                    include "pages/GioHang/pIndex.php";
                break;
            case 6:
                    include "pages/TaoTaiKhoan/pIndex.php";
                break;
            default:
                include "pages/pError.php";
                break;
               }
             ?>
        </div>
        <?php include "modules/mFooter.php"?>
        
        </div>

        <script   type="text/javascript">
      
</body>

</html>
