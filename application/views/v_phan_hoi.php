<div class="hero-wrap hero-bread" style="background-image: url('<?=base_url();?>images/bg_2.jpg');">
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
                            <li class="breadcrumb-item"><a href="<?=base_url();?>trang_chu.html"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Phản Hồi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Hệ thống BookingCarePet nỗ lực kết nối chủ thú cưng đến bác sỹ,phòng khám thú y tốt nhất.</span> </p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Địa chỉ:</span> 12 Chùa Bộc, Trung Liệt, Đống Đa, Hà Nội, Việt Nam</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Số điện thoại:</span> <a href="tel://1235 2355 98">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:bookcare@gmail.com">bookcare@gmail.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="POST" action="<?=base_url().'phan_hoi/thuc_hien_them_moi_phan_hoi';?>">
              <div class="form-group">
                <input type="text" class="form-control" id="contact-name" placeholder="Tên của bạn" name="txtHoTen">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="contact-name" placeholder="Số Điện Thoại" name="txtSDT">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="contact-name" placeholder="Email" name="txtEmail">
              </div>
              <div class="form-group">
                <textarea name="txtGopY" id="" cols="30" rows="7" class="form-control" placeholder="Góp Ý" ></textarea>
              </div>
              <div class="col-sm-10 offset-sm-2">
                <button class="btn btn-secondary">Gửi Phản Hồi</button>
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="d-none d-sm-block mb-5 pb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.616617036341!2d105.82520481440703!3d21.00799979386373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8041a9648d%3A0xe487dd495fdfd676!2zMTIgQ2jDuWEgQuG7mWMsIFRydW5nIExp4buHdCwgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1583865923125!5m2!1svi!2s" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>
    
                </div>
          </div>
        </div>
      </div>
    </section>

    