<!-- Main -->
<main>

 
    <!-- Category -->
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="category content__block">
                    <div class="text-heading">
                        <h3>KHÁM PHÁ CÁC TOUR DU LỊCH</h3>
                    </div>

                    <div class="category-wrap">
                        <div class="category__list">
                            <?php
                                $listCateTour = load_all_tour();
                                foreach($listCateTour as $cateTourItem) {
                                    extract($cateTourItem);
                            ?>
                            <div class="category__item">
                                <a href="index.php?call=listTour&loai_tour=<?php echo $ma_loai ?>" class="category__item-link">
                                    <img src="<?php echo $upload_path.$hinh_anh ?>" alt="" class="category__item-img">
                                </a>
                                <span class="category__item-info"><?php echo $ten_loai ?></span>
                            </div>
                            <?php } ?>
                        </div>

                        <!-- Category Button -->
                        <div class="btn category__btn-item category__btn-left">
                            <i class="category__btn-icon">
                                <ion-icon name="arrow-dropleft"></ion-icon>
                            </i>
                        </div>

                        <div class="btn category__btn-item category__btn-right">
                            <i class="category__btn-icon">
                                <ion-icon name="arrow-dropright"></ion-icon>
                            </i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Home Service Special -->
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="home__service content__block">
                    <div class="text-heading">
                        <h3>CÁC GÓI ĐẶC BIỆT</h3>
                    </div>
                    <!-- List Service -->
                    <div class="home__service-list">
                        <?php
                            $listTour = load_tour_speacial();
                            foreach($listTour as $tourItem) {
                                extract($tourItem);
                        ?>
                        <div class="home__service-item mt-8-tpl">
                            <div class="grid">
                                <div class="row">
                                    <div class="col l-3 m-12 c-12">
                                        <a href="index.php?call=tourDetails&ma_tour=<?php echo $ma_tour ?>" class="home__service-link">
                                        <?php 
                                            $img_tour = get_img_tour($ma_tour);                                                                                         ;
                                        ?>
                                            <img src="<?php echo $upload_path.$img_tour[0]['ten_hinh'] ?>" alt="" class="home__service-img">
                                        </a>
                                    </div>
                                    <div class="col l-6 m-9 c-12">
                                        <div class="home__service-body">
                                            <div class="home__service-body--sale">
                                                <h4 class="home__service-body--sale-text">Giảm giá đến <?php echo $khuyen_mai ?>%</h4>
                                            </div>
                                            <div class="home__service-body--detail-title">
                                                <p class="home__service-body--detail-title-text"><?php echo $tieu_de ?></p>
                                            </div>
                                            <div class="home__service-body--info">
                                                <p class="home__service-body--info-text">Vé xe khứ hồi TP Cần Thơ - Kiên Giang + Ăn sáng + Miễn phí năng hạng phòng tùy tình trạng phòng</p>
                                            </div>
                                            <div class="home__service-body--local">
                                                <i class="home__service-body--local-icon">
                                                    <ion-icon name="pin"></ion-icon>
                                                </i>
                                                <p class="home__service-body--local-text">
                                                    Hòn sơn, TP Kiên Giang, Tỉnh Khánh Hòa, Việt Nam
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l-3 m-3 c-12">
                                        <div class="home__service-price">
                                            <div class="home__service-price--min">
                                                Giá Chỉ
                                            </div>
                                            <div class="home__service-price--main">
                                                <p class="home__service-price--mn"><?php echo number_format($gia_nguoilon) ?>đ</p>
                                                <p class="home__service-price--prt">/Khách</p>
                                            </div>
                                            <div class="home__service-price--date">
                                                <p class="home__service-price--date-dt">Ngày đi 16/11/2021</p>
                                            </div>
                                            <div class="home__service-price--btn">
                                                <a href="index.php?call=tourDetails&ma_tour=<?php echo $ma_tour ?>" class="btn home__service-price--btn-item">Đặt ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php } ?>
                        <!-- <div class="home__service-item mt-8-tpl">
                            <div class="grid">
                                <div class="row">
                                    <div class="col l-3 m-12 c-12">
                                        <a href="./layout/tourDetail.html" class="home__service-link">
                                            <img src="./Content/IMG/Tour/baclieu.jpg" alt="" class="home__service-img">
                                        </a>
                                    </div>
                                    <div class="col l-6 m-9 c-12">
                                        <div class="home__service-body">
                                            <div class="home__service-body--sale">
                                                <h4 class="home__service-body--sale-text">Giảm giá đến 8% cho vé người lớn và vé trẻ em</h4>
                                            </div>
                                            <div class="home__service-body--detail-title">
                                                <p class="home__service-body--detail-title-text">Combo 2 ngày 1 đêm tại khu nghĩ dưỡng Vibe Luxury Bạc Liêu</p>
                                            </div>
                                            <div class="home__service-body--info">
                                                <p class="home__service-body--info-text">Vé xe khứ hồi TP Cần Thơ - TP Bạc Liêu + Ăn sáng, trưa, chiều + Party văn nghệ buổi tối</p>
                                            </div>
                                            <div class="home__service-body--local">
                                                <i class="home__service-body--local-icon">
                                                    <ion-icon name="pin"></ion-icon>
                                                </i>
                                                <p class="home__service-body--local-text">
                                                    Champa, TP Bạc Liêu, Tỉnh Bạc Liêu, Việt Nam
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l-3 m-3 c-12">
                                        <div class="home__service-price">
                                            <div class="home__service-price--min">
                                                Giá Chỉ
                                            </div>
                                            <div class="home__service-price--main">
                                                <p class="home__service-price--mn">4,490,000đ</p>
                                                <p class="home__service-price--prt">/Khách</p>
                                            </div>
                                            <div class="home__service-price--date">
                                                <p class="home__service-price--date-dt">Ngày đi 14/11/2021</p>
                                            </div>
                                            <div class="home__service-price--btn">
                                                <a href="./layout/tourDetail.html" class="btn home__service-price--btn-item">Đặt ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> -->

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Favorite Places -->
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="favorite__place content__block">
                    <div class="text-heading">
                        <h3>ĐIỂM ĐẾN YÊU THÍCH</h3>
                    </div>
                    <div class="grid">
                        <!-- Line 1 -->
                        <div class="row">
                            <?php
                                $listLocalSpeacial =  load_local_by_special();
                                foreach($listLocalSpeacial as $localSpeacialItem) {
                                    extract($localSpeacialItem);
                            ?>
                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="index.php?call=listTour&ma_dia_diem=<?php echo $ma_diadiem ?>" class="favorite__place-link">
                                            <img src="<?php echo $upload_path.$hinh_anh ?>" alt="" class="favorite__place-img">
                                            <!-- <div class="overlay"></div> -->
                                            <!-- <img src="./Content/IMG/Icon/pagodaIccon.png" alt="" class="favorite__place-icon"> -->
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name"><?php echo $ten_diadiem ?></p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer Comment -->
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="customer__comment content__block">
                    <div class="text-heading">
                        <h3>Ý KIẾN KHÁCH HÀNG</h3>
                    </div>
                    <div class="grid">
                        <div class="row">
                            <div class="col l-4 m-6 c-12">
                                <div class="customer__comment-item">
                                    <a href="./layout/newsDeatails.html" class="customer__comment-item--link">
                                        <div class="customer__comment-item--custom">
                                            <img src="./Content/IMG/Usser/user1.jpg" alt="" class="customer__comment-item--img">
                                        </div>
                                        <div class="customer__comment-item--info">
                                            <h5 class="customer__comment-item--content">
                                                TOUR VN đồng hành cùng du khách trong chuyến đi Hòn Sơn 2 ngày 1 đêm, mang lại trải nghiệm thú vị và chuyên nghiệp
                                            </h5>
                                            <p class="customer__comment-item--name">
                                                Khách hàng TOUR VN
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col l-4 m-6 c-12">
                                <div class="customer__comment-item">
                                    <a href="./layout/newsDeatails.html" class="customer__comment-item--link">
                                        <div class="customer__comment-item--custom">
                                            <img src="./Content/IMG/Usser/user2.jpg" alt="" class="customer__comment-item--img">
                                        </div>
                                        <div class="customer__comment-item--info">
                                            <h5 class="customer__comment-item--content">
                                                Thư phản hồi của khách du lịch quốc tế về chuyến đi miền tây
                                            </h5>
                                            <p class="customer__comment-item--name">
                                                Khách hàng TOUR VN
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col l-4 m-6 c-12">
                                <div class="customer__comment-item">
                                    <a href="./layout/newsDeatails.html" class="customer__comment-item--link">
                                        <div class="customer__comment-item--custom">
                                            <img src="./Content/IMG/Usser/user3.jpg" alt="" class="customer__comment-item--img">
                                        </div>
                                        <div class="customer__comment-item--info">
                                            <h5 class="customer__comment-item--content">
                                                Hành trình về miền núi
                                            </h5>
                                            <p class="customer__comment-item--name">
                                                Khách hàng TOUR VN
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reason Choose Web -->
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="reason__choose content__block">
                    <div class="text-heading">
                        <h3>VÌ SAO NÊN CHỌN TUOR VN</h3>
                    </div>
                    <div class="grid">
                        <div class="row">
                            <div class="col l-4 m-4 c-6">
                                <div class="reason__choose-item">
                                    <img src="./Content/IMG/Icon/internet.png" alt="" class="reason__choose-img">
                                    <h5 class="reason__choose-main">Mạng bán tour</h5>
                                    <p class="reason__choose-sub--text">Đầu tiên tại Việt Nam</p>
                                    <p class="reason__choose-sub--text">Ứng dụng công nghệ mới nhất</p>
                                </div>
                            </div>

                            <div class="col l-4 m-4 c-6">
                                <div class="reason__choose-item">
                                    <img src="./Content/IMG/Icon/payin.png" alt="" class="reason__choose-img">
                                    <h5 class="reason__choose-main">Thanh toán</h5>
                                    <p class="reason__choose-sub--text">An toàn & linh hoạt</p>
                                    <p class="reason__choose-sub--text">Kết nối với các công ty tài chính</p>
                                </div>
                            </div>

                            <div class="col l-4 m-4 c-6">
                                <div class="reason__choose-item">
                                    <img src="./Content/IMG/Icon/mony.png" alt="" class="reason__choose-img">
                                    <h5 class="reason__choose-main">Giá cả</h5>
                                    <p class="reason__choose-sub--text">Luôn có mức giá tốt nhất</p>
                                    <p class="reason__choose-sub--text">Giá tiền đi đôi với chất lượng dịch vụ</p>
                                </div>
                            </div>

                            <div class="col l-4 m-4 c-6">
                                <div class="reason__choose-item">
                                    <img src="./Content/IMG/Icon/good.png" alt="" class="reason__choose-img">
                                    <h5 class="reason__choose-main">Dịch vụ</h5>
                                    <p class="reason__choose-sub--text">Đa dạng chất lượng</p>
                                    <p class="reason__choose-sub--text">Luôn dành chất lượng tốt nhất cho khách hàng</p>
                                </div>
                            </div>

                            <div class="col l-4 m-4 c-6">
                                <div class="reason__choose-item">
                                    <img src="./Content/IMG/Icon/easi.png" alt="" class="reason__choose-img">
                                    <h5 class="reason__choose-main">Đặt tour</h5>
                                    <p class="reason__choose-sub--text">Đễ dàng nhanh chống</p>
                                    <p class="reason__choose-sub--text">An toàn, tiện lợi và dễ dàng sử dụng</p>
                                </div>
                            </div>

                            <div class="col l-4 m-4 c-6">
                                <div class="reason__choose-item">
                                    <img src="./Content/IMG/Icon/sup.png" alt="" class="reason__choose-img">
                                    <h5 class="reason__choose-main">Hỗ trợ</h5>
                                    <p class="reason__choose-sub--text">Tổng đài hỗ trợ 24/7</p>
                                    <p class="reason__choose-sub--text">Hotline & Hỗ trợ trực tuyến</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>