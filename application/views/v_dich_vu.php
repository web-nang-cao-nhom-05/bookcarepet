<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BookCarePet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
        <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">bookcarepet@gmail.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">Đặt lịch khám trực tuyến 24/7 tại các phòng khám uy tín</span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">BookCarePet</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Trang chủ</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch vụ</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                
                <a class="dropdown-item" href="cham_soc.html">Dịch vụ chăm sóc- khám chữa thú cưng</a>
                <a class="dropdown-item" href="vat_dung.html">Dịch vụ cung cấp đồ cho thú cưng</a>
               

              </div>
            </li>
             
              <li class="nav-item"><a href="blog.php" class="nav-link">Tin tức</a></li>
              <li class="nav-item"><a href="lien_he.php" class="nav-link">Liên hệ</a></li>
             

            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ></a></span> <span>Dịch vụ</span></p>
            <h1 class="mb-0 bread">Dịch vụ</h1>
          </div>
        </div>
      </div>
    </div>
<div class="col-md-6 d-flex align-items-center">
            
          </div>
        </div>
      </div>
    <section class="ftco-section">
        <div class="container">
            
            
            <div class="row">
             
                <div class="col-md-6 col-lg-3 ftco-animate">
               
                <?php 
                foreach ($dich_vu as $row) {
                         ;?>
                    <div class="product">

                        <a href="dich_vu_chi_tiet.html" class="img-prod"><img src="<?=base_url();?>/images<?=$row->hinh_anh;?>" alt="Colorlib Template" style="width: 400px; height: 250px">
                            <span class="status">40%</span>
                            <div class="overlay"></div>
                        </a>
                        
                        


                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#"><?=$row->ten_dich_vu?></a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <span class="btn btn-primary">Pet Mart</span><br><span>Số 3 Đại Cồ Việt,<br> Hai Bà Trưng</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">300.000đ</span><span class="price-sale">180.000đ</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                            }
                    ;?>
                </div>
                
                    </div>

                </div>
                

                
                
                
            <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
        

    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          
          <div class="col-md-6 d-flex align-items-center">
            <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="booking-bg">
                            <div class="form-header">
                                <h2>Đặt lịch online giảm ngay 10%</h2>
                                <h6>VUI LÒNG ĐỂ LẠI THÔNG TIN ĐẦY ĐỦ SẼ GIÚP BOOKCAREPET <br>PHỤC VỤ BẠN TỐT NHẤT</h6>
                            </div>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Họ tên* </span>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="text" required>
                                            </div>
                                        </td>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label" >Điện thoại* </span>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="text" required>
                                            </div>
                                        </td>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label" >Email* </span>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="text" required>
                                            </div>
                                        </td>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label" >Địa chỉ* </span>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="text" required>
                                            </div>
                                        </td>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Giống thú cưng</span>
                                <select class="form-control" required>
                                    <option value="" selected hidden>Chọn</option>
                                    <option>Chó</option>
                                    <option>Mèo</option>
                                    <option>Khác</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Dịch vụ</span>
                                <select class="form-control" required>
                                    <option value="" selected hidden>Chọn dịch vụ</option>
                                    <option>Dịch vụ cung cấp đồ cho thú cưng</option>
                                    <option>Dịch vụ chăm sóc- khám chữa thú cưng</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Ngày thực hiện khám</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="form-group">
                                <span class="form-label">Phòng khám</span>
                                <select class="form-control" required>
                                    <option value="" selected hidden>Chọn phòng khám</option>
                                    <option>Phòng khám Số 3 Văn Cao</option>
                                    <option>Phòng khám Ngõ 25 Phố Nguyễn Cơ Thạch</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                            
                            <div class="form-btn">
                                <button class="submit-btn">ĐẶT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section>
        
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
            <div class="mouse">
                        <a href="#" class="mouse-icon">
                            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                        </a>
                    </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">BookCarePets</h2>
              <p>Trung gian kết nối giữa chủ thú cưng với bác sĩ, phòng khám, cơ sở thú y</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Dịch vụ</a></li>
                <li><a href="#" class="py-2 d-block">Tin tức</a></li>
                <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
               
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Giúp đỡ</h2>
              <div class="d-flex">
                  <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                    <li><a href="#" class="py-2 d-block">Thông tin địa chỉ phòng khám</a></li>
                    <li><a href="#" class="py-2 d-block">Thông tin bác sỹ</a></li>
                    <li><a href="#" class="py-2 d-block">Thông tin nơi cung cấp đồ cho thú cưng</a></li>
                    <li><a href="#" class="py-2 d-block">Thông tin giá cả đồ cho thú cưng</a></li>
                  </ul>
                  
                </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Bạn đang có câu hỏi?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">12 Chùa Bộc, Hà Nội, Việt Nam</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">bookcarepet.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>