<main class="container">
        <?php include 'subMenu.php' ?>
          
        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách admin</h3>
                </div>

                <div class="content__tap-main">
                    <div class="table__control">
                        <form action="?ql=user&listadmin" method="post" class="table__control-group">

                            <div class="filter__id-tour">
                                <input type="text" name="keyword" id="" class="filter__id-tour--input" placeholder="Nhập tên admin...">
                            </div>
                            <span>Hoặc tìm theo</span>
                            <div class="filter__id-tour">
                                <input type="text" name="email_acc" id="" class="filter__id-tour--input" placeholder="Nhập mã admin...">
                            </div>
                            
                            <input type="submit" value="Tìm"  name="search" class="btn filter__tour--btn" >
                        </form>
                    </div>
                 
                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-1">STT</th>
                                <th class="tbl-2">Họ tên</th>
                                <th class="tbl-1">Số ĐT</th>
                                <th class="tbl-2">Email</th>
                                <th class="tbl-1">Hình ảnh</th>
                                <th class="tbl-1">Thao tác</th>
                                <th class="tbl-1">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                      
                            <?php
                               $i = 1;
                               foreach($list_account_admin as $account) {
                               extract($account);
                                    


                               $hinh = $img_path . $hinh_anh;
                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td class="text-left"><?php echo $hoten ?></td>
                                <td><?php echo $sdt ?></td>
                                <td><?php echo $email ?></td>
                                <td class="not-lh"><img src="<?php echo $hinh?>" alt="" class="img__tbl"></td>

                                <td>
                                    <a href="?ql=user&updateacc&ma_taikhoan=<?php echo $ma_taikhoan?>" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="?ql=user&listadmin&deleteadmin&ma_taikhoan=<?php echo $ma_taikhoan?>" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                          
                             <?php
                               }
                           ?>
                             
                        </tbody>
                    </table>
                </div>

                <div class="pagination__block">
                    <div class="pagination__list">
                        <div class="pagination__prev">
                            <a href="" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="arrow-dropleft"></ion-icon></i>
                            </a>
                        </div>
        
                        <div class="pagination__num">
                            <a href="" class="pagination__item active pagination__num-item">1</a>
                            <a href="" class="pagination__item pagination__num-item">2</a>
                            <a href="" class="pagination__item pagination__num-item">3</a>
                        </div>
        
                        <div class="pagination__next">
                            <a href="" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="arrow-dropright"></ion-icon></i>
                            </a>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>


    </main>