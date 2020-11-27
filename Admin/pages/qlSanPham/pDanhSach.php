 <button type="button" class="btn btn-success" 
   onclick="window.location.href='index.php?c=2&a=3'" 
   style="margin-left:2%;margin-top:5px;margin-bottom:5px">Thêm sản phẩm</button>

  <div class="col-md-3 col-sm-4 col-sx-6" style="float: right;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append">
                            <button class="btn btn-warning Search" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
<table cellspacing="0" border="1" class="table-hover" style="margin-top:2%;">
    <tr>
       <th width="100">STT</th>
       <th width="300">Tên sản phẩm</th>
       <th width="100">Hình</th>
       <th width="100">Giá</th>
       <th width="100">Ngày nhập</th>
       <th width="100">Số lượng tồn</th>
       <th width="100">Số lượng bán</th>
       <th width="100">Số lược xem</th>
       <th width="100">Loại</th>
       <th width="100">Hãng</th>
       <th width="100">Mô tả</th>
       <th width="100">Trạng thái</th>
       <th width="200">Thao tác</th>      
    </tr>
    <?php
        $sql = "SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon,
         s.SoLuongBan, s.SoLuongXem, s.MoTa, s.BiXoa,
       l.TenLoaiSanPham , h.TenHangSanXuat FROM SanPham s, LoaiSanPham l, HangSanXuat h 
              WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat ORDER BY s.MaSanPham DESC";
              $result = DataProvider::ExecuteQuery($sql);
              $i =1;
                while ($row = mysqli_fetch_array($result))
             
              {
                  ?>
                  
                  <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["TenSanPham"]; ?></td>
                        <td><img width = 180px src="../images/<?php echo $row["HinhURL"];?>" /></td>
                       <td><?= number_format($row["GiaSanPham"])  ?></td>
                       <td><?= $row["NgayNhap"]; ?></td>
                       <td><?= $row["SoLuongTon"]; ?></td>
                       <td><?= $row["SoLuongBan"]; ?></td>
                       <td><?= $row["SoLuongXem"]; ?></td>
                       <td><?= $row["TenLoaiSanPham"]; ?></td>
                       <td><?= $row["TenHangSanXuat"]; ?></td>
                  <td>
                      <?php
                         if(strlen($row["BiXoa"]) > 20)
                         // sd hàm substr để cắt chuỗi
                             $sMoTa = substr($row["MoTa"], 0, 20)."...";
                         else 
                             $sMoTa = $row["MoTa"];
                       // echo $sMoTa;
                       ?>
                       <div class="fullMoTa">
                           <?= $row["MoTa"]; ?>
                        </div>
                  </td>
                  <td>
                      <?php 
                          if($row["BiXoa"] == 1)
                               echo "<img src='images/locked.png' />";
                          else
                             echo "<img src='images/active.png' />";
                       ?>
                    </td>
  
                  <td>
                     <button type="button" class="btn btn-danger" 
                     onclick="window.location.href='pages/qlSanPham/xlKhoa.php?id=<?php echo $row['MaSanPham'] ?>'"   style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá sản phẩm </button>
                     <button type="button" class="btn btn-primary" 
                     onclick="window.location.href='index.php?c=2&a=2&id=<?= $row['MaSanPham'] ?>'"  style="margin-left:10px;">Cập nhật sản phẩm</button>
                </td>
             </tr>
         <?php
     }
 ?>
</table>
      