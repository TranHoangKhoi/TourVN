<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">

        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách hóa đơn</h3>
            </div>
            <?php
            if (is_array($listBill)) {
                extract($listBill);
            ?>

                <div class="content__tap-info--custom">
                    <h4>Thông tin người đăng ký hóa đơn</h4>
                    <p><span>Họ tên: </span> <?php echo $ho_ten_kh; ?> </p>
                    <p><span>SDT: </span><?php echo $sdt_kh; ?></p>
                    <p><span>Email: </span><?php echo $email_kh; ?></p>
                    <p><span>Địa chỉ: </span><?php echo $dia_chi_kh; ?></p>
                </div>
            <?php } ?>


            <div class="content__tap-main">
                <table>
                    <thead>
                        <tr>
                            <th class="tbl-0-5">STT</th>
                            <th class="tbl-1">Mã vé</th>
                            <th class="tbl-1">Mã tour</th>
                            <th class="tbl-1">Mã khách hàng</th>
                            <th class="tbl-1">Mã hóa đơn </th>
                            <th class="tbl-1">Họ tên khách hàng</th>
                            <th class="tbl-1">Giá vé </th>
                            <th class="tbl-1">Loại Vé</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listTicket as $Ticket) {
                            extract($Ticket);
                        ?>
                            <tr>
                                <td><?php echo ++$starItem; ?></td>
                                <td><?php echo $ma_ve; ?></td>
                                <td><?php echo $ma_tour; ?></td>
                                <td><?php echo $ma_kh; ?></td>
                                <td><?php echo $ma_hd; ?></td>
                                <td class="text-left"><?php echo $hoten_kh; ?></td>
                                <td><?php echo $giave_kh; ?></td>
                                <td><?php echo $loai_ve; ?></td>
                            </tr>

                    </tbody>
                <?php } ?>
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
                            <a href="index.php?ql=tourBill&detials&ma_hd=<?php echo $ma_hd ?>&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=tourBill&detials&ma_hd=<?php echo $ma_hd ?>&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=tourBill&detials&ma_hd=<?php echo $ma_hd ?>&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=tourBill&detials&ma_hd=<?php echo $ma_hd ?>&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
            </div>
        </div>
    </div>
</main>