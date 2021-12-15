<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">

        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách hóa đơn</h3>
            </div>
            <div class="content__tap-main">
                <div class="table__control">
                    <form action="" method="post" class="table__control-group">
                        <div class="filter__id-tour">
                            <input type="text" name="idBillFd" id="" class="filter__id-tour--input" placeholder="Nhập mã hóa đơn...">
                        </div>
                        <button name="findIdBill" class="btn filter__tour--btn">Tìm</button>
                    </form>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th class="tbl-0-5">STT</th>
                            <th class="tbl-1">Mã hóa đơn</th>
                            <th class="tbl-1">Mã tài khoản</th>
                            <th class="tbl-1">Mã tour</th>
                            <th class="tbl-1">Tổng tiền</th>
                            <th class="tbl-1">Ngày thanh toán</th>
                            <th class="tbl-1">Ngày khởi hành</th>
                            <th class="tbl-1">Giờ khởi hành</th>
                            <th class="tbl-1">Nơi khởi hành</th>
                            <th class="tbl-2">Ghi chú</th>
                            <th class="tbl-0-5">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listBillConFirm as $list) {
                            extract($list);
                        ?>

                            <tr>
                                <td><?php echo ++$starItem; ?></td>
                                <td><?php echo $ma_hd; ?></td>
                                <td><?php echo $ma_taikhoan; ?></td>
                                <td><?php echo $ma_tour; ?></td>
                                <td><?php echo number_format($gia_tien); ?></td>
                                <td><?php echo $ngay_dat; ?></td>
                                <td><?php echo $ngay_khoi_hanh; ?></td>
                                <td><?php echo $gio_khoi_hanh; ?></td>
                                <td><?php echo $noi_khoi_hanh; ?></td>
                                <td>
                                    <div class="tbl__desc-box text-left">
                                        <?php echo $ghi_chu; ?>
                                    </div>
                                </td>
                                <td>
                                    <a href="index.php?ql=tourBill&detials&ma_hd=<?php echo $ma_hd; ?> " class="btn btn__tbl">Chi tiết</a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
            <?php if(!isset($_POST['findIdBill'])) {?>
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
                            <a href="index.php?ql=tourBill&list&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=tourBill&list&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=tourBill&list&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=tourBill&list&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>