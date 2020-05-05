
   
        <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('<?=base_url();?>images/dvu8.png');">
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
                            
                            <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        
<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          
        </div>
        <a href="<?=base_url();?>dich_vu">
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

              <?php foreach ($dich_vu as $row2) {
                        ;?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <img class="img-fluid" src="<?=base_url();?>/assets/images/<?=$row2->hinh_anh;?>" >
            
                  <div class="text text-center">
                    
                    <p class="name"><a href="<?=base_url();?>dich_vu/hien_thi_dich_vu_chi_tiet/<?=$row2->ma_dv;?>"><?=$row2->ten_dich_vu;?></a></p>
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
             
              
            </div>
          </div>
        </div>
      </a>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          
          <div class="col-md-6 d-flex align-items-center">
            <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
             
                    <div class="booking-form">
                        <div class="booking-bg">
                            <div class="form-header">
                                <h2>Đặt lịch online giảm ngay 10%</h2>
                                <h6>VUI LÒNG ĐỂ LẠI THÔNG TIN ĐẦY ĐỦ SẼ GIÚP BOOKCAREPET <br>PHỤC VỤ BẠN TỐT NHẤT</h6>
                            </div>
                        </div>
                         <form method="POST" action="<?=base_url();?>admin/quan_tri_book_lich/thuc_hien_them_moi_book_lich_dv">
                                        <div class="position-relative row form-group"><label  class="col-sm-2 col-form-label">Họ và tên *</label>
                                            <div class="col-sm-10"><input name="ho_ten"  placeholder="Nhập họ và tên"  class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label  class="col-sm-2 col-form-label">Số điện thoại*</label>
                                            <div class="col-sm-10"><input name="sdt"  placeholder="Nhập số điện thoại"  class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Địa chỉ</label>
                                            <div class="col-sm-10"><input name="dia_chi" placeholder="Nhập địa chỉ"  class="form-control"></div>
                                        </div>

                                        <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10"><input name="email" placeholder="Nhập email"  class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Dịch vụ</label>
                                            <div class="col-sm-10">
                                            <select id="ma_dv" name="ten_dich_vu" class="form-control">
                                            <?php 
                                                // Hiển thị ra được pk (thông qua câu lệnh lặp)
                                            foreach ($dich_vu as $dich_vu  ) {
                                            ;?>
                                                <option value="<?=$dich_vu->ma_dv;?>"><?=$dich_vu->ten_dich_vu;?></option>
                                            <?php
                                                }
                                            ;?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Giống thú cưng</label>
                                            <div class="col-sm-10"><input name="giong_thu_cung" placeholder="Nhập giống thú cưng"  class="form-control"></div>
                                        </div>
                                        </div>
                                        <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Ngày khám</label>
                                            <div class="col-sm-10"><input type="text" name="ngay_kham" class="form-control" data-toggle="datepicker"/></div>
                                        </div>
                                        
                                        <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Phòng khám</label>
                                            <div class="col-sm-10">
                                            <select id="ma_phong_kham" name="ten_phong_kham" class="form-control">
                                            <?php 
                                                // Hiển thị ra được pk (thông qua câu lệnh lặp)
                                            foreach ($phong_kham as $phong_kham  ) {
                                            ;?>
                                                <option value="<?=$phong_kham->ma_phong_kham;?>"><?=$phong_kham->ten_phong_kham;?></option>
                                            <?php
                                                }
                                            ;?>
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button class="btn btn-secondary">Gửi</button>
                                            </div>
                                        </div>
                                    </form>
                        
                                </div>
                
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section>
        
    