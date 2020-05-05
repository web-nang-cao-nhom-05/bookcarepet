  <div class="app-main__outer">
                <div class="app-main__inner">
                    
                    <div class="app-inner-layout">
                        <div class="app-inner-layout__header bg-heavy-rain">
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <div class="page-title-icon">
                                            <i class="pe-7s-global icon-gradient bg-happy-itmeo">
                                            </i>
                                        </div>
                                        <h4>Quản Trị Tin Tức</h4>
                                    </div>
                                     
                                    </div>
                            </div>               
                         </div>
                   
                       
                    
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content card">
                                <div>
                                    <div class="app-inner-layout__top-pane">
                                        <div class="pane-left">
                                            <a href="./quan_tri_tin_tuc/them_moi_tin_tuc">
                                                <button class="ladda-button mb-2 mr-2 btn-pill btn btn-danger" data-style="expand-right">
                                                    <span class="ladda-label" >  Thêm mới </span>
                                                    <span class="ladda-spinner"></span>
                                                </button>
                                            
                                            </a>
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
                                <div class="col font-weight-bold pl-3">Danh Sách Tin Tức</div>
                                <div class="d-none d-md-block col-6 text-muted">
                                    <div class="row no-gutters align-items-center">
                                                                           
                                        <div class="col-6">Ngày tạo</div>
                                        <div class="col-3">Sửa/Xóa</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($tin_tuc as $row) {
                        ;?>
                        <div class="card-body py-3">        
                            <div class="row no-gutters align-items-center">
                                <div class="col"><a href="javascript:void(0)" class="text-big font-weight-semibold"><?=$row->tieu_de;?></a></div>
                                <div class="d-none d-md-block col-6">        
                                    <div class="row no-gutters align-items-center">
                                       
                                        <div class="col-6"><?=$row->thoi_gian;?></div>
                                        <div class="media col-3 align-items-center">
                                                <a href="<?=base_url();?>admin/quan_tri_tin_tuc/sua_tin_tuc/<?=$row->ma_tin_tuc;?>">
                                                
                                                 <button class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary"><i class="pe-7s-tools btn-icon-wrapper"> </i></button></a>
                                               <a href="<?=base_url();?>admin/quan_tri_tin_tuc/xoa_tin_tuc/<?=$row->ma_tin_tuc;?>">
                                                <button class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-warning"><i class="pe-7s-trash btn-icon-wrapper"> </i></button></a>
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
                        <nav>
                        <ul class="pagination mb-5">
                            <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">«</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">»</a></li>
                        </ul>
                    </nav>
                    </div>
        
                    
                </div>
    </div>
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>
</html>
