 <button type="button" class="btn btn-success" 
   onclick="window.location.href='index.php?c=3&a=3'" 
   style="margin-left:22%;margin-top:5px;margin-bottom:5px">Thêm loại sản phẩm</button>

  <div class="col-md-3 col-sm-4 col-sx-6" style="float: right;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm loại sản phẩm">
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
       <th width="300"> Tên loại sản phẩm</th>
       <th width="100">Tình trạng</th>
       <th width="250">Thao tác</th>
    </tr>
    <?php
       $sql = "SELECT *from loaisanpham";
                $result = DataProvider::ExecuteQuery($sql);
              $i=1;
              while ($row = mysqli_fetch_array($result))
              {
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["TenLoaiSanPham"]; ?></td>
                      
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
                     onclick="window.location.href='pages/qlLoai/xlKhoa.php?id=<?php echo $row['MaLoaiSanPham'] ?>'" 
                       style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá loại </button>
                     <button type="button" class="btn btn-primary" 
                     onclick="window.location.href='index.php?c=3&a=2&id=<?= $row['MaLoaiSanPham'] ?>'"  style="margin-left:10px;">Cập nhật loại</button>
                    </td>
                </tr>
         <?php
     }
 ?>
</table>
      