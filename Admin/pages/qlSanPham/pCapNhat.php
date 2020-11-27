<?php
    if(!isset($_GET["id"]))
       DataProvider::ChangeURL("index.php?c=404");

    $id = $_GET["id"];
    $sql = "SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuongXem, s.MoTa, s.BiXoa, l.TenLoaiSanPham,
     s.MaHangSanXuat, h.TenHangSanXuat, s.MaLoaiSanPham  FROM SanPham s, LoaiSanPham l, HangSanXuat h WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat AND s.MaSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>
<form action="pages/qlSanPham/xlCapNhat.php" method="get" onsubmit="return KiemTra();" enctype="multipart/form-data">
   <fieldset class="flt1">
      <legend style="text-align: center;">Cập nhật thông tin  sản phẩm</legend>
       <div class="roww ">
      <div class="sp1">
         <span>Tên sản phẩm :</span>
         <input class="form-control" style="width:400px" type="text" name="txtTen" id="txtTen" value="<?php echo $row["TenSanPham"]; ?>" />
         <i id="errTen"></i>
      </div>
     <div class="sp1">
        <span>Hãng sản xuất :</span>
        <select class="form-control" style="width:400px" name="cbHang">
            <?php
                $sql = "SELECT *FROM HangSanXuat WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while($row1 = mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $row1["MaHangSanXuat"]; ?>"<?php if($row["MaHangSanXuat"] == $row1["MaHangSanXuat"]) echo "selected";
                    ?>><?php echo $row1["TenHangSanXuat"]; ?></option>
                          <?php
                }
                ?>
                </select>

        </div>
        <div class="sp1">
           <span>Loại Sản Phẩm :</span>
           <select class="form-control" style="width:400px" name="cbLoai">
               <?php
                  $sql = "SELECT *FROM LoaiSanPham WHERE BiXoa = 0";
                  $result = DataProvider::ExecuteQuery($sql);
                  while($row1 = mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $row1["MaLoaiSanPham"]; ?>"<?php if($row["MaLoaiSanPham"] == $row1["MaLoaiSanPham"]) echo "selected";
                      ?>><?php echo $row1["TenLoaiSanPham"]; ?></option>
                            <?php
                  }
                  ?>
                  </select>
        </div>
                  <div class="sp1">
                    <span>Hình sản phẩm :</span>
                    <input class="form-control" style="width:400px" type="file" name="fHinh"/><br/>
                    <img src="../images/<?php echo $row["HinhURL"]; ?>" width=150 />
                 </div>
                  <div class="sp1">
                      <span>Giá :</span>
                      <input class="form-control" style="width:400px" type="text" name="txtGia" id="txtGia" value="<?php echo $row["GiaSanPham"]; ?>"/>
                      <i id="errGia"></i>
                 </div>
               <div class="sp1">
                    <span>Số lượng tồn :</span>
                   <input class="form-control" style="width:400px" type="text" name="txtTon" id="txtTon"  value="<?php echo $row["SoLuongTon"]; ?>"/>
                   <i id="errTon"></i>
               </div>
               <div class="sp1">
                    <span>Số lượng bán :</span>
                   <input class="form-control" style="width:400px" type="text" name="txtBan" id="txtBan"  value="<?php echo $row["SoLuongBan"]; ?>"/>
                   <i id="errBan"></i>
               </div>
               <div class="sp1">
                     <span>Mô tả :</span>
                     <textarea class="form-control" style="width:400px;height:300px" name="txtMoTa"><?php echo $row["MoTa"]; ?></textarea>
               </div>
                <div>
                  <input type="hidden"  name="id" value="<?php echo $row["MaSanPham"]; ?>"/>
                  <button class="btn btn-primary" type="submit" value="Cập nhật">Cập nhật sản phẩm</button>
                </div>
                </div>
    </fieldset>
</form>
<script type="text/javascript">
   function KiemTra()
   {
     var ten = document.getElementById("txtTen");
       var gia = document.getElementById("txtGia");
       var slton = document.getElementById("txtTon");
       var slban = document.getElementById("txtBan");
       var err = document.getElementById("error");
       if(ten.value == "")
       {
           err.innerHTML = "Tên sản phẩm không được rỗng";
           ten.focus();
           return false;
       }

       if(gia.value == "")
       {
           err.innerHTML = "Giá sản phẩm không được rỗng";
           gia.focus();
           return false;
       }

       if(slton.value == "")
       {
           err.innerHTML = "Số lượng tồn không được rỗng";
           slton.focus();
           return false;
       }
        if(slban.value == "")
       {
           err.innerHTML = "Số lượng bán không được rỗng";
           slban.focus();
           return false;
       }
       else
           err.innerHTML = "";
           
        return true;
   }
</script>