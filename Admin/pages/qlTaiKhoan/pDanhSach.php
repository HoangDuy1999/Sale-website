  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<button type="button" class="btn btn-success" 
   onclick="window.location.href='index.php?c=1&a=3'" 
   style="margin-left:13%;margin-top:5px;margin-bottom:5px">Thêm tài khoản người dùng</button>

     <div class="col-md-3 col-sm-4 col-sx-6" style="float: right;">
                    <div class="input-group">
                        <input type="text" class="form-control" 
                        placeholder="Tìm kiếm tài khoản... " style="width:83%;">
                        <div class="input-group-append">
                            <button class="btn btn-warning Search" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

<table cellspacing="0" border="1" class="table-hover table-striped" style="margin-top:2%;">
    <tr>
       <th width="100"> Mã tài khoản</th>
       <th width="200"> Tên đăng nhập</th>
       <th width="200"> Tên hiển thị</th>
       <th width="105"> Tình trạng</th>
       <th width="150"> Loại tài khoản</th>
       <th width="250"> Thao tác</th>
    </tr>
    <?php
       $sql = "SELECT t.MaTaiKhoan, t.TenDangNhap, t.TenHienThi, t.DiaChi, t.DienThoai, t.Email, t.BiXoa, l.TenLoaiTaiKhoan FROM TaiKhoan t, LoaiTaiKHoan l 
              WHERE t.MaLoaiTaiKhoan = l.MaLoaiTaiKhoan";
              $result = DataProvider::ExecuteQuery($sql);
              while ($row = mysqli_fetch_array($result))
              {
                  ?>
                  <tr>
                       <td><?php echo $row["MaTaiKhoan"]; ?></td>
                       <td><?php echo $row["TenDangNhap"]; ?></td>
                       <td><?php echo $row["TenHienThi"]; ?></td>
                     
                      
                  <td>
                      <?php
                         if($row["BiXoa"] == 1)
                            echo "<img src='images/locked.png' />";
                         else
                            echo "<img src='images/active.png' />";
                       ?>
                  </td>
                  <td><?php echo $row["TenLoaiTaiKhoan"]; ?></td>
                  <td>
                    
                     <button type="button" class="btn btn-danger" 
                     onclick="window.location.href='pages/qlTaiKhoan/xlKhoa.php?id=<?= $row['MaTaiKhoan'] ?>'"  
                     style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá tài khoản</button>
                    <button type="button" class="btn btn-primary" 
                     onclick="window.location.href='index.php?c=1&a=2&id=<?= $row['MaTaiKhoan'] ?>'"  style="margin-left:10px;">Cập nhật</button>
                </td>
             </tr>
         <?php
     }
 ?>
</table>
      