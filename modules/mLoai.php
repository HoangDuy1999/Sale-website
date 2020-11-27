<dl>
    <dt class="menu">Loại sản phẩm</dt>
  <hr class="hrhr">
    <?php
        $sql = "SELECT *FROM LoaiSanPham WHERE BiXoa =0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            ?>
            <dd>
                <a href="index.php?a=3&id=<?php echo $row["MaLoaiSanPham"]; ?>">
                    <?php echo $row["TenLoaiSanPham"]; ?>
                </a>
            </dd>
            <?php
        }
    ?>
</dl>