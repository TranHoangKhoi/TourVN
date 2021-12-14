<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active JS-tap--item">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách tài khoản</h3>
                </div>

                <div class="content__tap-main">
                    <div class="table__control">
                        <form action="?ql=user&listuser" method="POST" class="table__control-group">
                            <div class="filter__id-tour">
                                <input type="text" name="keyword" id="" class="filter__id-tour--input" placeholder="Nhập tên khách hàng...">
                            </div>
                            <span>Hoặc tìm theo</span>
                            <div class="filter__id-tour">
                                <input type="text" name="email_acc" id="" class="filter__id-tour--input" placeholder="Nhập email khách hàng...">
                            </div>
                            
                            <input type="submit" value="Tìm"  name="search" class="btn filter__tour--btn" >
                        </form>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-0-5">STT</th>
                                <th class="tbl-2">Họ tên</th>
                                <th class="tbl-1">Số CMND</th>
                                <th class="tbl-1">Số ĐT</th>
                                <th class="tbl-1">Địa chỉ</th>
                                <th class="tbl-1">Email</th>
                                <th class="tbl-1">Hình ảnh</th>
                                <th class="tbl-0-5">Thao tác</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 $i = 1;
                                 foreach($list_account as $account) {
                                 extract($account);
                                

                                 $hinh = $img_path . $hinh_anh;
                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td class="text-left"><?php echo $hoten ?></td>
                                <td><?php echo $cccd ?></td>
                                <td><?php echo $sdt ?></td>
                                <td><?php echo $dia_chi_cu_the.' '.$phuong.','.$quan.','.$tp?></td>
                                <td><?php echo $email ?></td>
                                <td class="not-lh"><img src="<?php echo $hinh ?>" alt="" class="img__tbl"></td>
                                <td>
                                    <a href="index.php?ql=user&listuser&deleteaccount&ma_taikhoan=<?php echo $ma_taikhoan ?>" class="btn btn__tbl">Xóa</a>
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