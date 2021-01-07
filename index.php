<?
<!DOCTYPE html>
<html lang="vi">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="public/images/nhac.jpg" />
        <!-- Font -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link href="public/css/style.css" rel="stylesheet">
        <!-- Js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <!-- Ajax -->
        <script src="public/js/ajax_tim_kiem/tim_album_ajax.js"></script>
        <script src="public/js/ajax_tim_kiem/tim_baihat_ajax.js"></script>          
       <script src="public/js/ajax_tim_kiem/tim_casi_ajax.js"></script>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background: coral;">
            <div class="res-navbar row">
                <div class="row">
                    <div class="toggle-navbar col-4 hidden-lg-up">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    </div>
                    <!-- Brand -->
                    <div class="brand-navbar col-6 d-sm-none">
                        <a class="navbar-brand" href=".">Logo</a>
                    </div>
                </div>
                <div class="brand-navbar col-sm-1 col-lg-1 d-none d-sm-block">
                    <a class="navbar-brand" href=".">Logo</a>
                </div> 
                <!-- Links -->
                <div class="collapse navbar-collapse col-sm-11 col-lg-11" id="nav-content">   
                    <ul class="navbar-nav row">
                        <div class="items-navbar d-none d-sm-block col-sm-6 col-lg-4">
                                                    <li class="d-inline"> 
                <!-- menu -->
<nav class="navbar navbar-expand-sm navbar-dark"style="background: coral;">
  <div class="container">
	  <a class="navbar-brand" href="#">Trang Chủ</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Liên Hệ <span class="glyphicon glyphicon-home sr-only"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Sản Phẩm <span class="glyphicon glyphicon-user"></span></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                  Tài Khoản
                  </a>
                  <div class="dropdown-content">
                    <a class="dropdown-item" href="#">Đăng Nhập</a>
                          <a class="dropdown-item" href="#">Đăng Ký</a>
                           <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Hoạt Động khác</a>
                  </div>
                          </li>
                         </ul>
                            <div class="khung-tim-kiem col-12 col-sm-5 col-md-3 col-lg-3 col-xl-2">
                            <form class="form-inline" action="#" method="post" autocomplete="off">
                             <input name="search" id="search" class="form-control mr-sm-2" type="text" placeholder="Tìm Kiếm">
                            </form>
                            <div class="hien-thi-tim-kiem">
                                <div id="result-album"></div>
                                <div id="result-tenBaihat"></div>
                                <div id="result-tenCaSi"></div>
                            </div>
                            </div>
                           </div>
                          </nav>
                          </header>
        <div class="collapse navbar-collapse col-sm-11 col-lg-11" id="nav-content">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form method="POST" action="dang_nhap.php">
                    <div class="form-group">
                        <label for="Tài khoản"></label>
                        <input type="text" name="tai_khoan" class="form-control" value="" placeholder="Nhập tài khoản" required>
                        </div>
                        <div class="form-group">
                        <label for="Mật khẩu"></label>
                        <input type="password" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu">
                       </div>
                    <button type="submit" name="btn_dang_nhap" class="btn btn-success">Đăng nhập</button> 
                </form>
            </div>
        </div>
    </div>
    </div>
   </div>
     </header>
     <script src="public/js/ajax_kiem_tra_trung/xl_tai_khoan.js"></script>
    <script src="public/js/ajax_kiem_tra_trung/xl_email.js"></script>
        <div class="collapse navbar-collapse col-sm-11 col-lg-11" id="nav-content">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <form action="dang_ky.php" method="POST">
                        <div class="form-group">
                            <label for="Tên"></label>
                            <input type="text" name="ten" class="form-control" placeholder="Nhập tên" value=""
                            data-validation="length" data-validation-length="min4" data-validation-error-msg="Tên ít nhất 4 ký tự" required>
                        </div>
                        <div class="form-group">
                            <label for="Tài khoản"></label>
                            <input type="text" id="tai_khoan" name="tai_khoan" class="form-control" placeholder="Nhập tài khoản" value="" 
                            autocomplete="off" data-validation="length alphanumeric" data-validation-length="min4" data-validation-error-msg="min4" required>
                            <span id="user-result"></span>
                        </div>
                        <div class="form-group">
                            <label for="Mật khẩu"></label>
                            <input type="password" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu"
                            data-validation="strength" data-validation-strength="2" data-validation-error-msg="min8" required>
                        </div>
                        <div class="form-group">
                            <label for="Nhập lại mật khẩu"></label>
                            <input type="password" name="nhap_lai_mat_khau" class="form-control" placeholder="Nhập lại mật khẩu" 
                            data-validation="confirmation" data-validation-confirm="mat_khau" data-validation-error-msg="Không trùng mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="Email"></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập Email" value=""
                            autocomplete="off" data-validation="email" data-validation-error-msg="Nhập không đúng định dạng email" required>
                            <span id="email-result"></span>
                        </div>
                            <button type="submit" name="btn_dang_ky" class="btn btn-success">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script>
            $.validate({
                modules : 'location, date, security, file',
            });
            // Restrict presentation length
            $('#presentation').restrictLength( $('#pres-max-length') );
        </script>
    <footer class="w3-center w3-padding-16">
  <p>Project nhạc</p>
</footer>
    <!-- JS Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- JS Slider -->
    <script type="text/javascript" src="public/js/slider/bxslider.min.js"></script>
    <script type="text/javascript" src="public/js/slider/script.slider.js"></script>
   <!-- end menu -->
   <!-- slide -->
    <!-- JS Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- JS Slider -->
    <script type="text/javascript" src="public/js/slider/bxslider.min.js"></script>
    <script type="text/javascript" src="public/js/slider/script.slider.js"></script>
  <div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://zmp3-photo-fbcrawler.zadn.vn/cover_video/e/f/f/a/effa020a3c34d05a6491c7d7e7e6d036.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://kenh14cdn.com/thumb_w/640/2019/12/24/800-417-1-1577165776482575447309-crop-1577165799220287616786.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://zmp3-photo-fbcrawler.zadn.vn/cover_video/b/7/3/a/b73a88a7e0cce91c817c594597c0f5ca.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Bài Hát Mới</h2>
		<div class="list-product-subtitle">
			<p>Một Số Bài Hát Mới</p>
		</div>
		<div class="product-group">
      <div class="row">
        <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card card-product mb-3">
            <img class="card-img-top" src="images/img1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">bài hát 01</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">add to card</a>
              <audio src="images/baihat01.mp3" controls>
              Error: your web browser does not support this audio player.
            </audio>
            </div>
          </div>
        </div>
        <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card card-product mb-3">
            <img class="card-img-top" src="images/img2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">bài hát 02</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">add to card</a>
              <audio id='audio2' controls preload autoplay='autoplay' loop>
        <source src="images/baihat03.mp3" />
            </audio>
            </div>
            </div>
          </div>
        <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card card-product mb-3">
            <img class="card-img-top" src="images/img3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">bài hát 03</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">add to card</a>
              <audio id='audio3' controls preload autoplay='autoplay' loop>
             <source src='images/baihat04.mp3' />
            </audio>
            </div>
          </div>
        </div>
        <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card card-product mb-3">
            <img class="card-img-top" src="images/img4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">bài hát 04</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">add to card</a>
              <audio id='audio4' controls preload autoplay='autoplay' loop>
              <source src='images/baihat05.mp3' />
              </audio>
                   </div>
                  </div>
                  </div>
                   <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="card card-product mb-3">
                      <img class="card-img-top" src="images/img5.jpg" alt="Card img cap">
                      <div class="card-body">
                       <h6 class="card-title">bài hát 05</h6> 
                       <p class="card-text"></p>
                       <a href="#" class="btn btn-primary">add to card</a>
                       <audio id="audio5" controls preload autoplay="autoplay" loop>
                        <source src="images/baihat06.mp3"> 
                       </audio>
                      </div>
                     </div>
                   </div>
                  <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="card card-product mb-3">
                      <img class="card-img-top" src="images/img6.jpg" alt="Card image cap">
                      <div class="card-body">
                       <h7 class="card-title">bài hát 06 </h7>
                       <p class="card-text"></p>
                       <a href="#" class="btn btn-primary">add to card</a>
                       <audio id="audio6 " controls preload autoplay="autoplay" loop>
                         <source src="images/baihat07.mp3" />
                       </audio>
                      </div>
                    </div>
                    </div>
                    <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                      <div class="card card-product mb-3">
                        <img class="card-img-top" src="images/img7.jpg" alt="Card image cap" >
                        <div class="card body">
                          <h8 class="card-title">bài hát 07 </h8>
                          <p class="card-text"></p>
                          <a href="#"class="btn btn-primary">add to card</a>
                          <audio id="audio7" controls preload autoplay="autoplay" loop>
                            <source src="images/baihat08.mp3" />
                          </audio>
                        </div>
                        </div>
                      </div>
                      <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="card card-product mb-3">
                          <img class="card-img-top" src="images/img8.jpg" alt="Card image cap">
                          <div class="card body">
                            <h9 class="card-title">bài hát 08 </h9>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">add to card</a>
                            <audio id="audio8" controls preload autoplay="autoplay" loop>
                              <source src="images/baihat09.mp3" />
                            </audio>
                          </div>
                        </div>
                        </div>
                         </div> 
                        </form>
                        </div>
                        </div> 
                       </div>
                       </div >
                      </div>      
                      </div>
<script src="jquery-3"></script>
<script src="jquery-3.3.1"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<html> 
<body> 
?>
</body>
</html>