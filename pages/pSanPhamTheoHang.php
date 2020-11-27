<h2>Sản phẩm theo hãng</h2>
<?php
    if (isset($_GET["id"]))
        $id= $_GET["id"];
    else
        DataProvider::ChangeURL("index.php?a=404");

    $sql ="SELECT * FROM SanPham WHERE BiXoa = 0  AND MaHangSanXuat = $id";
    $result = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($result))
    {
        ?>
        <div class ="box">
            <img src="images/<?php echo $row["HinhURL"]; ?>" />
            <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
            <div class="pprice">Giá: <?=number_format($row["GiaSanPham"]) ?>đ</div>
            <div class="action">
                <a href="index.php?a=4&id=<?= $row["MaSanPham"]; ?>&idType=<?=$row["MaLoaiSanPham"]?>">
                Chi tiết sản phẩm<i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
        <?php
    }
?>