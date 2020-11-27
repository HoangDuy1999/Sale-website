<h1>Quản lý Đơn đặt hàng</h1>
<?php
    $a = 1;
    if(isset($_GET["a"]))
       $a=$_GET["a"];
    
    switch ($a)
    {
        case 1:
            include "pages/qlDonDatHang/pDanhSach.php";
        break;
        case 2:
            include "pages/qlDonDatHang/pChiTietDonDatHang.php";
        break;
        case 3:
            include "pages/qlDonDatHang/pThemMoi.php";
        break;
        default:
        include "pages/pError.php";
    break;
    }
?>