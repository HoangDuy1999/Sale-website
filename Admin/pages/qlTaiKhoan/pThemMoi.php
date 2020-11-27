<form action="pages/qlTaiKhoan/xlThemMoi.php" method="get" onsubmit="return KiemTra();">
  <fieldset>
       <legend style="text-align: center;">Thêm mới tài khoản người dùng</legend>
      
    <div class="roww ">
               <div id="error"></div>
       <span>Tên hiển thị:</span>
       <input type="text" name="txtN" id="txtN" class="form-control" style="width:300px"/>
       <span>Tên tài khoản:</span>
       <input type="text" name="txtTen" id="txtTen" class="form-control" style="width:300px"/>
       <span>Mật khẩu:</span>
       <input type="password" name="txtP" id="txtP" class="form-control" style="width:300px"/>

        
       
      <button type="submit" value="Thêm mới" STYLE="margin-left:10%;" class="btn btn-success ">Thêm mới</button>
    </div>
 

  </fieldset>
              
</form>
<script type="text/javascript">
   function KiemTra()
   {
       var ten = document.getElementById("txtTen");
        var mk = document.getElementById("txtP");
         var name = document.getElementById("txtN");
         var ns = document.getElementById("txtNS");
       var err = document.getElementById("error");
       if(ten.value == "")
       {
           err.innerHTML = "Tên tài khoản người dùng không được rỗng nhé!!!";
           ten.focus();
           return false;
       }
       if(mk.value == "")
       {
           err.innerHTML = "Mật khẩu không được rỗng nhé!!!";
           mk.focus();
           return false;
       }
       if(name.value == "")
       {
           err.innerHTML = "Tên hiển thị không được rỗng nhé!!!";
           name.focus();
           return false;
       }
     
       else
           err.innerHTML = "";

        return true;
   }
</script>