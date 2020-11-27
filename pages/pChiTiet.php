
<?php

 if(isset($_GET["id"])){
        $id = $_GET["id"];

          $sql = "SELECT * FROM sanpham WHERE MaSanPham= '$id' AND BiXoa=0";
       // return parent::getOneRow($sql);
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
    }
    // print_r($result);

?>
<h2>Thông tin chi tiết sản phẩm</h2>
<div id="chitietsp">
    <div id="chitietleft">
        <img src="images/<?php echo $row["HinhURL"]; ?>">
    </div>
    <div id="chitietright">
        <div>
            <span class="label">Tên sản phẩm:</span>
            <span class="productname"><?php echo $row["TenSanPham"]; ?></span>
        </div>
        <div>
            <span class="label">Giá sản phẩm:</span>
            <span class="factory"><?=number_format($row["GiaSanPham"])  ?> đ</span>
        </div>
        <div>
            <span class="label">Nhà sản xuất:</span>
            <span class="data"><?php echo $row["NhaSanXuat"]; ?></span>
        </div>
        <div>
            <span class="label">Xuất xứ:</span>
            <span class="data"><?= $row["XuatXu"]; ?></span>
        </div>
        <div>
        <span class="label">Số lượt xem:</span>
        <span class="data"><?=$row["SoLuongXem"]; ?></span>
    </div>
     <div>
        <span class="label">Số lượng bán:</span>
        <span class="data"><?=$row["SoLuongBan"]; ?></span>
    </div>
      
    </div>
    
    <div class="giohang">
        <?php
            if(isset($_SESSION["MaTaiKhoan"]))
            {
                ?>
                    <a href="index.php?a=5&id=<?=$row["MaSanPham"]; ?>">
                        <img src="img/add.png" width="100" height="50">Thêm vào giỏ hàng
                    </a>
                    <?php
            }
        ?>
    </div>
</div>
<div id="mota">
  <strong> Mô tả: </strong> <?= $row["MoTa"]; ?>
</div>

<?php
$SoLuocXem = $row["SoLuongXem"] + 1;
$sql = "UPDATE SanPham SET SoLuongXem = $SoLuocXem
        WHERE MaSanPham =$id";
DataProvider::ExecuteQuery($sql);        
?>
<div id="sanphamcungloai">
    <br>
    <h2 >Sản phẩm cùng loại</h2>
    <hr class="hr">
    <?php

        //lấy 5 sản phẩm cùng loại

      if( isset($_GET["idType"]))
        $idType=$_GET["idType"];

        $sql1 = "SELECT *
                FROM SanPham 
                where MaLoaiSanPham = $idType AND BiXoa=0   LIMIT 5  ";
               // print_r($sql1);
    $result1 = DataProvider::ExecuteQuery($sql1);
    while($row1 = mysqli_fetch_array($result1))
    {
        ?>
        <div class ="box">
            <img src="images/<?= $row1["HinhURL"]; ?>" />
            <div class="pname"><?= $row1["TenSanPham"]; ?></div>
            <div class="pprice">Giá: <?=number_format($row1["GiaSanPham"]) ?>đ</div>
            <div class="action">
                <a href="index.php?a=4&id=<?=$row1["MaSanPham"]; ?>&idType=<?=$row1["MaLoaiSanPham"];?>">
                Chi tiết sản phẩm<i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
        <?php
    }
?>
    </div>