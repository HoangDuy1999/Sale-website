<h2>Sản phẩm bán mới nhất</h2>
<hr class="hrr">
<br>
<?php
    $sql ="SELECT * FROM SanPham WHERE BiXoa =0 ORDER BY NgayNhap DESC LIMIT 0, 10";
    $result = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($result))
    {
        ?>
        <div class ="box">
            <img src="images/<?php echo $row["HinhURL"]; ?>" />
            <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
            <div class="pprice">Giá: <?=number_format($row["GiaSanPham"])  ?>đ</div>
            <div class="action">
                <a href="index.php?a=4&id=<?= $row["MaSanPham"]; ?>&idType=<?=$row["MaLoaiSanPham"]?>">Chi tiết sản phẩm <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
        <?php
    }
?>