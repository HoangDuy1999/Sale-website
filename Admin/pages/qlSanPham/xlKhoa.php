<?php
   include "../../../lib/DataProvider.php";

   if(isset($_GET["id"]))
   {
       $id = $_GET["id"];
    
       $sql = "DELETE FROM SanPham WHERE MaSanPham = $id ";
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=2");
?>