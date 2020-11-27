<form action="pages/qlLoai/xlThemMoi.php" method="get" onsubmit="return KiemTra();">
    <fieldset>
       <legend style="text-align: center;">Thêm mới loại sản phẩm</legend>
    <div class="roww ">
               <div id="error"></div>
       <span>Tên loại sản phẩm:</span>
       <input type="text" name="txtTen" id="txtTen" class="form-control" style="width:300px"/>
      <button type="submit" value="Thêm mới"  class="btn btn-success ">Thêm mới sản phẩm</button>
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