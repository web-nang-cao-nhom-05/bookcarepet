<div class="app-main__outer">
                <div class="app-main__inner p-0">
        
                    <div class="app-inner-layout">
                        <div class="app-inner-layout__header bg-heavy-rain">
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <div class="page-title-icon">
                                            <i class="pe-7s-notebook icon-gradient bg-mixed-hopes">
                                            </i>
                                        </div>
                                        <h4>Quản Trị Phản Hồi</h4>
                                    </div>
                                     
                                    </div>
                            </div>               
                         </div>
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content card">
                                <div>
                                    <div class="app-inner-layout__top-pane">
                                        <div class="pane-left">
                                            
                                            <h4 class="mb-0">Khách Hàng Phản Hồi</h4>
                                            
                                        </div>
                                        <div class="pane-right">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-search fa-w-16 "></i>
                                                    </div>
                                                </div>
                                                <input placeholder="Tìm Kiếm..." type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                        <div class="card-header pr-0 pl-0">
                            <div class="row no-gutters align-items-center w-100">
                                <div class="col font-weight-bold pl-3">Khách Hàng</div>
                                <div class="d-none d-md-block col-10 text-muted">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">Điện Thoại</div>                                        
                                        <div class="col-3">Email</div>
                                        <div class="col-3">Góp Ý</div>
                                        <div class="col-2">Thời Gian</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        
                         <?php foreach ($phan_hoi as $row) {
                        ;?>
                        <div class="card-body py-3">        
                            <div class="row no-gutters align-items-center">
                                <div class="col"><?=$row->ho_ten;?></div>
                                <div class="d-none d-md-block col-10">
                                <div class="row no-gutters align-items-center">
                                <div class="col-2"><?=$row->sdt;?></div>
                                <div class="col-3"><?=$row->email;?></div>
                                <div class="col-3"><?=$row->gop_y;?></div>
                                <div class="col-2"><?=$row->thoi_gian;?></div>
                                
                                <div class="media col-2 align-items-center">
                                <a href="<?=base_url();?>admin/quan_tri_phan_hoi/xoa_phan_hoi/<?=$row->ma_phan_hoi;?>">
                                                <button class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-warning"><i class="pe-7s-trash btn-icon-wrapper"> </i></button></a>
                            </div>
                            </div>
                            </div>  
                            </div>      
                        </div>
                        <?php   
                        }
                        ;?>
        
                           
                                        <div class="app-inner-layout__bottom-pane d-block text-center">
                                            <nav class="" aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                                    <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                </div>
                  </div>
    </div>
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>
</html>
