 <button type="button" class="btn btn-success" 
   onclick="window.location.href='index.php?c=5&a=3'"
    style="margin-left:12%;margin-top:5px;margin-bottom:5px">Thêm đơn đặt hàng</button>

      <div class="col-md-3 col-sm-4 col-sx-6" style="float: right;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm đơn hàng...">
                        <div class="input-group-append">
                            <button class="btn btn-warning Search" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
<table cellspacing="0" border="1" style="margin-top:2%;" class="table-hover">
    <tr>
       <th width="100">STT</th>
       <th width="150">Mã đơn đặt hàng</th>
       <th width="100">Ngày lập</th>
       <th width="200">Khách hàng</th>
       <th width="100">Tình trạng</th>
       <th width="300">Thao tác</th>     
    </tr>
    <?php
       $sql = "SELECT  d.MaDonDatHang, d.NgayLap, d.MaTinhTrang, t.TenHienThi, tt.TenTinhTrang FROM TaiKhoan t, DonDatHang d, TinhTrang tt 
              WHERE d.MaTaiKhoan = t.MaTaiKhoan AND d.MaTinhTrang = tt.MaTinhTrang ORDER BY d.MaTinhTrang, d.NgayLap";
              $result = DataProvider::ExecuteQuery($sql);
              $i = 1;
              while ($row = mysqli_fetch_array($result))
              {
                  $c = "";
                  switch($row["MaTinhTrang"]){
                      case 2:
                          $c = "classGiaoHang";
                      break;
                      case 3:
                          $c = "classThanhToan";
                      break;
                      case 4:
                          $c = "classHuy";
                      break;
                  }
                  ?>
                  <tr class="<?php echo $c; ?>">
                       <td><?php echo $i++; ?></td>
                       <td><?php echo $row["MaDonDatHang"]; ?></td>
                       <td><?php echo $row["NgayLap"]; ?></td>
                       <td><?php echo $row["TenHienThi"]; ?></td>
                       <td><?php echo $row["TenTinhTrang"]; ?></td>       
                  <td>
                     <button type="button" class="btn btn-danger" 
                     onclick="window.location.href='pages/qlDonDatHang/xlKhoa.php?id=<?php echo $row['MaDonDatHang'] ?>'"  
                     style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá đơn hàng</button>
                     
                    <button type="button" class="btn btn-primary" 
                     onclick="window.location.href='index.php?c=5&a=2&id=<?php echo $row['MaDonDatHang'] ?>'"  style="margin-left:10px;">Chi tiết đơn hàng</button>
                </td>
             </tr>
         <?php
     }
 ?>
</table>
      