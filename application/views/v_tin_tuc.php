<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BOOKINGCAREPET</title>
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
	      <a class="navbar-brand" href="index.html">BOOKINGCAREPET</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?=base_url();?>trang_chu.html" class="nav-link">Trang Chủ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch Vụ</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?=base_url();?>dich_vu_cung_cap_do_cho_thu_cung.html">Dịch vụ cung cấp đồ cho thú cưng</a>
              	<a class="dropdown-item" href="<?=base_url();?>dich_vu_cham_soc_kham_chua_cho_thu_cung.html">Dịch vụ chăm sóc, khám chữa cho thú cưng</a>
              </div>
            </li>
	          <li class="nav-item active"><a href="<?=base_url();?>tin_tuc.html" class="nav-link">Tin Tức</a></li>
	          <li class="nav-item"><a href="<?=base_url();?>phan_hoi.html" class="nav-link">Liên Hệ</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('img/slide_1.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          <?php foreach ($tin_tuc as $row) {
          ;?>
						<div class="row">
							<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="<?=base_url();?>tin_tuc/hien_thi_tin_tuc_chi_tiet/<?=$row->id;?>"><img style="height: 200px; width: auto;" src="<?=base_url();?>/assets/images/<?=$row->anh_minh_hoa;?>" alt=""></a>
		              <div class="text d-block pl-md-3">
		              	<div class="meta mb-3">
		                  <div><a href="#"><?=$row->thoi_gian;?></a></div>
		                  <div><a href="#"><?=$row->nguoi_tao;?></a></div>
		                  
		                </div>
		                <h5 class="heading"><a href="<?=base_url();?>tin_tuc/hien_thi_tin_tuc_chi_tiet/<?=$row->id;?>"><?=$row->tieu_de;?></a></h5>
		                <p><?=$row->mo_ta?></p>
		                
		              </div>
		            </div>
		          </div>
		          
		          
						</div>
            <?php   
            }
            ;?>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
           

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Bài Viết Gần Đây</h3>
              <?php foreach ($bai_viet_gan_day as $row) {
              ;?>
              <div class="block-21 mb-4 d-flex">
                <img style="height: 60px; width: auto;" src="<?=base_url();?>/assets/images/<?=$row->anh_minh_hoa;?>" alt="">
                <div class="text">
                  <a href="#" class="post-title"><h6 class="heading-1"><?=$row->tieu_de;?></h6></a>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?=$row->thoi_gian;?></a></div>
                    
                  </div>
                </div>
              </div>
              <?php
               }
               ;?>
              </div>
              

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tag</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dịch vụ chăm sóc</a>
                <a href="#" class="tag-cloud-link">chữa bệnh cho thú cưng</a>
                <a href="#" class="tag-cloud-link">spa</a>
                <a href="#" class="tag-cloud-link">nội trú</a>
                <a href="#" class="tag-cloud-link">cửa hàng cho thú cưng</a>
              </div>
            </div>

          
          </div>

        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-section bg-light">
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
              <h2 class="ftco-heading-2">BOOKINGCAREPET</h2>
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
                <li><a href="<?=base_url();?>trang_chu.html" class="py-2 d-block">Dịch Vụ</a></li>
                <li><a href="<?=base_url();?>tin_tuc.html" class="py-2 d-block">Tin Tức</a></li>
                <li><a href="<?=base_url();?>phan_hoi.html" class="py-2 d-block">Liên Hệ</a></li>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">12 Chua Boc, Trung Liet, Dong Da, Ha Noi</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">bookcare@gmail.com</span></a></li>
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