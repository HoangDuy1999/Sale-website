<?php 

   include "../../../lib/DataProvider.php";
     /*

   if(isset($_GET["id"]))
   {
       $id = $_GET["id"];
  
        //kiểm tra có chi tiết đơn hàng thuộc về đơn đặt hàng đang muốn xóa hay không?
       $sql = "SELECT COUNT(*) FROM ChiTietDonDatHang WHERE MaDonDatHang = $id";
       $result = DataProvider::ExecuteQuery($sql);
       $row = mysqli_fetch_array($result);

        if($row[0] == 0)
       {
           //thực hiện xóa hãng ra khỏi db
            $sql = "DELETE FROM DonDatHang WHERE MaDonDatHang = $id and MaTinhTrang=4 ";
       }
        else
       {
           //thực hiện khóa hãng do đã có chi tiết đơn đặt hàng thuộc về loại này
           $sql = "UPDATE DonDatHang SET BiXoa = 1 - BiXoa WHERE MaDonDatHang = $id";
       }
       
         $sql = "DELETE FROM DonDatHang WHERE MaDonDatHang = $id and MaTinhTrang=4 ";
       
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=5");
*/

   if(isset($_GET["id"]))
   {
       $id = $_GET["id"];
    
       $sql = "DELETE FROM DonDatHang WHERE MaDonDatHang = $id and MaTinhTrang=4 ";
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=5");
?>
