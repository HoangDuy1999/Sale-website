<?php
   include "../../../lib/DataProvider.php";

   if(isset($_GET["txtTen"]))
   {
       $ten = $_GET["txtTen"];
        $mk = $_GET["txtP"];
         $name = $_GET["txtN"];
         
       $sql = "INSERT INTO TaiKhoan(TenDangNhap,MatKhau,TenHienThi, BiXoa,MaLoaiTaiKhoan) 
       VALUES('$ten','$mk','$name',0,1)";
       DataProvider::ExecuteQuery($sql);
       
   }

   DataProvider::ChangeURL("../../index.php?c=1");
?>