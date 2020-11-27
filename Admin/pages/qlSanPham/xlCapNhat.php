<?php
   include "../../../lib/DataProvider.php";

   if(isset($_GET["id"]))
   {
       $id = $_GET["id"];
       $ten = $_GET["txtTen"];
       $hang = $_GET["cbHang"];
       $loai = $_GET["cbLoai"];
       $gia = $_GET["txtGia"];
       $ton = $_GET["txtTon"];
       $ban = $_GET["txtBan"];
       $mota = $_GET["txtMoTa"];

       $sql = "UPDATE SanPham SET TenSanPham = '$ten',GiaSanPham='$gia',SoLuongTon='$ton',SoLuongBan ='$ban',
       MoTa='$mota',MaLoaiSanPham='$loai',MaHangSanXuat='$hang' WHERE MaSanPham = $id";

       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=2");
?>

