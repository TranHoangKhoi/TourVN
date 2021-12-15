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
                                <td><?php echo ++$starItem ?></td>
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
                        <?php 
                            $page = 1;
                            if(isset($_GET['page'])) {
                                $page = $_GET['page'];
                            }
                            if($page > 1) { 
                        ?>
                        <div class="pagination__prev">
                            <a href="index.php?ql=user&listuser&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=user&listuser&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=user&listuser&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=user&listuser&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>


    </main>