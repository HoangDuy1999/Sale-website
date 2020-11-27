<?php
    if(!isset($_GET["id"]))
       DataProvider::ChangeURL("index.php?c=404");

    $id = $_GET["id"];
    $sql = "SELECT * FROM LoaiSanPham WHERE MaLoaiSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>
<form action="pages/qlLoai/xlCapNhat.php" method="get" onsubmit="return KiemTra();">
        <fieldset>
       <legend style="text-align: center;">Cập nhật thông tin loại sản phẩm</legend>
    <div class="roww ">
               <div id="error"></div>
       <span>Tên loại sản phẩm:</span>
       <input type="text" name="txtTen" id="txtTen" value="<?= $row["TenLoaiSanPham"]; ?>" class="form-control" style="width:300px"/>
        <input type="hidden" name="id" value="<?=$row["MaLoaiSanPham"]; ?>"  class="form-control" style="width:300px" />
      <button type="submit" value="Cập nhật "  class="btn btn-primary ">Cập nhật</button>
    </div>
  </fieldset>
</form>
<script type="text/javascript">
   function KiemTra()
   {
       var ten = document.getElementById("txtTen");
       var err = document.getElementById("error");
       if(ten.value == "")
       {
           err.innerHTML = "Tên loại không được rỗng";
           ten.focus();
           return false;
       }
       else
           err.innerHTML = "";

        return true;
   }
</script>
    