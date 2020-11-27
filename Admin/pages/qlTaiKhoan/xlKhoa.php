<?php
   include "../../../lib/DataProvider.php";

   if(isset($_GET["id"]))
   {
       $id = $_GET["id"];
    
       $sql = "DELETE FROM TaiKhoan WHERE MaTaiKhoan = $id AND MaLoaiTaiKhoan<>2";
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=1");
?>
