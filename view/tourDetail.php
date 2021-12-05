<?php 
    if(is_array($tourDetail)) {
        extract($tourDetail);
    }
?>
<!-- Tour Details -->
<main>
            <div class="tour__details content__block">
                <div class="grid wide">
                    <!-- Tour Details Heading -->
                    <div class="row">
                        <div class="col l-8">
                            <div class="tour__details-name">
                                <div class="tour__details-code">
                                    <p class="tour__details-code-item">
                                        <i class="tour__details-code-icon"><ion-icon name="paper"></ion-icon></i>
                                        <?php echo $ma_tour ?>
                                    </p>
                                </div>

                                <div class="tour__details-local">
                                    <h1 class="tour__details-local--name"><?php echo $tieu_de ?></h1>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col l-4">
                            <div class="tour__details-btn">
                                <div class="tour__details-btn--price">
                                    <p class="tour__details-btn--price-item"><span><?php echo number_format($gia_nguoilon) ?>đ</span>/Khách</p>
                                </div>

                                <div class="tour__details-btn--block">
                                    <a href="index.php?call=bookTicket&ma_tour=<?php echo $ma_tour ?>" class="btn tour__details-btn--item">
                                        <i class="tour__details-btn--icon"><ion-icon name="cart"></ion-icon></i>
                                        Đặt ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                        $listImgTour = get_img_tour($ma_tour);
                    ?>

                    <!-- Tour Details Imgae -->
                    <div class="row sm-gutter tour__detail-imgage--block">
                        <div class="col l-7 w-h-100">
                            <div class="tour__detail-image--big tour__detail-image--box">
                                <img src="<?php echo $upload_path.$listImgTour[0]['ten_hinh'] ?>" alt="" class="tour__detail-image--big-img tour__detail-image--all">
                            </div>
                        </div>
                        <div class="col l-5 w-h-100">
                            <div class="grid w-h-100">
                                <div class="row sm-gutter w-h-100">
                                    <div class="col l-12">
                                        <div class="grid">
                                            <div class="row sm-gutter">
                                                <div class="col l-6">
                                                    
                                                    <div class="tour__detail-image--sml tour__detail-image--box">
                                                        <img src="<?php echo $upload_path.$listImgTour[1]['ten_hinh'] ?>" alt="" class="tour__detail-image--sml-img tour__detail-image--all">
                                                    </div>
                                                </div>
        
                                                <div class="col l-6">
                                                    <div class="tour__detail-image--sml tour__detail-image--box">
                                                        <img src="<?php echo $upload_path.$listImgTour[2]['ten_hinh'] ?>" alt="" class="tour__detail-image--sml-img tour__detail-image--all">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col l-12">
                                        <div class="tour__detail-image--md tour__detail-image--box">
                                            <img src="<?php echo $upload_path.$listImgTour[3]['ten_hinh'] ?>" alt="" class="tour__detail-image--md-img tour__detail-image--all">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desc Local -->
                    <div class="row">
                        <div class="col l-12">
                            <div class="tour__desc-tour">
                                <div class="tour__desc--tour-local">
                                    <p class="tour__desc--tour-local--text">
                                        <?php echo $gioi_thieu ?>
                                    </p>
                                </div>

                                <div class="tour__desc--tour-item">
                                    <p class="tour__desc--tour-item-date">
                                        Khởi hành: <span><?php echo $ngay_khoihanh ?></span>
                                    </p>
                                    <p class="tour__desc--tour-item-time">
                                        Thời gian: <span style="text-transform: capitalize"><?php echo $goi_ngay ?></span>
                                    </p>
                                    <p class="tour__desc--tour-item-local">
                                        Nơi khởi hành: <span style="text-transform: capitalize"><?php echo $noi_tap_trung ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Beaty Local -->
                    <div class="row">
                        <div class="col l-12">
                            <div class="tour__details-beaty--block">
                                <div class="text__heaing-block">
                                    <h2 class="text__heaing-block--item">
                                        Những địa điểm nổi bật
                                    </h2>
                                </div>
                                <ul class="tour__details-beaty--list">
                                    <li class="tour__details-beaty--item">
                                        <img src="<?php echo $upload_path.$listImgTour[4]['ten_hinh'] ?>" alt="" class="tour__details-beaty--img">
                                    </li>
                                    <li class="tour__details-beaty--item">
                                        <img src="<?php echo $upload_path.$listImgTour[5]['ten_hinh'] ?>" alt="" class="tour__details-beaty--img">
                                    </li>
                                    <li class="tour__details-beaty--item">
                                        <img src="<?php echo $upload_path.$listImgTour[6]['ten_hinh'] ?>" alt="" class="tour__details-beaty--img">
                                    </li>
                                    <li class="tour__details-beaty--item">
                                        <img src="<?php echo $upload_path.$listImgTour[7]['ten_hinh'] ?>" alt="" class="tour__details-beaty--img">
                                    </li>
                                    <li class="tour__details-beaty--item">
                                        <img src="<?php echo $upload_path.$listImgTour[8]['ten_hinh'] ?>" alt="" class="tour__details-beaty--img">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Schedule -->
                    <div class="row">
                        <div class="col l-12">
                            <div class="text__heaing-block tour__schedule-block">
                                <h2 class="text__heaing-block--item">
                                    Lịch trình du lịch
                                </h2>
                            </div>
                        </div>

                        <!-- Tour Schedule Left -->
                        <div class="col l-4">
                            <?php 
                                $listJourneys = get_journeys($ma_tour); 
                                $fl = 1;
                                foreach($listJourneys as $journeysItem) {
                                    extract($journeysItem);
                            ?>
                            <div class="tour__schedule-mini">
                                <div class="tour__schedule-mini--item">
                                    <span class="tour__schedule-mini--item-date-left">Ngày</span>
                                    <span class="tour__schedule-mini--item-date-center"><?php echo $fl++ ?></span>
                                    <span class="tour__schedule-mini--item-date-right">
                                        <span class="date"><?php echo $ngay_di ?></span>
                                        <span class="location"><?php echo $tieu_de ?></span>
                                    </span>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- <div class="tour__schedule-mini">
                                <div class="tour__schedule-mini--item">
                                    <span class="tour__schedule-mini--item-date-left">Ngày</span>
                                    <span class="tour__schedule-mini--item-date-center">2</span>
                                    <span class="tour__schedule-mini--item-date-right">
                                        <span class="date">03/12/2021</span>
                                        <span class="location">SA PA – FANSIPAN HÙNG VĨ - LÀO CAI</span>
                                    </span>
                                </div>
                            </div> -->
                        </div>

                        <!-- Tour Schedule Right -->
                        <div class="col l-8">
                            <div class="tour__schedule-content">
                                <?php 
                                    $day = 1;
                                    foreach($listJourneys as $journeysItemB) { 
                                        extract($journeysItemB);
                                ?>
                                    <div class="tour__schedule-content--item">
                                        <h2 class="tour__schedule-content--lcoal">
                                            Ngày <?php echo $day++ ?> - <?php echo $tieu_de ?>
                                        </h2>
                                        <div class="tour__schedule-content--info">
                                            <span class="tour__schedule-content--info-line"></span>
                                            <div class="tour__schedule-content--text">
                                                <?php echo $noi_dung ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- <div class="tour__schedule-content--item">
                                    <h2 class="tour__schedule-content--lcoal">
                                        Ngày 2 - SA PA – FANSIPAN HÙNG VĨ - LÀO CAI
                                    </h2>
                                    <div class="tour__schedule-content--info">
                                        <span class="tour__schedule-content--info-line"></span>
                                        <div class="tour__schedule-content--text">
                                            <div class="tour__schedule-content--text-item">
                                                Xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi 
                                                Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy 
                                                màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.
                                            </div>
                                            <div class="tour__schedule-content--text-item">
                                                - Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc).
                                            </div>
                                            <div class="tour__schedule-content--text-item">
                                                - Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân 
                                                Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan. 
                                            </div>
                                            <div class="tour__schedule-content--text-item">
                                                Buổi chiều tham quan: 
                                            </div>
                                            <div class="tour__schedule-content--text-item">
                                                - Núi Hàm Rồng thăm vườn Lan khoe sắc, vườn hoa Trung Tâm, ngắm Núi Phanxipăng hùng vĩ, Cổng Trời, Đầu Rồng Thạch Lâm, Sân Mây.  
                                            </div>
                                            <div class="tour__schedule-content--text-item">
                                                Trong trường hợp không tham quan được Hàm Rồng vì lí do bất khả kháng, chương trình sẽ được chuyển sang Thác Bạc. Nghỉ đêm Sapa.
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- Tour Warning -->
                                <div class="tour__schedule-content--warning">
                                    <h4 class="tour__schedule-content--warning-heading">Lưu ý: </h4>
                                    <ul class="tour__schedule-content--warning-list">
                                        <li class="tour__schedule-content--warning-item">
                                            Việc điều chỉnh yêu cầu xét nghiệm covid và mũi tiêm có thể sẽ thay đổi theo quy định hiện hành của Cơ quan 
                                            Quản lý Nhà nước có thẩm quyền. Vui lòng liên hệ nhân viên tư vấn để biết thêm chi tiết.
                                        </li>
                                        <li class="tour__schedule-content--warning-item">
                                            Trong trường hợp trong đoàn có phát sinh ca nghi nhiễm/nhiễm covid 19, khách hàng (bao gồm cả các trường hợp được xác định là F1) 
                                            có trách nhiệm phối hợp với Vietravel và chính quyền địa phương để thực hiện các biện pháp cách ly/ điều trị theo quy định.
                                        </li>
                                        <li class="tour__schedule-content--warning-item">
                                            Các chi phí phát sinh trong quá trình cách ly điều trị, bao gồm nhưng không giới hạn các chi phí xét nghiệm, cách ly y tế, vận chuyển, 
                                            lưu trú, bữa ăn, điều trị, chi phí cá nhân khác… sẽ không nằm trong chi phí tour, dịch vụ và khách hàng tự chịu trách nhiệm chi trả.
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Tour Infomation -->
                    <div class="row">
                        <div class="col l-6">
                            <div class="text__heaing-block tour__info-block">
                                <h2 class="text__heaing-block--item">
                                    Giá tour
                                </h2>
                            </div>
                            <div class="tour__info-price">
                                <table class="tour__info-price--tbl">
                                    <tbody>
                                        <tr>
                                            <th>Loại khách</th>
                                            <th>Giá tour</th>
                                        </tr>
                                        <tr>
                                            <td>Người lớn (Từ 12 tuổi trỏ lên)</td>
                                            <td class="tour__info-price--tbl-price"><?php echo number_format($gia_nguoilon) ?> VNĐ</td>
                                        </tr>
                                        <tr>
                                            <td>Trẻ em (Dưới 12 tuổi)</td>
                                            <td class="tour__info-price--tbl-price"><?php echo number_format($gia_treem) ?> VNĐ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col l-6">
                            .
                            <div class="text__heaing-block tour__info-block">
                                <h2 class="text__heaing-block--item">
                                    Thông tin tập trung
                                </h2>
                            </div>

                            <div class="tour__info-ready">
                                <div class="tour__info-ready--item">
                                    <span class="tour__info-ready--item-label">Ngày giờ tập trung</span>
                                    <div class="tour__info-ready--item-date">
                                        <span class="tour__info-ready--item-date-time"><?php echo $gio_khoihanh ?></span>
                                        <span class="tour__info-ready--item-date-item"><?php echo $ngay_khoihanh ?></span>
                                    </div>
                                </div>

                                <div class="tour__info-ready--item">
                                    <span class="tour__info-ready--item-label">Nơi tập trung</span>
                                    <div class="tour__info-ready--local">
                                        <span class="tour__info-ready--local-time"><?php echo $noi_tap_trung ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Maybe You Will Like -->
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
            <script type="text/javascript">
   plugin_lienhe();
</script>
        </main>