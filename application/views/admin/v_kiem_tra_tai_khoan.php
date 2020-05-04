<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Đăng nhập hệ thống | BookCarePet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="../main.87c0748b313a1dda75f5.css" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('../assets/images/originals/login1.png');"></div>
                                        <div class="slider-content"><h3>BookCarePet</h3>
                                            <p>Trung gian kết nối giữa chủ thú cưng với bác sĩ, phòng khám, cơ sở thú y tin cậy</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/login2.png');"></div>
                                        <div class="slider-content"><h3>BookCarePet</h3>
                                            <p>Trung gian kết nối giữa chủ thú cưng với bác sĩ, phòng khám, cơ sở thú y tin cậy</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/login3.png');"></div>
                                        <div class="slider-content"><h3>BookCarePet</h3>
                                            <p>Trung gian kết nối giữa chủ thú cưng với bác sĩ, phòng khám, cơ sở thú y tin cậy</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                         <div><h2>Kiểm tra tài khoản</h2></div>
                            <h4 class="mb-0">
                                <span class="d-block"></span>
                                <span>Vui lòng nhập tài khoản và email.</span></h4>
                            <div class="divider row"></div>
                            <div>
                                <form method="POST" action="<?=base_url();?>admin/kiem_tra_tai_khoan/kiem_tra_tai_khoan_email">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampletaikhoan" class="">Tên tài khoản</label><input name="tai_khoan"  placeholder="Nhập tên tài khoản..." type="taikhoan" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Email</label><input name="email"  placeholder="Nhập email..." type="email"
                                                                                                                                                   class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <a href="./dang_nhap" class="btn-lg btn btn-link">Đăng nhập</a>
                                            <input type="submit" value="Tạo tài khoản">
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
<script type="text/javascript" src="./assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>
</html>
