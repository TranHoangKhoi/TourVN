<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Du Lịch Hàng Đầu VIệt Nam</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="./Content/IMG/BG/logo.png">
    <link rel="stylesheet" href="./Content/CSS/grid.css">
    <link rel="stylesheet" href="./Content/CSS/base.css">
    <link rel="stylesheet" href="./Content/CSS/main.css">
    <link rel="stylesheet" href="./Content/CSS/layout.css">
    <link rel="stylesheet" href="./Content/CSS/responsive.css">
    <link rel="stylesheet" href="./Content/CSS/plugin_lienhe.css">
</head>

<body>
<div class="fab-wrapper">
   <input id="fabCheckbox" type="checkbox" class="fab-checkbox">
   <label class="fab" for="fabCheckbox">
      <i class="icon-cps-fab-menu"></i>
      <!-- <i class="icon-cps-close"></i> -->
   </label>
   <div class="fab-wheel">
      <a class="fab-action fab-action-1" href="https://www.facebook.com/profile.php?id=100014297884994" rel="nofollow" target="_blank">
         <span class="fab-title">Tìm cửa hàng</span>
         <div class="fab-button fab-button-1"><i class="icon-cps-local"></i></div>
      </a>
      <a class="fab-action fab-action-2" href="tel:0328711028" rel="nofollow">
         <span class="fab-title">Gọi trực tiếp</span>
         <div class="fab-button fab-button-2"><i class="icon-cps-phone"></i></div>
      </a>
      <a class="fab-action fab-action-3" onclick="Tawk_API.showWidget();Tawk_API.maximize();" rel="nofollow">
         <span class="fab-title">Chat ngay</span>
         <div class="fab-button fab-button-3"><i class="icon-cps-chat"></i></div>
      </a>
      <a class="fab-action fab-action-4" href="https://www.facebook.com/profile.php?id=100014297884994" target="_blank" rel="nofollow">
         <span class="fab-title">Chat trên Zalo</span>
         <div class="fab-button fab-button-4"><i class="icon-cps-chat-zalo"></i></div>
      </a>
   </div>
   <div class="suggestions-chat-box hidden" style="display: none;">
      <div class="box-content d-flex justify-content-around align-items-center">
         <i class="fa fa-times-circle" aria-hidden="true" id="btnClose" onclick="jQuery('.suggestions-chat-box').hide()"></i>
         <p class="mb-0 font-14">Liên hệ ngay <i class="fa fa-hand-o-right" aria-hidden="true"></i></p>
      </div>
   </div>
   <div class="devvn_bg"></div>
</div>

    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="grid header__container">
                <!-- Header Top -->
                <div class="header__top">
                    <div class="header__top-logo">
                        <a href="index.php" class="header__top-logo--link">
                            <img src="./Content/IMG/BG/Untitled-2.png" alt="" class="header__top-logo-img">
                        </a>
                    </div>

                    <div class="header__top-right">
                        <!-- Nav Bar PC-->
                        <nav class="header__top-navbar">
                            <ul class="header__top-list">
                                <li class="header__top-item">
                                    <a href="#" class="header__top-link">
                                        Du lịch
                                        <i class="header__top-link--icon">
                                            <ion-icon name="arrow-dropdown"></ion-icon>
                                        </i>
                                    </a>
                                    <!-- Sub Nav -->
                                    <div class="header__top-subnav--tour">
                                        <div class="grid wide">
                                            <div class="row">
                                                <?php
                                                    $listLocalSide = list_Side();
                                                    foreach($listLocalSide as $localSideItem) {
                                                        extract($localSideItem);
                                                        $localSideId = $ma_mien
                                                ?>
                                                    <div class="col l-3 subnav-tour__block">
                                                        <h3 class="subnav-tour__text-heading"><?php echo $ten_mien ?></h3>
                                                        <ul class="subnav-tour__list">
                                                            <?php 
                                                                $listLocal =  load_local_by_side($localSideId);
                                                                foreach($listLocal as $localItem) {
                                                                    extract($localItem);
                                                            ?>
                                                            <li class="subnav-tour__item">
                                                                <a href="?call=listTour&ma_dia_diem=<?php echo $ma_diadiem ?>" class="subnav-tour__link"><?php echo $ten_diadiem ?></a>
                                                            </li>
                                                            <?php } ?>
                                                            <li class="subnav-tour__item">
                                                                <a href="?call=listTour&ma_vung_mien=<?php echo $localSideId ?>" class="subnav-tour__link subnav-tour__link--text-decoration">Xem tất cả</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <?php
                                                    }
                                                ?>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <li class="header__top-item">

                                    <a href="#" class="header__top-link">
                                        Tin tức
                                        <i class="header__top-link--icon">
                                            <ion-icon name="arrow-dropdown"></ion-icon>
                                        </i>
                                    </a>
                                    <!-- SubNav News -->
                                    <ul class="subnav-news__list">
                                        <?php
                                            $listCateNews = list_load_all();
                                            foreach($listCateNews as $cateNewsItem) {
                                                extract($cateNewsItem);
                                        ?>
                                        <li class="subnav-news__item">
                                            <a href="?call=newsList&ma_loai_tin=<?php echo $ma_loai ?>" class="subnav-news__link"><?php echo $ten_loai ?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>

                                </li>

                                <li class="header__top-item">
                                    <a href="?call=intro" class="header__top-link">Giới thiệu</a>
                                </li>

                                <li class="header__top-item">
                                    <a href="?call=hotline" class="header__top-link">Liên hệ</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Input & Icon Login -->
                        <div class="header__top-width-search">
                            <form  action="?" id="formSearchHeader" class="form_top">
                                <div class="header__top-search">
                                    <input type="text" name="keyword" class="header__top-search--control" placeholder="Bắt đầu tìm kiếm...">
                                    <!-- <input type="submit" name="search"  class="header__top-search--box" value> -->
                                    <button class="header__top-search--box">
                                        <i class="header__top-search--icon">
                                            <ion-icon name="search"></ion-icon>
                                        </i>
                                    </button>
                                </div>
                            </form>
                                 <?php   
                                    if(isset($_SESSION['account'])){
                                       extract($_SESSION['account']); 
                                 ?>
                                    
                                 <div class="header__top-login">
                                    <a href="?call=account&updateAcc" class="user__box-link">
                                        <div class="user__box">
                                            <img src="<?php echo $upload_path.$hinh_anh ?>" alt="" class="user__img">
                                            <p class="user__name"><?=$hoten?></p>  
                                        </div>
                                    </a>
                                </div> 
                                 <?php       
                                    }else{
                                 ?>
                            <div class="header__top-login">
                                <a href="?call=login" class="header__top-login--link">
                                    <i class="header__top-login--icon">
                                        <ion-icon name="contacts"></ion-icon>
                                    </i>
                                </a>
                            </div>

                             
                            <?php  }?>
                        </div>

                        <!-- Icon Check Nav Mobile -->
                        <label for="checkNavMobile" class="header__top-mobile--check">
                            <i class="header__top-mobile--icon">
                                <ion-icon name="menu"></ion-icon>
                            </i>
                        </label>
                        <input type="checkbox" name="" id="checkNavMobile" class="header__top-mobile--checkbox">

                        <!-- Menu Mobile -->
                        <nav class="header__top-mobile--nav">
                            <!-- Icon Close -->
                            <label for="checkNavMobile" class="header__top-mobile--nav-label">
                                <i class="header__top-mobile--nav-icon--close">
                                    <ion-icon name="close"></ion-icon>
                                </i>
                            </label>

                            <!-- List -->
                            <ul class="header__top-mobile--list">
                                <li class="header__top-mobile--item">
                                    <div class="header__top-mobile--link">
                                        <label for="checkSubNav" class="header__top-mobile--label">
                                            Du lịch
                                            <i class="header__top-link--icon">
                                                <ion-icon name="arrow-dropdown"></ion-icon>
                                            </i>
                                        </label>
                                        <input type="checkbox" name="" hidden id="checkSubNav" class="sub-nav__mobile-checkbox">
                                        <div class="sub-nav__mobile sub-nav__mobile-tour">
                                            <div class="grid">
                                                <div class="row">
                                                    <?php
                                                        $listLocalSide = list_Side();
                                                        foreach($listLocalSide as $localSideItem) {
                                                            extract($localSideItem);
                                                            $localSideId = $ma_mien
                                                    ?>
                                                    <div class="col m-6">
                                                        <ul class="sub-nav__mobile-list">
                                                            <h5 class="sub-nav__mobile-text--heading"><?php echo $ten_mien ?></h5>
                                                            <?php
                                                                $listLocal =  load_local_by_side($localSideId);
                                                                foreach($listLocal as $localItem) {
                                                                    extract($localItem);
                                                            ?>
                                                            <li class="sub-nav__mobile-item">
                                                                <a href="?call=listTour&ma_dia_diem=<?php echo $ma_diadiem ?>" class="sub-nav__mobile-link">Du lịch Bắc Ninh</a>
                                                            </li>
                                                            <?php } ?>
                                                            <li class="sub-nav__mobile-item">
                                                                <a href="?call=listTour&ma_vung_mien=<?php echo $localSideId ?>" class="subnav-tour__link--text-decoration">Xem thêm</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__top-mobile--item">
                                    <div class="header__top-mobile--link">
                                        <label for="checkSubNav-news" class="header__top-mobile--label">
                                            Tin tức
                                            <i class="header__top-link--icon">
                                                <ion-icon name="arrow-dropdown"></ion-icon>
                                            </i>
                                        </label>
                                        <!-- List -->
                                        <input type="checkbox" name="" hidden id="checkSubNav-news" class="sub-nav__mobile-checkbox-news">
                                        <div class="sub-nav__mobile sub-nav__mobile-news">
                                            <ul class="sub-nav__mobile-list">
                                            <?php
                                                $listCateNews = list_load_all();
                                                foreach($listCateNews as $cateNewsItem) {
                                                    extract($cateNewsItem);
                                            ?>
                                                <li class="sub-nav__mobile-item">
                                                    <a href="?call=newsList&ma_loai_tin=<?php echo $ma_loai ?>" class="sub-nav__mobile-link"><?php echo $ten_loai ?></a>
                                                </li>
                                            <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__top-mobile--item">
                                    <a href="?call=intro" class="header__top-mobile--link">Giới thiệu</a>
                                </li>
                                <li class="header__top-mobile--item">
                                    <a href="?call=hotline" class="header__top-mobile--link">Liên Hệ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <?php
                if (!isset($_GET['call'])) {
                ?>
                    <!-- Background -->
                    <div class="header__background">
                        <img src="./Content/IMG/BG/Backgound.jpg" alt="" class="header__background--img">
                    </div>

                    <!-- Selection -->
                    <div class="header__selection">
                        <div class="grid wide">
                            <!-- Selection Header -->
                            <div class="row header__selection-header">
                                <div class="col l-4 m-4 c-4 header__selection-header--block active">
                                    <div class="header__selection-item">
                                        <i class="header__selection-item--icon">
                                            <ion-icon name="logo-model-s"></ion-icon>
                                        </i>
                                        <p class="header__selection-item--text">Tour Du Lịch</p>
                                    </div>
                                </div>

                                <div class="col l-4 m-4 c-4 header__selection-header--block">
                                    <div class="header__selection-item">
                                        <i class="header__selection-item--icon">
                                            <ion-icon name="clipboard"></ion-icon>
                                        </i>
                                        <p class="header__selection-item--text">Tra Cứu Booking</p>
                                    </div>
                                </div>

                                <div class="col l-4 m-4 c-4 header__selection-header--block">
                                    <div class="header__selection-item">
                                        <i class="header__selection-item--icon">
                                            <ion-icon name="help-circle"></ion-icon>
                                        </i>
                                        <p class="header__selection-item--text">Tại Sao Nên Chọn TOUR VN</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Selection Content -->
                            <div class="row header__selection-content">
                                <!-- Select Local -->
                                <div class="col m-12 conTenTapJS active">
                                    <form action="#" method="post">
                                        <div class="grid">
                                            <div class="row">
                                                <div class="col l-4 m-5 c-6">
                                                    <div class="content__section-local">
                                                        <i class="content__section-local--icon">
                                                            <ion-icon name="pin"></ion-icon>
                                                        </i>
                                                        <div class="content__section-local--text">
                                                            <span class="content__section-local--text-heading">Điểm đi</span>
                                                            <label for="localStartCheck" id="localStartBox" class="content__section-local--text-local">
                                                                Chọn điểm đi
                                                            </label>
                                                            <input type="text" hidden id="loCalValueStart">
                                                            <input type="checkbox" hidden name="" id="localStartCheck" class="content__section-local--start-Check">
                                                            <ul id="loCalListStarJS" class="content__section-local--list content__section-local--list-start">
                                                                <li class="content__section-local--item">
                                                                    <label for="localStartCheck" class="content__section-local--link">Cần Thơ</label>
                                                                </li>
                                                                <li class="content__section-local--item">
                                                                    <label for="localStartCheck" class="content__section-local--link">Đà Nẵng</label>
                                                                </li>
                                                                <li class="content__section-local--item">
                                                                    <label for="localStartCheck" class="content__section-local--link">Hà Nội</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col l-1 m-0 c-0">
                                                    <div class="content__section-icon--item">
                                                        <i class="content__section-icon">
                                                            <ion-icon name="shuffle"></ion-icon>
                                                        </i>
                                                    </div>
                                                </div>

                                                <div class="col l-4 m-5 c-6">
                                                    <div class="content__section-local">
                                                        <i class="content__section-local--icon">
                                                            <ion-icon name="navigate"></ion-icon>
                                                        </i>
                                                        <div class="content__section-local--text">
                                                            <span class="content__section-local--text-heading">Điểm đến</span>
                                                            <label for="localEndCheck" id="localEndBox" class="content__section-local--text-local">
                                                                Chọn điểm đến
                                                            </label>
                                                            <input type="text" hidden id="loCalValueEnd">
                                                            <input type="checkbox" hidden name="" id="localEndCheck" class="content__section-local--end-Check">
                                                            <ul id="loCalListEndJS" class="content__section-local--list content__section-local--list-end">
                                                                <li class="content__section-local--item">
                                                                    <label for="localEndCheck" class="content__section-local--link">Cần Thơ</label>
                                                                </li>
                                                                <li class="content__section-local--item">
                                                                    <label for="localEndCheck" class="content__section-local--link">Đà Nẵng</label>
                                                                </li>
                                                                <li class="content__section-local--item">
                                                                    <label for="localEndCheck" class="content__section-local--link">Hà Nội</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col l-3 m-2 c-12">
                                                    <!-- <div class="content__section-local"> -->
                                                    <div class="content__section-btn--block">
                                                        <button class="btn content__section-btn--item">
                                                            <i class="content__section-btn--icon">
                                                                <ion-icon name="send"></ion-icon>
                                                            </i>
                                                        </button>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <!-- Find Info Booking -->
                                <div class="col m-12 c-12 conTenTapJS">
                                    <form action="">
                                        <div class="grid">
                                            <div class="row">
                                                <!-- Input find -->
                                                <div class="col l-9 m-9 c-9 mt-8-mb">
                                                    <div class="content__section-find">
                                                        <input type="text" class="content__section-input--control" placeholder="Nhập số Booking của quý khách">
                                                    </div>
                                                </div>
                                                <!-- Input Btn -->
                                                <div class="col l-3 m-3 c-3 mt-8-mb">
                                                    <div class="content__section-btn--block">
                                                        <button class="btn content__section-btn--item content__section-btn--mini">
                                                            <i class="content__section-btn--icon">
                                                                <ion-icon name="send"></ion-icon>
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>

                                <!-- Introduce The Web -->
                                <div class="col m-12 c-12 conTenTapJS">
                                    <div class="grid mt-8-tpl">
                                        <div class="row">
                                            <div class="col l-3 m-3 c-6 mt-8-mb">
                                                <div class="content__section-intro">
                                                    <img src="./Content/IMG/Icon/service.png" alt="" class="content__section-intro--img">
                                                    <p class="content__section-intro--text-heading">Hỗ Trợ</p>
                                                    <span class="content__section-intro--text-sub-heaing">
                                                        Hệ thống tư vấn hỗ trợ 27/7, cung cấp dịch vụ tốt nhất cho khách hàng
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col l-3 m-3 c-6 mt-8-mb">
                                                <div class="content__section-intro">
                                                    <img src="./Content/IMG/Icon/kindof.png" alt="" class="content__section-intro--img">
                                                    <p class="content__section-intro--text-heading">Dịch Vụ</p>
                                                    <span class="content__section-intro--text-sub-heaing">
                                                        Đa dạng, chất lượng. Đạt chất lượng tốt nhất cho khách hàng
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col l-3 m-3 c-6 mt-8-mb">
                                                <div class="content__section-intro">
                                                    <img src="./Content/IMG/Icon/inter.png" alt="" class="content__section-intro--img">
                                                    <p class="content__section-intro--text-heading">Mạng Bán Tour</p>
                                                    <span class="content__section-intro--text-sub-heaing">
                                                        Đầu tiên tại Việt Nam, ứng dụng công nghệ mới nhất
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col l-3 m-3 c-6 mt-8-mb ">
                                                <div class="content__section-intro">
                                                    <img src="./Content/IMG/Icon/savemoney.png" alt="" class="content__section-intro--img">
                                                    <p class="content__section-intro--text-heading">Giá Cả</p>
                                                    <span class="content__section-intro--text-sub-heaing">
                                                        Luôn có mức giá tốt nhất, bảo đảm giá tốt
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>

            </div>
        </header>