<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">

        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách hóa đơn</h3>
            </div>
            <div class="content__tap-main">

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
                        $listBillConFirm = get_all_bill();
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

            <div class="pagination__block">
                <div class="pagination__list">
                    <div class="pagination__prev">
                        <a href="" class="pagination__item pagination__prev-item">
                            <i class="pagination__prev-icon">
                                <ion-icon name="arrow-dropleft"></ion-icon>
                            </i>
                        </a>
                    </div>

                    <div class="pagination__num">
                        <a href="" class="pagination__item active pagination__num-item">1</a>
                        <a href="" class="pagination__item pagination__num-item">2</a>
                        <a href="" class="pagination__item pagination__num-item">3</a>
                    </div>

                    <div class="pagination__next">
                        <a href="" class="pagination__item pagination__next-item">
                            <i class="pagination__next-icon">
                                <ion-icon name="arrow-dropright"></ion-icon>
                            </i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>