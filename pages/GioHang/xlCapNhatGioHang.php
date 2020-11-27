<?php
    session_start();
    include "../../lib/DataProvider.php";
    require_once "../../lib/ShoppingCart.php";
    
    // nếu tồn tại biến huỷ sản phẩm khỏi giỏ hàng thì
    if(isset($_POST['huy'])){
         $id = $_POST["hdID"];
        $gioHang = unserialize($_SESSION["GioHang"]);
         $gioHang->delete($id);
         $_SESSION["GioHang"]=serialize($gioHang);
    }
      if(isset($_POST['capnhat']) && isset($_POST["txtSL"])){
         $sl=$_POST["txtSL"];
         $id = $_POST["hdID"];
         if($sl<0){
        echo '<script language="javascript">alert("Số lượng nhập không  được âm nhé! ^-^");</script>';
                   DataProvider::ChangeURL("../../index.php?a=5");
                   die();

         }
         if($sl==0){
              $gioHang = unserialize($_SESSION["GioHang"]);
            $gioHang->delete($id);
            $_SESSION["GioHang"]=serialize($gioHang);
         }
        $gioHang = unserialize($_SESSION["GioHang"]);
         $gioHang->update($id,$sl);
         $_SESSION["GioHang"]=serialize($gioHang);
       
    }
    
   
      DataProvider::ChangeURL("../../index.php?a=5");
      
    
    /*
    else
    {
        DataProvider::ChangeURL("../../index.php?a=404");
    }
    */
?>