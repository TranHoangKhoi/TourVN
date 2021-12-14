<!-- //load ra những cái vé có mã tuor = -->
<main class="container">
    <?php include 'subMenu.php' ?>
    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">

                <h3 class="content__tap-heading-text">Danh sách vé</h3>
                <?php

                if (is_array($list_ticket_mt)) {
                    extract($list_ticket_mt);
                ?>
                    <p>Mã tour: <?php echo $ma_tour; ?></p>
                <?php } ?>
            </div>

            <div class="content__tap-main">

                <table>
                    <thead>
                        <tr>
                            <th class="tbl-0-5">STT</th>
                            <th class="tbl-1">Mã vé</th>
                            <th class="tbl-1">Mã tour</th>
                            <th class="tbl-1">Mã khách hàng</th>
                            <th class="tbl-1">Mã hóa đơn</th>
                            <th class="tbl-1">Họ tên khách hàng</th>
                            <th class="tbl-1">Giá vé</th>
                            <th class="tbl-1">Ngày khởi hành</th>
                            <th class="tbl-1">Giờ khởi hành</th>
                            <th class="tbl-1">Nơi khởi hành</th>
                            <th class="tbl-0-5">Loại vé</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_ticket as $ticket) {
                            extract($ticket);
                        ?>
                            <tr>
                                <td><?php echo ++$starItem; ?></td>
                                <td><?php echo $ma_ve; ?></td>
                                <td><?php echo $ma_tour; ?></td>
                                <td><?php echo $ma_kh; ?></td>
                                <td><?php echo $ma_hd; ?></td>
                                <td class="text-left"><?php echo $hoten_kh; ?></td>
                                <td><?php echo $giave_kh; ?></td>
                                <td><?php echo $ngay_khoi_hanh; ?></td>
                                <td><?php echo $gio_khoi_hanh; ?></td>
                                <td><?php echo $noi_khoi_hanh; ?></td>
                                <td><?php echo $loai_ve; ?></td>
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