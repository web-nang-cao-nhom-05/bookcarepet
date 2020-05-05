                   
                <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                                    </i>
                                </div>
                                <div>Thêm Mới Phòng Khám
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                    
                            <div class="main-card mb-3 card">
                               
                                <div class="card-body"><h5 class="card-title"></h5>
                                    <form method="POST" action="<?=base_url();?>admin/quan_tri_phong_kham/thuc_hien_them_moi_phong_kham">
                                        <div class="position-relative row form-group"><label  class="col-sm-2 col-form-label">Tên phòng khám *</label>
                                            <div class="col-sm-10"><input name="ten_phong_kham"  placeholder="Nhập họ và tên"  class="form-control"></div>
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
                                        
                                        
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button class="btn btn-secondary">Thêm Mới</button>
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

        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?=base_url();?>assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>
</html>
