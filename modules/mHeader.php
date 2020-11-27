
<div id="header">
    <a href="index.php">
        <img src="images/log.png" width="200" height="63" >
    </a>
    <div id="login_nav">
        <?php   
            if(isset($_SESSION["MaTaiKhoan"]))  
            {
              ?>  
               <span class="tt"> Xin chào, <?php echo $_SESSION["TenHienThi"]; ?></span>
               <span class="tt"> <a href="modules/xlDangXuat.php"> Đăng xuất</a></span>
                <a href="index.php?a=5">
                    <img src="img/manage_shopping.png" height="40">
                </a>
                <?php
            }
            else
            {
                ?>
                 <form name="frmLogin" action="modules/xlDangNhap.php" 
              method="POST" onsubmit="return KiemTraDangnhap()">
                 <span style="font-size: 13px;">Tài khoản:</span> 
                <input name="txtUS"  type="text" id="txtUS" font="15"
                 maxlength="20" width="40">
                <span style="font-size: 13px;">Mật Khẩu:</span>
                <input name="txtPS" type="password" id="txtPS"  
                maxlength="20" width="35" >
            
                 <input id="dn" type="submit"  style="font-size: 13px;" value="Đăng nhập"  >
                    <input  id="dk" type="button"  style="font-size: 13px;" value="Đăng ký" onclick="ChuyenTrangDangKy()">
              </form>
                <script type="text/javascript">
                    function ChuyenTrangDangKy () {
                        location = "index.php?a=6";
                    }
                </script>
            <?php
        }
    ?>
    </div>
   



        <div id="menu">
            <ul>
                <li><a href="index.php">Trang Chủ </a></li>
                <li><a >Sản Phẩm</a>
                    <ul class="sub-menu">
                       <div class="row">
                             <?php include "modules/mLoai.php";
                          include "modules/mHang.php";?>
                    </div>
                    </ul>
                </li>
                <li><a rel="nofollow" href="gioithieu.php">Giới Thiệu</a></li>
                <li><a href="lienhe.php">Liên Hệ</a></li>
            </ul>
        </div>
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.tgdd.vn/2019/12/banner/800-300-800x300-14.png" alt="Los Angeles" width="1196" height="300">
    </div>
    <div class="carousel-item">
      <img src="img/header.gif" alt="Chicago" width="1196" height="300">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.tgdd.vn/2019/12/banner/A51-800-300-800x300-4.png" alt="New York" width="1196" height="300">
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  <form action="#" method="GET">
 <div class="col-md-12 col-sm-4 col-sx-6" style="float: right;margin-top:5%">
 <div class="col-md-4" style="float: right;">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Tìm kiếm tại đây...">
                        <div class="input-group-append">
                            <button class="btn btn-info Search" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div></div>
</form>  
</div>
</div>
