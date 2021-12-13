<!-- Tour List -->
<!-- Main -->
<?php
    if(is_array($localItem)) {
        extract($localItem);
    }
    
    $numTour = 0;
    foreach($countList as $item) {
        $numTour++;
    }
?>
<main>
            <!-- List Tour Cate -->
            <div class="grid wide">
                <div class="row">
                    <!-- Category PC -->
                    <!-- <div class="col l-2 m-0 c-0">
                        <div class="content__block">
                            <div class="category__date">
                                <div class="category__date-text--heading">
                                    <h4 class="">TOUR THEO NGÀY</h4>
                                </div>
                                <ul class="category__date-list">
                                    <li class="category__date-item">
                                        <a href="" class="category__date-link">Tour trong ngày</a>
                                    </li>
                                    <li class="category__date-item">
                                        <a href="" class="category__date-link">Combo 2 ngày 1 đêm</a>
                                    </li>
                                    <li class="category__date-item">
                                        <a href="" class="category__date-link">Combo 3 ngày 2 đêm</a>
                                    </li>
                                    <li class="category__date-item">
                                        <a href="" class="category__date-link">Combo 4 ngày 3 đêm</a>
                                    </li>
                                    <li class="category__date-item">
                                        <a href="" class="category__date-link">Combo 5 ngày 4 đêm</a>
                                    </li>
                                    <li class="category__date-item">
                                        <a href="" class="category__date-link">Combo 6 ngày 5 đêm</a>
                                    </li>
                                    <li class="category__date-item">
                                        <a href="" class="category__date-link">Combo 7 ngày 6 đêm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
    
                    <!-- List Tour -->
                    <div class="col l-12 m-12 c-12">  
                        <div class="tour__block">
                            <!-- Category Mobile -->
                            <!-- <nav class="mobile__category">
                                <ul class="mobile__category-list">
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-link">Tour trong ngày</a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-link">Combo 2 ngày 1 đêm</a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-link">Combo 3 ngày 2 đêm</a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-link">Combo 4 ngày 3 đêm</a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-link">Combo 5 ngày 4 đêm</a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-link">Combo 6 ngày 5 đêm</a>
                                    </li>
                                    <li class="mobile__category-item">
                                        <a href="" class="mobile__category-link">Combo 7 ngày 6 đêm</a>
                                    </li>
                                </ul>
                            </nav> -->
                            <?php if(isset($_GET['ma_dia_diem'])) { ?>
                            <!-- Text heading -->
                                <div class="content__text-heading">
                                    <h1 class="content__text-heading--item">DU LỊCH <?php echo $ten_diadiem ?></h1>
                                    <div class="content__text-info">
                                        <p class="content__text-info--desc">
                                            <?php echo $mota ?>
                                        </p>
                                        <p class="content__text-info--return">
                                            Chúng tôi tìm thấy <strong><?php echo $numTour  ?></strong> tour cho quý khách.
                                        </p>
                                    </div>
                                </div>

                                <div class="tour__list">
                                    <div class="grid">
                                        <div class="row">
                                            <?php 
                                                foreach($idTour as $idTourItem) {
                                                    extract($idTourItem);
                                                    $tourItem = get_tour_info($ma_tour);
                                                    extract($tourItem);
                                                    $imgTour = get_img_tour($ma_tour);
                                            ?>
                                                <div class="col l-4 m-6 c-12">
                                                    <div class="tour__item">
                                                        <a href="index.php?call=tourDetails&ma_tour=<?php echo $ma_tour; ?>" class="tour__item-main">
                                                            <img src="<?php echo $upload_path.$imgTour[0]['ten_hinh'] ?>" alt="" class="tour__item-main--img">
                                                        </a>
                                                        <div class="tour__item-body">
                                                            <div class="tour__item-body--time">
                                                                <p class="tour__item-body--time-text"><?php echo $ngay_khoihanh?> - <?php echo $goi_ngay ?> - Giờ đi: <?php echo $gio_khoihanh ?></p>
                                                            </div>

                                                            <div class="tour__item-body--flash">
                                                                <h3 class="tour__item-body--flash-name"><?php echo $tieu_de ?></h3>
                                                            </div>

                                                            <div class="tour__item-body--code">
                                                                <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                                <p class="tour__item-body--code-item">
                                                                    <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                    <?php echo $ma_tour ?>
                                                                </p>
                                                            </div>

                                                            <div class="tour__item-body--local">
                                                                <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                                <div class="tour__item-body--local-item"><?php echo $noi_tap_trung ?></div>
                                                            </div>

                                                            <div class="tour__item-body--price">
                                                                <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                                <div class="tour__item-body--price-item"><?php echo number_format($gia_nguoilon) ?>đ</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- <div class="col l-4 m-6 c-12">
                                                <div class="tour__item">
                                                    <a href="./tourDetail.html" class="tour__item-main">
                                                        <img src="../Content/IMG/Tour/mientrung.jpg" alt="" class="tour__item-main--img">
                                                    </a>
                                                    <div class="tour__item-body">
                                                        <div class="tour__item-body--time">
                                                            <p class="tour__item-body--time-text">20/11/2021 - 3N2Đ - Giờ đi: 07:00</p>
                                                        </div>

                                                        <div class="tour__item-body--flash">
                                                            <h3 class="tour__item-body--flash-name">Phú Yên - Quy Nhơn(Tour Hành trình xanh)</h3>
                                                        </div>

                                                        <div class="tour__item-body--code">
                                                            <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                            <p class="tour__item-body--code-item">
                                                                <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                NDSGN687-104-201121VJ-D-F
                                                            </p>
                                                        </div>

                                                        <div class="tour__item-body--local">
                                                            <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                            <div class="tour__item-body--local-item">TP Cần Thơ</div>
                                                        </div>

                                                        <div class="tour__item-body--price">
                                                            <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                            <div class="tour__item-body--price-item">5,190,000đ</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
        
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
                                            <a href="index.php?call=listTour&ma_dia_diem=<?php echo $ma_dia_diem ?>&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                        
                                        <div class="pagination__num">
                                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                                <?php if($page == $i) { ?>
                                                <a href="index.php?call=listTour&ma_dia_diem=<?php echo $ma_dia_diem ?>&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                                            <?php } else { ?>
                                                <a href="index.php?call=listTour&ma_dia_diem=<?php echo $ma_dia_diem ?>&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                                            <?php } 
                                                } ?>
                                        </div>
                                        
                                        <?php if($page < $pageNum) { ?>
                                        <div class="pagination__next">
                                            <a href="index.php?call=listTour&ma_dia_diem=<?php echo $ma_dia_diem ?>&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } elseif(isset($_GET['ma_vung_mien'])) { ?>
                                <!-- Text heading -->
                                <div class="content__text-heading">
                                    <h1 class="content__text-heading--item">DU LỊCH <?php echo $ten_mien ?></h1>
                                    <div class="content__text-info">
                                        <p class="content__text-info--desc">
                                            <?php echo $mota ?>
                                        </p>
                                        <p class="content__text-info--return">
                                            Chúng tôi tìm thấy <strong><?php echo $numTour ?></strong> tour cho quý khách.
                                        </p>
                                    </div>
                                </div>

                                <div class="tour__list">
                                    <div class="grid">
                                        <div class="row">
                                            <?php 
                                                foreach($listTours as $tourItem) {
                                                    extract($tourItem);
                                                    $tourItem = get_tour_info($ma_tour);
                                                    extract($tourItem);
                                                    $imgTour = get_img_tour($ma_tour);
                                            ?>
                                                <div class="col l-4 m-6 c-12">
                                                    <div class="tour__item">
                                                        <a href="index.php?call=tourDetails&ma_tour=<?php echo $ma_tour ?>" class="tour__item-main">
                                                            <img src="<?php echo $upload_path.$imgTour[0]['ten_hinh'] ?>" alt="" class="tour__item-main--img">
                                                        </a>
                                                        <div class="tour__item-body">
                                                            <div class="tour__item-body--time">
                                                                <p class="tour__item-body--time-text"><?php echo $ngay_khoihanh?> - <?php echo $goi_ngay ?> - Giờ đi: <?php echo $gio_khoihanh ?></p>
                                                            </div>

                                                            <div class="tour__item-body--flash">
                                                                <h3 class="tour__item-body--flash-name"><?php echo $tieu_de ?></h3>
                                                            </div>

                                                            <div class="tour__item-body--code">
                                                                <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                                <p class="tour__item-body--code-item">
                                                                    <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                    <?php echo $ma_tour ?>
                                                                </p>
                                                            </div>

                                                            <div class="tour__item-body--local">
                                                                <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                                <div class="tour__item-body--local-item"><?php echo $noi_tap_trung ?></div>
                                                            </div>

                                                            <div class="tour__item-body--price">
                                                                <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                                <div class="tour__item-body--price-item"><?php echo number_format($gia_nguoilon) ?>đ</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }  ?>
                                            <!-- <div class="col l-4 m-6 c-12">
                                                <div class="tour__item">
                                                    <a href="./tourDetail.html" class="tour__item-main">
                                                        <img src="../Content/IMG/Tour/mientrung.jpg" alt="" class="tour__item-main--img">
                                                    </a>
                                                    <div class="tour__item-body">
                                                        <div class="tour__item-body--time">
                                                            <p class="tour__item-body--time-text">20/11/2021 - 3N2Đ - Giờ đi: 07:00</p>
                                                        </div>

                                                        <div class="tour__item-body--flash">
                                                            <h3 class="tour__item-body--flash-name">Phú Yên - Quy Nhơn(Tour Hành trình xanh)</h3>
                                                        </div>

                                                        <div class="tour__item-body--code">
                                                            <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                            <p class="tour__item-body--code-item">
                                                                <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                NDSGN687-104-201121VJ-D-F
                                                            </p>
                                                        </div>

                                                        <div class="tour__item-body--local">
                                                            <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                            <div class="tour__item-body--local-item">TP Cần Thơ</div>
                                                        </div>

                                                        <div class="tour__item-body--price">
                                                            <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                            <div class="tour__item-body--price-item">5,190,000đ</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
        
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
                                            <a href="index.php?call=listTour&ma_vung_mien=<?php echo $ma_mien ?>&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                        
                                        <div class="pagination__num">
                                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                                <?php if($page == $i) { ?>
                                                <a href="index.php?call=listTour&ma_vung_mien=<?php echo $ma_mien ?>&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                                            <?php } else { ?>
                                                <a href="index.php?call=listTour&ma_vung_mien=<?php echo $ma_mien ?>&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                                            <?php } 
                                                } ?>
                                        </div>
                                        
                                        <?php if($page < $pageNum) { ?>
                                        <div class="pagination__next">
                                            <a href="index.php?call=listTour&ma_vung_mien=<?php echo $ma_mien ?>&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } 
                                elseif(isset($_GET['loai_tour'])) { 
                            ?>
                                <!-- Text heading -->
                                <div class="content__text-heading">
                                    <?php $cateName = load_one_tour($_GET['loai_tour']); ?>
                                    <h1 class="content__text-heading--item"><?php echo $cateName['ten_loai'] ?></h1>
                                    <div class="content__text-info">
                                        <p class="content__text-info--desc">
                                            <?php echo $cateName['mota'] ?>
                                        </p>
                                        <p class="content__text-info--return">
                                            Chúng tôi tìm thấy <strong><?php echo $numTour ?></strong> tour cho quý khách.
                                        </p>
                                    </div>
                                </div>

                                <div class="tour__list">
                                    <div class="grid">
                                        <div class="row">
                                            <?php 
                                                foreach($listTour as $tourItem) {
                                                    extract($tourItem);
                                                    $tourItem = get_tour_info($ma_tour);
                                                    extract($tourItem);
                                                    $imgTour = get_img_tour($ma_tour);
                                            ?>
                                                <div class="col l-4 m-6 c-12">
                                                    <div class="tour__item">
                                                        <a href="index.php?call=tourDetails&ma_tour=<?php echo $ma_tour ?>" class="tour__item-main">
                                                            <img src="<?php echo $upload_path.$imgTour[0]['ten_hinh'] ?>" alt="" class="tour__item-main--img">
                                                        </a>
                                                        <div class="tour__item-body">
                                                            <div class="tour__item-body--time">
                                                                <p class="tour__item-body--time-text"><?php echo $ngay_khoihanh?> - <?php echo $goi_ngay ?> - Giờ đi: <?php echo $gio_khoihanh ?></p>
                                                            </div>

                                                            <div class="tour__item-body--flash">
                                                                <h3 class="tour__item-body--flash-name"><?php echo $tieu_de ?></h3>
                                                            </div>

                                                            <div class="tour__item-body--code">
                                                                <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                                <p class="tour__item-body--code-item">
                                                                    <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                    <?php echo $ma_tour ?>
                                                                </p>
                                                            </div>

                                                            <div class="tour__item-body--local">
                                                                <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                                <div class="tour__item-body--local-item"><?php echo $noi_tap_trung ?></div>
                                                            </div>

                                                            <div class="tour__item-body--price">
                                                                <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                                <div class="tour__item-body--price-item"><?php echo number_format($gia_nguoilon) ?>đ</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }  ?>
                                            <!-- <div class="col l-4 m-6 c-12">
                                                <div class="tour__item">
                                                    <a href="./tourDetail.html" class="tour__item-main">
                                                        <img src="../Content/IMG/Tour/mientrung.jpg" alt="" class="tour__item-main--img">
                                                    </a>
                                                    <div class="tour__item-body">
                                                        <div class="tour__item-body--time">
                                                            <p class="tour__item-body--time-text">20/11/2021 - 3N2Đ - Giờ đi: 07:00</p>
                                                        </div>

                                                        <div class="tour__item-body--flash">
                                                            <h3 class="tour__item-body--flash-name">Phú Yên - Quy Nhơn(Tour Hành trình xanh)</h3>
                                                        </div>

                                                        <div class="tour__item-body--code">
                                                            <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                            <p class="tour__item-body--code-item">
                                                                <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                NDSGN687-104-201121VJ-D-F
                                                            </p>
                                                        </div>

                                                        <div class="tour__item-body--local">
                                                            <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                            <div class="tour__item-body--local-item">TP Cần Thơ</div>
                                                        </div>

                                                        <div class="tour__item-body--price">
                                                            <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                            <div class="tour__item-body--price-item">5,190,000đ</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
        
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
                                            <a href="index.php?call=listTour&loai_tour=<?php echo $loai_tour  ?>&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                        
                                        <div class="pagination__num">
                                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                                <?php if($page == $i) { ?>
                                                <a href="index.php?call=listTour&loai_tour=<?php echo $loai_tour  ?>&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                                            <?php } else { ?>
                                                <a href="index.php?call=listTour&loai_tour=<?php echo $loai_tour  ?>&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                                            <?php } 
                                                } ?>
                                        </div>
                                        
                                        <?php if($page < $pageNum) { ?>
                                        <div class="pagination__next">
                                            <a href="index.php?call=listTour&loai_tour=<?php echo $loai_tour  ?>&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            <?php } elseif(isset($_GET['timkiem'])) {  ?>
                                <!-- Text heading -->
                                <div class="content__text-heading">
                                    <h1 class="content__text-heading--item">Kết quả tìm kiếm tour du lịch</h1>
                                    <div class="content__text-info">
                                        <p class="content__text-info--return">
                                            Chúng tôi tìm thấy <strong><?php echo $numTour ?></strong> tour cho quý khách.
                                        </p>
                                    </div>
                                </div>

                                <div class="tour__list">
                                    <div class="grid">
                                        <div class="row">
                                            <?php 
                                                foreach($listTour as $tourItem) {
                                                    extract($tourItem);
                                                    $tourItem = get_tour_info($ma_tour);
                                                    extract($tourItem);
                                                    $imgTour = get_img_tour($ma_tour);
                                            ?>
                                                <div class="col l-4 m-6 c-12">
                                                    <div class="tour__item">
                                                        <a href="index.php?call=tourDetails&ma_tour=<?php echo $ma_tour ?>" class="tour__item-main">
                                                            <img src="<?php echo $upload_path.$imgTour[0]['ten_hinh'] ?>" alt="" class="tour__item-main--img">
                                                        </a>
                                                        <div class="tour__item-body">
                                                            <div class="tour__item-body--time">
                                                                <p class="tour__item-body--time-text"><?php echo $ngay_khoihanh?> - <?php echo $goi_ngay ?> - Giờ đi: <?php echo $gio_khoihanh ?></p>
                                                            </div>

                                                            <div class="tour__item-body--flash">
                                                                <h3 class="tour__item-body--flash-name"><?php echo $tieu_de ?></h3>
                                                            </div>

                                                            <div class="tour__item-body--code">
                                                                <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                                <p class="tour__item-body--code-item">
                                                                    <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                    <?php echo $ma_tour ?>
                                                                </p>
                                                            </div>

                                                            <div class="tour__item-body--local">
                                                                <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                                <div class="tour__item-body--local-item"><?php echo $noi_tap_trung ?></div>
                                                            </div>

                                                            <div class="tour__item-body--price">
                                                                <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                                <div class="tour__item-body--price-item"><?php echo number_format($gia_nguoilon) ?>đ</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }  ?>
                                            <!-- <div class="col l-4 m-6 c-12">
                                                <div class="tour__item">
                                                    <a href="./tourDetail.html" class="tour__item-main">
                                                        <img src="../Content/IMG/Tour/mientrung.jpg" alt="" class="tour__item-main--img">
                                                    </a>
                                                    <div class="tour__item-body">
                                                        <div class="tour__item-body--time">
                                                            <p class="tour__item-body--time-text">20/11/2021 - 3N2Đ - Giờ đi: 07:00</p>
                                                        </div>

                                                        <div class="tour__item-body--flash">
                                                            <h3 class="tour__item-body--flash-name">Phú Yên - Quy Nhơn(Tour Hành trình xanh)</h3>
                                                        </div>

                                                        <div class="tour__item-body--code">
                                                            <label for="" class="tour__item-body--code-label">Mã tour:</label>
                                                            <p class="tour__item-body--code-item">
                                                                <i class="tour__item-body--code-icon"><ion-icon name="paper"></ion-icon></i>
                                                                NDSGN687-104-201121VJ-D-F
                                                            </p>
                                                        </div>

                                                        <div class="tour__item-body--local">
                                                            <label for="" class="tour__item-body--local-label">Nơi khởi hành:</label>
                                                            <div class="tour__item-body--local-item">TP Cần Thơ</div>
                                                        </div>

                                                        <div class="tour__item-body--price">
                                                            <label for="" class="tour__item-body--price-label">Giá vé: </label>
                                                            <div class="tour__item-body--price-item">5,190,000đ</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
        
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
                                            <a href="index.php?call=listTour&timkiem&keyword=<?php echo $keyW ?>&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                        
                                        <div class="pagination__num">
                                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                                <?php if($page == $i) { ?>
                                                <a href="index.php?call=listTour&timkiem&keyword=<?php echo $keyW ?>&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                                            <?php } else { ?>
                                                <a href="index.php?call=listTour&timkiem&keyword=<?php echo $keyW ?>&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                                            <?php } 
                                                } ?>
                                        </div>
                                        
                                        <?php if($page < $pageNum) { ?>
                                        <div class="pagination__next">
                                            <a href="index.php?call=listTour&timkiem&keyword=<?php echo $keyW ?>&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php }  ?>

                            <!-- Favorite Places -->
                            <div class="grid wide">
                                    <div class="row">
                                        <div class="col l-12">
                                            <div class="favorite__place content__block">
                                                <div class="text-heading">
                                                    <h3>ĐIỂM ĐẾN YÊU THÍCH</h3>
                                                </div>
                                                <div class="grid">
                                                    <div class="row">
                                                        <?php 
                                                            $listLocalFavarite = load_local_by_special_limit();
                                                            foreach ($listLocalFavarite as $localItem) {
                                                                extract($localItem);
                                                        ?>
                                                        <div class="col l-3 m-6 c-6">
                                                            <div class="favorite__place-item">
                                                                <div class="favorite__place-main">
                                                                    <a href="index.php?call=listTour&ma_dia_diem=<?php echo $ma_diadiem ?>" class="favorite__place-link">
                                                                        <img src="<?php echo $upload_path.$hinh_anh?>" alt="" class="favorite__place-img">
                                                                    </a>
                                                                </div>
                                                                <div class="favorite__place-body">
                                                                    <p class="favorite__place-name"><?php echo $ten_diadiem ?></p>
                                                                    <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <!-- <div class="col l-3 m-6 c-6">
                                                            <div class="favorite__place-item">
                                                                <div class="favorite__place-main">
                                                                    <a href="./listTour.html" class="favorite__place-link">
                                                                        <img src="../Content/IMG/Tour/danang.jpg" alt="" class="favorite__place-img">
                                                                        
                                                                    </a>
                                                                </div>
                                                                <div class="favorite__place-body">
                                                                    <p class="favorite__place-name">Đà Nẵng</p>
                                                                    <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>