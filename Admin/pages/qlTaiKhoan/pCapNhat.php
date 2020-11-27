<form action="pages/qlTaiKhoan/xlCapNhat.php" method="get">
    <fieldset>
         <legend style="text-align: center;">Cập nhập thông tin tài khoản</legend>
         <?php
           if(isset($_GET["id"]))
           {
               $id = $_GET["id"];
               $sql = "SELECT TenDangNhap, MaLoaiTaiKhoan FROM TaiKhoan WHERE MaTaiKhoan = $id";
               $result = DataProvider::ExecuteQuery($sql);
               $row = mysqli_fetch_array($result);
               $TenDangNhap = $row["TenDangNhap"];
               $MaLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];

           }
        ?>
        <div class="roww ">
           <span> Tên đăng nhập:</span>
           <?php echo $TenDangNhap; ?>


           <div>Loại tài khoản:</div>
           <select name="cmbLoaiTaiKhoan" class="form-control form-control-sm">
              <?php
                  $sql = "SELECT *FROM LoaiTaiKhoan";
                  $result = DataProvider::ExecuteQuery($sql);
                  while($row = mysqli_fetch_array($result))
                  {
                      if($row["MaLoaiTaiKhoan"] == $MaLoaiTaiKhoan)
                        echo "<option value='".$row["MaLoaiTaiKhoan"]."' selected>".$row["TenLoaiTaiKhoan"]."</option>";
                        else   
                        echo "<option value='".$row["MaLoaiTaiKhoan"]."'>".$row["TenLoaiTaiKhoan"]."</option>";
                  }
              ?>
            </select>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <button type="submit" value="Cập nhật "  class="btn btn-primary ">Cập nhật</button>

                    </div>
        </fieldset>
</form>
