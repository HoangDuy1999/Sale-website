<?php
    include "lib/ShoppingCart.php";
    if (isset($_SESSION["GioHang"]) != null)
    {

        /**
         * Hàm unserialize() trong PHP sẽ chuyển đổi chuỗi đã được hàm serialize() 
         * chuyển đổi trước đó về chuỗi ban đầu.
         *  Nếu truyền vào hàm unserialize() một chuỗi nguyên bản chưa được chuyển đổi, hàm sẽ báo lỗi.
         * 
         * 
         */
        $gioHang = unserialize($_SESSION["GioHang"]);
    }
    else
        $gioHang = new ShoppingCart();

    if (isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $gioHang->add($id);
        $_SESSION["GioHang"] = serialize($gioHang);

        DataProvider::ChangeURL("index.php?a=5");
    }   

    $sub = 1;
    if(isset($_GET["sub"]))
        $sub = $_GET["sub"];

        switch ($sub){
            case 1:
                include "pages/GioHang/pDanhSach.php";
                break;
            case 2:
                include "pages/GioHang/pThongBaoDatHangThanhCong.php";
                break; 
            default:
                DataProvider::ChangeURL("index.php?a=404");
                break;
        }
?>