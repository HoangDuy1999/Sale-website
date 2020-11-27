<div id="quanlygiohang">
    <h2 style="margin-top:20%;margin-left:5%;color:orange"> Quản lý giỏ hàng của bạn</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
           
            <th>Tên sản phẩm</th>
            <th>Hình sản phẩm</th>
            <th >Giá sản phẩm</th>
            <th >Số lượng</th>
            <th >Thao tác</th>
        </tr>
        <?php
            $tongGia = 0;
            if(isset($_SESSION["GioHang"]))
            {
                $soSanPham = count($gioHang->listProduct);

                for($i=0; $i<$soSanPham; $i++){
                    $id = $gioHang->listProduct[$i]->id;
                    $sql = "SELECT * FROM SanPham WHERE MaSanPham =$id";

                    $result = DataProvider::ExecuteQuery($sql);
                    $row = mysqli_fetch_array($result)

        
        ?>
        <form name="frmGioHang" action="pages/GioHang/xlCapNhatGioHang.php" method="post">
            <tr>
                
                <td style="vertical-align: middle;">
                    <?= $row["TenSanPham"];?>
                </td>
                <td align="center">
                    <img src="images/<?= $row["HinhURL"]; ?>" width="100" height="100">
                </td>
                <td style="vertical-align: middle;">
                <?=number_format($row["GiaSanPham"])  ?>
                </td>
                <td>
                    <input type="text" name="txtSL" id="txtSL" class="form-control" value=" <?= $gioHang->listProduct[$i]->num; ?>"
                     width="15" size="5" style="width:65px;margin-top:30px;">
                    <input type="hidden" 
                    name="hdID" value=" <?= $gioHang->listProduct[$i]->id; ?>" />
                </td>
                <td style="vertical-align: middle;">
                   
                    <button class="btn btn-primary"  value="Cập nhật số lượng" name="capnhat" type="submit">Cập nhật số lượng</button>
                      <button class="btn btn-danger"  value="huỷ giỏ hàng" name="huy" type="submit">Huỷ giỏ hàng</button>
                </td>
            </tr>
        </form>
        <?php
        $tongGia += $row["GiaSanPham"]* $gioHang->listProduct[$i]->num;
        }           
    }
    $_SESSION["TongGia"] = $tongGia;
?>
</thead>
</table >
<br><br>
    <div class="pprice">
        Tổng thành tiền: <?=number_format($tongGia)  ?> đ
    </div>
    <br><br>
    <a href="pages/GioHang/xlDatHang.php">
        <img src="img/dathang.gif" width="150" >
    </a>
</div>