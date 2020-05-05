
   
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
                            
                            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        

    <section class="ftco-section">
        <div class="container">
            
            
            <div class="row">
             
                <div class="col-md-6 col-lg-3 ftco-animate">
               
                <?php 
                foreach ($san_pham as $row) {
                         ;?>
                    <div class="product">

                        
                           
                            <div class="overlay"></div>
                        </a>
                        
                        


                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="<?=base_url();?>dich_vu/hien_thi_dich_vu_chi_tiet/<?=$row->ma_sp;?>"><?=$row->ten_sp;?></a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <span class="btn btn-primary"><?=$row->ten_phong_kham?></span><br><span><?=$row->dia_chi?></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="pricing">
                                    <span class="price-sale"><?=$row->gia?>đ</span></p>
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
        
    