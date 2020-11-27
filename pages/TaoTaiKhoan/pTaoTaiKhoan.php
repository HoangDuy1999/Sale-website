
<?php
if (isset($_POST['dangky'])) {
    $errMsg = '';
    $username = $_POST['us'];
    $password = $_POST['ps'];
    $cPwd = $_POST['rps'];
    $name=$_POST['name'];
    $capcha = $_POST['reCaptcha'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $country=$_POST['country'];
   
    if ($username == '')
        $errMsg = 'Tên đăng nhập không được để trống!';
    else if ($password == '')
         $errMsg = 'Mật khẩu không được để trống!';    
    else if ($cPwd == '')
        $errMsg = 'Mật khẩu xác thực không được để trống!';
    else if ($capcha == '')
        $errMsg = 'Mã kiểm tra không được để trống!';
    else if ($capcha != 'W68HP')
        $errMsg = 'Mã kiểm tra không chính xác!';        
    if ($errMsg == '') {
        try {
            
           
           // check Thông Tin Username có bị trùng hay không
      
                // Kết nối CSDL
                $conn = mysqli_connect('localhost', 'root', '', 'deploy99') or die ('Lỗi kết nối');
                mysqli_set_charset($conn, "utf8");
                
                // Kiểm tra username hoặc email có bị trùng hay không
                $sql = "SELECT * FROM taikhoan WHERE TenDangNhap = '$username'";
                
                // Thực thi câu truy vấn
                $result = mysqli_query($conn, $sql);
                
                // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username đã tồn tại trong CSDL
                if (mysqli_num_rows($result) > 0)
                {
                    // Sử dụng javascript để thông báo
                    echo '<script language="javascript">alert("Tên đăng nhập đã có trong Database!");</script>';
                    
                    // Dừng chương trình
                    die ();
                }
            
             if($password != $cPwd )
             {
		  $errMsg = 'Mật khẩu xác thực không trùng khớp!'; 
            }
             if(strlen($password)<6 ){
                  echo '<script language="javascript">alert("Mật khẩu phải lớn hơn 6 ký tự!");window.location="index.php?a=6";</script>';
                  return;

             }
             
             
           else{
               
               $sql = "INSERT INTO TaiKhoan(TenDangNhap, MatKhau, MaLoaiTaiKhoan,TenHienThi,DiaChi) 
            VALUES ('$username','$password',1,'$name','$country')";
            DataProvider::ExecuteQuery($sql);
           $success='Chúc mừng bạn đã đăng ký tài khoản thành công.Bây giờ,hãy đăng nhập nhé!'; 
           
            $_SESSION["TenHienThi"] = $name;

          //  DataProvider::ChangeURL("../../index.php");
           }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }    
}
?>
<div class="container">
<h1 class="ptk" style="margin-top:20%;margin-left:5%;color:orange">Tạo tài khoản mới</h1>

     <?php
                if (isset($errMsg)) {
                    echo '<div style="color:#FF0000;text-align:left;font-size:17px;">' . $errMsg . '</div>';
                }
                
                if (isset($success)) {
                    echo '<div style="color:#0000FF;text-align:left;font-size:17px;">' . $success . '</div>';
                }
                ?>
<form action="" method="post">

   <div class="col-md-12 infomation-title"><h5>Thông tin tài khoản</h5></div>
    <div class="form-inline">
        <span class="label">Tên đăng nhập<span class="check">*</span></span>
        <input class="form-control" type="text" style="width:50%" value="<?php if (isset($_POST['us'])) echo $_POST['us'] ?>" id="us" name="us"/>
        <span class="err" id="eUs"></span>
    </div>
    <div class="form-inline">
        <lable class="label">Mật khẩu<span class="check">*</span></lable>
        <input class="form-control" style="width:50%" type="password" value="<?php if (isset($_POST['ps'])) echo $_POST['ps'] ?>" name="ps" id="ps"/>
        <span class="err" id="ePS"></span>
    </div>
    <div class="form-inline">
        <span class="label">Nhập lại mật khẩu<span class="check">*</span></span>
        <input class="form-control" style="width:50%" value="<?php if (isset($_POST['rps'])) echo $_POST['rps'] ?>" type="password" name="rps" id="rps"/>
        <span class="err" id="eRPS"></span>
    </div>
    <div class="col-md-12 infomation-title"><h5>Thông tin cá nhân</h5></div>
    <div class="form-inline">
        <span class="label">Họ tên của bạn</span>
        <input class="form-control" type="text" style="width:50%"
         value="<?php if (isset($_POST['name'])) echo $_POST['name'] ?>" id="name" name="name"/>
     
    </div>
    <div class="form-inline">
        <span class="label">Nơi sống</span>
        <select name="country" class="form-control " style="width:50%">
                                    <option value="<?php if (isset($_POST['country'])) echo $_POST['country'] ?>">--Chọn thành phố--</option>
                                    <option>TPHCM</option>
                                    <option>Hà Nội</option>
                                    <option>Cần Thơ</option>
                                    <option>Bình Dương</option>
                                    <option>Bình Phước</option>
                                    <option>Đồng Nai</option>
                                    <option>Đà Lạt</option>
                                    <option>Đà Nẵng</option>
                                    <option>Quảng Ninh</option>
                                     <option>Vũng Tàu</option>
                                </select>
        <span class="err" id="eADD"></span>
    </div>
    <div class="form-inline">
        <span class="label">Ngày sinh</span>
        <select name="day" class="form-control selectpicker">
                                    <option value="">[Ngày sinh]</option>
                                    <?php
                                    $begin=01;
                                    $end=31;
                  for($i=$begin;$i<=$end;$i++) {?>
                           <option><?php echo $i?></option>
                          
                  <?php }?>
                                </select>
   
        <span class="label">Tháng sinh </span>
         <select name="month" class="form-control selectpicker">
                                    <option value="">[Tháng sinh]</option>
                                    <?php
                                    $begin=01;
                                    $end=12;
                  for($i=$begin;$i<=$end;$i++) {?>
                           <option><?php echo $i?></option>
                          
                  <?php }?>
                                    
                                </select>
    </div>
     <div class="form-inline">
        <span class="label">Năm sinh </span>
         <select name="year" class="form-control ">
                                    <option value="">[Năm sinh]</option>
                                <?php
                                    $begin=1900;
                                    $end=2020;
                  for($i=$begin;$i<=$end;$i++) {?>
                           <option><?php echo $i?></option>
                          
                  <?php }?>
                    
                                </select>
        <span class="err" id="namsinh"></span>
    </div>
        <div class="col-md-12 infomation-title"><h5>Mã kiểm tra</h5></div>
      <div class="form-inline">
          <span class="label">Mã kiểm tra</span>
        <img src="https://c22blog.files.wordpress.com/2010/10/input-black.gif"/>
    </div>
    <div class="form-inline">
        <span class="label">Nhập mã kiểm tra<span class="check">*</span></span>
        <input class="form-control" style="width:50%" value="<?php if (isset($_POST['reCaptcha'])) echo $_POST['reCaptcha'] ?>"
         name="reCaptcha" id="reCaptcha"/>
    </div>

    <div >
        <span class="label"></span>
        <input type="submit" name="dangky" id="dangky" value="Đăng ký"/>
    </div>
</form>
</div>


<?php
    if(isset($_GET["err"]))
    {
    ?>
        <div>
            <span class="err">Tên đăng nhập đã tồn tại</span>
        </div>
    <?php
    }
?>