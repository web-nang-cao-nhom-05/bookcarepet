         
                <div class="app-main__outer">
                <div class="app-main__inner">
                             
                    
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Sửa Tin Tức</h5>
                                <div>
                                   <form method="POST" enctype="multipart/form-data" action="<?=base_url().'admin/quan_tri_tin_tuc/thuc_hien_sua_tin_tuc';?>">

                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tiêu Đề *</label>
                                            <div class="col-sm-10"><input name="txtTieuDe"  class="form-control" value="<?=$tin_tuc->tieu_de;?>"></div>
                                        </div>
                                        
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Người Tạo</label>
                                            <div class="col-sm-5"><input name="txtNguoiTao" id="exampleText" class="form-control" value="<?=$tin_tuc->nguoi_tao;?>"></div>
                                        </div>
                                    
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Mô Tả</label>
                                            <div class="col-sm-10"> <input name="txtMoTa" id="exampleText" class="form-control" value="<?=$tin_tuc->mo_ta;?>">
                                           </div>
                                        </div>
                                         <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Ảnh minh họa</label>
                                            <div class="col-sm-8">
                                                <input type="file" name="txtAnhMinhHoa" class="form-control">
                                                <img src="<?=base_url()."assets/images/".$tin_tuc->anh_minh_hoa;?>" style="width: 200px; height: auto;";?>
                                            </div>
                                        </div>
                                       
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Nội Dung 1</label>
                                            <div class="col-sm-10"><input name="txtNoiDung"  class="form-control" value="<?=$tin_tuc->noi_dung;?>"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Nội Dung 2</label>
                                            <div class="col-sm-10"><input name="txtNoiDung1"  class="form-control" value="<?=$tin_tuc->noi_dung_1;?>"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Nội Dung 3</label>
                                            <div class="col-sm-10"><input name="txtNoiDung2"  class="form-control" value="<?=$tin_tuc->noi_dung_2;?>"></div>
                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button class="btn btn-secondary">Sửa</button>
                                                <input name="txtMaTinTuc" type="hidden" value="<?=$tin_tuc->ma_tin_tuc;?>">
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

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?=base_url();?>assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>
</html>
