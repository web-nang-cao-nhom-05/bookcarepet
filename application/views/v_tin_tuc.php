
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('<?=base_url();?>images/slide_1.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	
          </div>
        </div>
      </div>
    </div>
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url();?>trang_chu.html">Trang chủ</a></li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                        </ol>
                    </nav>
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
		              <a href="<?=base_url();?>tin_tuc/hien_thi_tin_tuc_chi_tiet/<?=$row->ma_tin_tuc;?>"><img style="height: 200px; width: 300px;" src="<?=base_url();?>/assets/images/<?=$row->anh_minh_hoa;?>" alt=""></a>
		              <div class="text d-block pl-md-3">
		              	<div class="meta mb-3">
		                  <div><a href="#"><?=$row->thoi_gian;?></a></div>
		                  <div><a href="#"><?=$row->nguoi_tao;?></a></div>
		                  
		                </div>
		                <h5 class="heading"><a href="<?=base_url();?>tin_tuc/hien_thi_tin_tuc_chi_tiet/<?=$row->ma_tin_tuc;?>"><?=$row->tieu_de;?></a></h5>
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
                <img style="height: 60px; width: 80px;" src="<?=base_url();?>/assets/images/<?=$row->anh_minh_hoa;?>" alt="">
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

    