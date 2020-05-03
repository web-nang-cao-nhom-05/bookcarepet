
    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Đúng dịch vụ, đúng nhu cầu</h3>
                <span>Hệ thống BookingCarePet nỗ lực kết nối chủ thú cưng đến bác sỹ,phòng khám thú y tốt nhất</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Thông tin sản phẩm thú cưng</h3>
                <span>Tra cứu giá cả, nơi bán các sản phẩm cho thú cưng</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Phòng khám uy tín</h3>
                <span>Chọn các phòng khám</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Đặt lịch 24/7</h3>
                <span>Hoạt động liên tục đặt lịch và hỗ trợ 24/7 thay vì chỉ giới hạn trong giờ hành chính</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/anh1.png);">
									<div class="text text-center">
										<h2>Dịch vụ</h2>
										
										<p><a href="#" class="btn btn-primary">Xem chi tiết</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/anh2.png);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Dịch vụ cung cấp đồ cho thú cưng</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/anh3.png);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#"></a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/anh4.png);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Dịch vụ đặt chăm sóc, khám chữa cho thú cưng</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/anh5.png);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#"></a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Địa điểm, giá cả các dịch vụ</span>
            <h2 class="mb-4">Các dịch vụ</h2>
            <p>Giúp bạn lựa chọn dịch vụ phù hợp để đặt lịch các phòng khám</p>
          </div>
        </div>   		
    	</div>
         
    	<div class="container">
    		<div class="m-auto d-flex">
    		<div class="row">
                <?php foreach ($dich_vu as $row1) {
                        ;?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
                    
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="<?=base_url();?>/assets/images/<?=$row1->hinh_anh;?>" alt="Colorlib Template" style="width: 400px; height: 250px">
    						<span class="status">40%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?=$row1->ten_dich_vu;?></a></h3>
    						<span class="btn btn-primary"><?=$row1->ten_phong_kham;?></span>
    						<br><span><?=$row1->dia_chi;?></span>

    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">300.000 đ</span><span class="price-sale">180.000 đ</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							
    							</div>
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
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Địa điểm, giá cả các sảm phẩm thú cưng</span>
            <h2 class="mb-4">Các sản phẩm thú cưng</h2>
            <p>Giúp bạn tìm kiếm các sản phẩm dành cho thú cưng</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

              <?php foreach ($san_pham_pet as $row2) {
                        ;?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <img class="img-fluid" src="<?=base_url();?>/assets/images/<?=$row2->hinh_anh;?>" alt="Colorlib Template">
            
                  <div class="text text-center">
                    
                    <p class="name"><?=$row2->ten_sp;?></p>
                    <span class="btn btn-primary"><?=$row2->ten_phong_kham;?></span>
                   <br> <span><?=$row2->dia_chi;?></span>
                    
                  <div class="pricing">
                    <p class="price"><font color="green"><?=$row2->gia;?> đ</font></p>
                  </div>
            
                  </div>
                </div>
              </div>
            <?php   
                        }
                        ;?>
             <div class="item">
               
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
		
		
    
  </body>
</html>