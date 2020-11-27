<?php
    session_start();
    include "../lib/DataProvider.php";

    if(isset($_POST["txtUS"]) && isset ($_POST["txtPS"]))
    {
        $us = $_POST["txtUS"];
        $ps = $_POST["txtPS"];

        $sql = "SELECT * FROM TaiKhoan
                WHERE BiXoa = 0
                AND TenDangNhap='$us'
                AND MatKhau ='$ps'";
        $result = DataProvider::ExecuteQuery($sql);
       // print_r($result);
        $row = mysqli_fetch_array($result);
        if($row == null)
            DataProvider::ChangeURL("../index.php?a=404&id=1");
        else
            {
               $_SESSION["MaTaiKhoan"] = $row["MaTaiKhoan"];
               $_SESSION["MaLoaiTaiKhoan"]= $row["MaLoaiTaiKhoan"];
               $_SESSION["TenHienThi"] = $row["TenHienThi"];
               
               if($row["MaLoaiTaiKhoan"] == 2 )
               {
                   DataProvider::ChangeURL("../admin/index.php");
               }
               else
               {
                    $curURL =$_SESSION["path"];
                    if(strpos($curURL, "a=404&id=1") == 20)
                        DataProvider::ChangeURL("../index.php");
                    else
                        DataProvider::ChangeURL("../..".$curURL);
               }
            }    
    }
    else
        DataProvider::ChangeURL("..index.php?a=404&id=1");
?>
