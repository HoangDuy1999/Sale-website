<?php
    session_start();
    include "../../lib/DataProvider.php";
    include "../../lib/ShoppingCart.php";
if(isset($_SESSION["GioHang"]))
{
    $gioHang = unserialize($_SESSION["GioHang"]);
    $maTaiKhoan =$_SESSION["MaTaiKhoan"];

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngayLap = date("Y-m-d H:i:s");
    $ngayLapTam=date("Y-m-d");
    $maTinhTrang = 1;
    $tongGia =$_SESSION["TongGia"];

    // xử lý đơn đặt hàng thời gian là dd/mm/yyyy
    $sql="SELECT MaDonDatHang FROM DonDatHang WHERE NgayLap like '$ngayLapTam%' 
    ORDER BY MaDonDatHang DESC LIMIT 1";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
    $r = "081012003";
    $sttMaDonHang = 0;
    if($row != null)
    {
        $sttMaDonDatHang = substr($row["MaDonDatHang"], 6, 3);
    }
    $sttMaDonDatHang += 1;
    $sttMaDonHang = sprintf("%04s", $sttMaDonHang);
    
    $maDonDatHang = date("d").date("m").substr(date("Y"),2,2).$sttMaDonDatHang;


        // tạo đơn đặt hàng mới và lưu xuống csdl bảng đơn đặt hàng

    $sql = "INSERT INTO DonDatHang(MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang) 
    VALUES ('$maDonDatHang', '$ngayLap',$tongGia,$maTaiKhoan,$maTinhTrang)";
    DataProvider::ExecuteQuery($sql);

    // xử lý thêm chi tiết đơn hàng
    $soLuongSanPham = count($gioHang->listProduct);
    for($i = 0; $i < $soLuongSanPham; $i++)
    {
        $id = $gioHang->listProduct[$i]->id;
        $sl = $gioHang->listProduct[$i]->num;

        // lấy thông tin sản phẩm: giá sp, lg tồn
        $sql="SELECT GiaSanPham,SoLuongTon from sanpham where MaSanPham=$id";
        $result= DataProvider::ExecuteQuery($sql);
        $row=mysqli_fetch_array($result);
        
        $soLuongTonHienTai = $row["SoLuongTon"];
        $giaSanPham = $row["GiaSanPham"];

        $sttChiTietDonDatHang = sprintf("%05s",$i);
        $maChiTietDonDatHang = $maDonDatHang.$sttChiTietDonDatHang;

        // thêm 1 dòng mới vào bảng chi tiết đơn đặt hàng
        $sql = "INSERT INTO ChiTietDonDatHang(MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham)
         VALUES('$maChiTietDonDatHang',$sl,$giaSanPham,'$maDonDatHang',$id)";
        DataProvider::ExecuteQuery($sql);

        // cập nhật lại số lượng tồn trong bảng sản phẩm
        $soluongtonmoi=$soLuongTonHienTai-$sl;
        $sql="update sanpham set SoLuongTon=$soluongtonmoi where MaSanPham=$id";
        DataProvider::ExecuteQuery($sql);
    }
    unset($_SESSION["GioHang"]);
    DataProvider::ChangeURL("../../index.php?a=5&sub=2");
    }
    else
    DataProvider::ChangeURL("../../index.php?a=404");
?>