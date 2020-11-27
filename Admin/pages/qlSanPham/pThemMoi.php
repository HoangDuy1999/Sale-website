<form action="pages/qlSanPham/xlThemMoi.php" method="post" onsubmit="return KiemTra();" enctype="multipart/form-data">
  <fieldset>
       <legend style="text-align: center;">Thêm sản phẩm mới</legend>
        <div class="roww ">
          <div id="error"></div>
       <span>Tên sản phẩm:</span>
       <input type="text" class="form-control" style="width:400px" name="txtTen" id="txtTen" />

   <div>
       <span>Hãng sản xuất</span>
       <select name="cmbHang" class="form-control" style="width:400px" >
          <?php  
              $sql = "SELECT *FROM HangSanXuat WHERE BiXoa=0";
              $result = DataProvider::ExecuteQuery($sql);
              while ($row = mysqli_fetch_array($result)){
                  ?>
                  <option value="<?php echo $row["MaHangSanXuat"]; ?>"><?php echo $row["TenHangSanXuat"]; ?></option>
                  <?php
              }
              ?>
        </select>
    </div>
     <div>
        <span>Loại Sản Phẩm :</span>
           <select class="form-control" style="width:400px" name="cmbLoai">
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
     <div>
        <span>Xuất xứ :</span>
        <input class="form-control" style="width:400px" type="text" name="txtXx" id="txtXx"/>
    </div>
     <div>
        <span>Ngày nhập:</span>
        <input class="form-control" style="width:400px" type="date" name="txtN" id="txtN"/>
    </div>
    <div>
        <span>Hình</span>
        <input class="form-control" style="width:400px" type="file" name="fHinh" id="fHinh"/>
    </div>
    <div>
        <span>Giá</span>
        <input type="text" class="form-control" style="width:400px" name="txtGia" id="txtGia"/>
    </div>
    <div>
        <span>Số lượng tồn</span>
        <input type="text" class="form-control" style="width:400px" name="txtTon" id="txtTon"/>
    </div>
    <div>
        <span>Mô tả</span>
        <textarea  class="form-control" style="width:400px;height:200px"name="txtMoTa"></textarea>
    </div>
    <div>
          <button type="submit" value="Thêm mới "   style="margin-left:15%"class="btn btn-success ">Thêm mới</button>
    <div>
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