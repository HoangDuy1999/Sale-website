<?php
   include "../../../lib/DataProvider.php";
   if(isset($_POST["txtTen"]))
   {
       $ten = $_POST["txtTen"];
       $hang = $_POST["cmbHang"];
     //  $hinh = $_FILES["fHinh"];
       $gia = $_POST["txtGia"];
       $ton = $_POST["txtTon"];
       $mota = $_POST["txtMoTa"];
       $loai = $_POST["cmbLoai"];
       $xuatxu = $_POST["txtXx"];
       $ngay=$_POST["txtN"];
       $sql = "INSERT INTO sanpham(TenSanPham, HinhURL,GiaSanPham,SoLuongTon,MoTa,MaLoaiSanPham,MaHangSanXuat,XuatXu,NgayNhap,BiXoa) 
       VALUES('$ten','$hinh','$gia','$ton','$mota','$loai','$hang','$xuatxu','$ngay',0)";
       DataProvider::ExecuteQuery($sql);
   }
   DataProvider::ChangeURL("../../index.php?c=2");
?>