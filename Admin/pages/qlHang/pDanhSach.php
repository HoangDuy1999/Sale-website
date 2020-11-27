 <button type="button" class="btn btn-success" 
   onclick="window.location.href='index.php?c=4&a=3'" style="margin-left:22%;margin-top:5px;margin-bottom:5px">Thêm hãng sản xuất</button>

    <div class="col-md-3 col-sm-4 col-sx-6" style="float: right;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm hãng ...">
                        <div class="input-group-append">
                            <button class="btn btn-warning Search" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
<table cellspacing="0" border="1" class="table-hover" style="margin-top: 2%;">
    <tr>
       <th width="100">STT</th>
       <th width="300"> Tên hãng sản xuất</th>
       <th width="100">Tình trạng</th>
       <th width="250" >Thao tác</th>
      
    </tr>
    <?php
       $sql = "SELECT * FROM HangSanXuat";
              $result = DataProvider::ExecuteQuery($sql);
              $i=1;
              while ($row = mysqli_fetch_array($result))
              {
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["TenHangSanXuat"]; ?></td>
                      
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
                     onclick="window.location.href='pages/qlHang/xlKhoa.php?id=<?php echo $row['MaHangSanXuat'] ?>'"  style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá hãng</button>
                     <button type="button" class="btn btn-primary" 
                     onclick="window.location.href='index.php?c=4&a=2&id=<?= $row['MaHangSanXuat'] ?>'"  style="margin-left:10px;">Cập nhật</button>
                    </td>
                </tr>
         <?php
     }
 ?>
</table>
      