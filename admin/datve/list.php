<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách đặt vé</h3>
            </div>

            <div class="content__tap-main">
            <div class="table__control">
                        <form action="" method="post" class="table__control-group">
                            <div class="filter__id-tour">
                                <input type="text" name="tourID" class="filter__id-tour--input" placeholder="Nhập mã tour...">
                            </div>
                            
                            <button name="findTourItem" class="btn filter__tour--btn">Tìm</button>
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
                        <?php 
                            $page = 1;
                            if(isset($_GET['page'])) {
                                $page = $_GET['page'];
                            }
                            if($page > 1) { 
                        ?>
                        <div class="pagination__prev">
                            <a href="index.php?ql=tourTicket&list&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=tourTicket&list&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=tourTicket&list&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=tourTicket&list&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
            </div>
        </div>
    </div>

</main>