<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách đặt vé</h3>
            </div>

            <div class="content__tap-main">
                <div class="table__control">
                    <form action="" class="table__control-group">
                        <div class="filter__id-tour">
                            <input type="text" name="" id="" class="filter__id-tour--input" placeholder="Nhập mã vé...">
                        </div>
                        <button class="btn filter__tour--btn">Tìm</button>
                    </form>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th class="tbl-0-5">STT</th>
                            <th class="tbl-1">Mã tour</th>
                            <th class="tbl-2">Tên tour</th>
                            <th class="tbl-1">Ngày khởi hành</th>
                            <th class="tbl-1">Giờ khởi hành</th>
                            <th class="tbl-1">Ngày về</th>
                            <th class="tbl-1">Nơi khởi hành</th>
                            <th class="tbl-0-5">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $list_Ticket_All = load_all_tour_trip();
                        foreach ($list_Ticket_All as $Ticket) {
                            extract($Ticket);

                        ?>
                            <!-- class="text-left" -->
                            <tr>
                                <td><?php echo ++$starItem; ?></td>
                                <td><?php echo $ma_tour; ?></td>
                                <td><?php echo $tieu_de; ?></td>
                                <td><?php echo $ngay_khoihanh ?></td>
                                <td><?php echo $gio_khoihanh; ?></td>
                                <td><?php echo $ngay_ve ?></td>
                                <td><?php echo $noi_tap_trung ?></td>
                                <td>
                                    <a href="index.php?ql=tourTicket&details&matour=<?php echo $ma_tour ?>" class="btn btn__tbl">Chi tiết</a>
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