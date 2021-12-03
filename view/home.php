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
                                <a href="./layout/listTour.html" class="category__item-link">
                                    <img src="./upload/<?php echo $hinh_anh ?>" alt="" class="category__item-img">
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

                        <div class="home__service-item mt-8-tpl">
                            <div class="grid">
                                <div class="row">
                                    <div class="col l-3 m-12 c-12">
                                        <a href="./layout/tourDetail.html" class="home__service-link">
                                            <img src="./Content/IMG/Tour/sapa.jpg" alt="" class="home__service-img">
                                        </a>
                                    </div>
                                    <div class="col l-6 m-9 c-12">
                                        <div class="home__service-body">
                                            <div class="home__service-body--sale">
                                                <h4 class="home__service-body--sale-text">Giảm giá đến 10% cho vé người lớn và 12% đối với vé trẻ em</h4>
                                            </div>
                                            <div class="home__service-body--detail-title">
                                                <p class="home__service-body--detail-title-text">Combo 3 ngày 2 đêm tại khu nghĩ dưỡng Vinpear Luxury Hòn Sơn</p>
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
                                                <p class="home__service-price--mn">6,490,000đ</p>
                                                <p class="home__service-price--prt">/Khách</p>
                                            </div>
                                            <div class="home__service-price--date">
                                                <p class="home__service-price--date-dt">Ngày đi 16/11/2021</p>
                                            </div>
                                            <div class="home__service-price--btn">
                                                <a href="./layout/tourDetail.html" class="btn home__service-price--btn-item">Đặt ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="home__service-item mt-8-tpl">
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

                        </div>

                        <div class="home__service-item mt-8-tpl">
                            <div class="grid">
                                <div class="row">
                                    <div class="col l-3 m-12 c-12">
                                        <a href="./layout/tourDetail.html" class="home__service-link">
                                            <img src="./Content/IMG/Tour/condao.jpg" alt="" class="home__service-img">
                                        </a>
                                    </div>
                                    <div class="col l-6 m-9 c-12">
                                        <div class="home__service-body">
                                            <div class="home__service-body--sale">
                                                <h4 class="home__service-body--sale-text">Giảm giá đến 10% cho vé người lớn và Miễn phí 2 vé trẻ em</h4>
                                            </div>
                                            <div class="home__service-body--detail-title">
                                                <p class="home__service-body--detail-title-text">Combo 1 ngày 1 đêm tại khu nghĩ dưỡng Extra Côn Đảo</p>
                                            </div>
                                            <div class="home__service-body--info">
                                                <p class="home__service-body--info-text">Vé xe khứ hồi TP Hồ Chí Minh - TP Kiên Giang + Ăn sáng, trưa, chiều + Miễn phí phòng</p>
                                            </div>
                                            <div class="home__service-body--local">
                                                <i class="home__service-body--local-icon">
                                                    <ion-icon name="pin"></ion-icon>
                                                </i>
                                                <p class="home__service-body--local-text">
                                                    Côn Đảo, TP Kiên Giang, Tỉnh Khánh Hòa, Việt Nam
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
                                                <p class="home__service-price--mn">5,130,000đ</p>
                                                <p class="home__service-price--prt">/Khách</p>
                                            </div>
                                            <div class="home__service-price--date">
                                                <p class="home__service-price--date-dt">Ngày đi 16/11/2021</p>
                                            </div>
                                            <div class="home__service-price--btn">
                                                <a href="./layout/tourDetail.html" class="btn home__service-price--btn-item">Đặt ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="home__service-item mt-8-tpl">
                            <div class="grid">
                                <div class="row">
                                    <div class="col l-3 m-12 c-12">
                                        <a href="./layout/tourDetail.html" class="home__service-link">
                                            <img src="./Content/IMG/Tour/danang.jpg" alt="" class="home__service-img">
                                        </a>
                                    </div>

                                    <div class="col l-6 m-9 c-12">
                                        <div class="home__service-body">
                                            <div class="home__service-body--sale">
                                                <h4 class="home__service-body--sale-text">Giảm giá đến 10% giá vé và khách sạn</h4>
                                            </div>
                                            <div class="home__service-body--detail-title">
                                                <p class="home__service-body--detail-title-text">Combo 7 ngày 6 đêm tại khu nghĩ dưỡng DaNang Resort</p>
                                            </div>
                                            <div class="home__service-body--info">
                                                <p class="home__service-body--info-text">Miễn phí khách sạn + Party giao lưu văn hóa mỗi đêm + Pestival ẩm thực</p>
                                            </div>
                                            <div class="home__service-body--local">
                                                <i class="home__service-body--local-icon">
                                                    <ion-icon name="pin"></ion-icon>
                                                </i>
                                                <p class="home__service-body--local-text">
                                                    Cầu Vàng, TP Đà Nẵng, Tỉnh Khánh Hòa, Việt Nam
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
                                                <p class="home__service-price--mn">12,120,000đ</p>
                                                <p class="home__service-price--prt">/Khách</p>
                                            </div>
                                            <div class="home__service-price--date">
                                                <p class="home__service-price--date-dt">Ngày đi 20/11/2021</p>
                                            </div>
                                            <div class="home__service-price--btn">
                                                <a href="./layout/tourDetail.html" class="btn home__service-price--btn-item">Đặt ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="home__service-item mt-8-tpl">
                            <div class="grid">
                                <div class="row">
                                    <div class="col l-3 m-12 c-12">
                                        <a href="./layout/tourDetail.html" class="home__service-link">
                                            <img src="./Content/IMG/Tour/dongthap.jpg" alt="" class="home__service-img">
                                        </a>
                                    </div>
                                    <div class="col l-6 m-9 c-12">
                                        <div class="home__service-body">
                                            <div class="home__service-body--sale">
                                                <h4 class="home__service-body--sale-text">Giảm giá đến 12% giá vé và miễn phí khách sạn</h4>
                                            </div>
                                            <div class="home__service-body--detail-title">
                                                <p class="home__service-body--detail-title-text">Combo 3 ngày 2 đêm tại Resort Chàm Chim Đồng Tháp</p>
                                            </div>
                                            <div class="home__service-body--info">
                                                <p class="home__service-body--info-text">Vé xe khứ hồi TP Cần Thơ - TP Đồng Tháp + Ăn sáng + Miễn phí tham quan khu chàm chim</p>
                                            </div>
                                            <div class="home__service-body--local">
                                                <i class="home__service-body--local-icon">
                                                    <ion-icon name="pin"></ion-icon>
                                                </i>
                                                <p class="home__service-body--local-text">
                                                    Chàm Chim, TP Đồng Tháp, Tỉnh Cao Lãnh, Việt Nam
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
                                                <p class="home__service-price--mn">2,490,000đ</p>
                                                <p class="home__service-price--prt">/Khách</p>
                                            </div>
                                            <div class="home__service-price--date">
                                                <p class="home__service-price--date-dt">Ngày đi 19/11/2021</p>
                                            </div>
                                            <div class="home__service-price--btn">
                                                <a href="./layout/tourDetail.html" class="btn home__service-price--btn-item">Đặt ngay</a>
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
                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/hanoi.jpg" alt="" class="favorite__place-img">
                                            <div class="overlay"></div>
                                            <img src="./Content/IMG/Icon/pagodaIccon.png" alt="" class="favorite__place-icon">
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Hà Nội</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/danang.jpg" alt="" class="favorite__place-img">
                                            <!-- <img src="./Content/IMG/Icon/windmill.png" alt="" class="favorite__place-icon"> -->
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Đà Nẵng</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/dalat.jpg" alt="" class="favorite__place-img">
                                            <!-- <img src="./Content/IMG/Icon/mount.png" alt="" class="favorite__place-icon"> -->
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Đà Lạt</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/condao.jpg" alt="" class="favorite__place-img">
                                            <div class="overlay"></div>
                                            <!-- <img src="./Content/IMG/Icon/pagoda.png" alt="" class="favorite__place-icon"> -->
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Phú Quốc</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/honson.jpg" alt="" class="favorite__place-img">
                                            <div class="overlay"></div>
                                            <img src="./Content/IMG/Icon/pagodaIccon.png" alt="" class="favorite__place-icon">
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Hòn Sơn</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/vungtau.jpg" alt="" class="favorite__place-img">
                                            <!-- <img src="./Content/IMG/Icon/windmill.png" alt="" class="favorite__place-icon"> -->
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Vũng Tàu</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/ninhthuan.jpg" alt="" class="favorite__place-img">
                                            <!-- <img src="./Content/IMG/Icon/mount.png" alt="" class="favorite__place-icon"> -->
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Ninh Thuận</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6">
                                <div class="favorite__place-item">
                                    <div class="favorite__place-main">
                                        <a href="./layout/listTour.html" class="favorite__place-link">
                                            <img src="./Content/IMG/Tour/halong.jpg" alt="" class="favorite__place-img">
                                            <div class="overlay"></div>
                                            <!-- <img src="./Content/IMG/Icon/pagoda.png" alt="" class="favorite__place-icon"> -->
                                        </a>
                                    </div>
                                    <div class="favorite__place-body">
                                        <p class="favorite__place-name">Hạ Long</p>
                                        <p class="favorite__place-view">Đã có 176,120 lượt khách</p>
                                    </div>
                                </div>
                            </div>

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