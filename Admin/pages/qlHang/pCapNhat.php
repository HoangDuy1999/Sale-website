<?php
    if(!isset($_GET["id"]))
       DataProvider::ChangeURL("index.php?c=404");

    $id = $_GET["id"];
    $sql = "SELECT * FROM HangSanXuat WHERE MaHangSanXuat = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>
<form action="pages/qlHang/xlCapNhat.php" method="get" onsubmit="return KiemTra();">
     <fieldset>
       <legend style="text-align: center;">Cập nhật thông tin hãng sản xuất</legend>
    <div class="roww ">
               <div id="error"></div>
       <span>Tên hãng sản xuất:</span>
       <input type="text" name="txtTen" id="txtTen" value="<?= $row["TenHangSanXuat"]; ?>" class="form-control" style="width:300px"/>
        <input type="hidden" name="id" value="<?=$row["MaHangSanXuat"]; ?>"  class="form-control" style="width:300px" />
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
           alert ("Tên hãng sản xuất không được rỗng nhé!");
           ten.focus();
           return false;
       }
       else
           err.innerHTML = "";

        return true;
   }
</script>
    