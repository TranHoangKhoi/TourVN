<!-- New List -->
<main>
    <div class="grid wide">
        <div class="row content__block news__heading">
            <!-- News Heading -->
            <?php 
                $listCate = list_load_all();
                foreach($listCate as $cateItem) {
                    extract($cateItem);
            ?>
            <div class="col l-4">
                <div class="news__heading-item">
                    <a href="index.php?call=newsList&ma_loai_tin=<?php echo $ma_loai ?>" class="news__heading-item--name
                        <?php if($ma_loai == $_GET['ma_loai_tin']) echo 'active' ?>
                    "><?php echo $ten_loai ?></a>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col l-4">
                <div class="news__heading-item">
                    <a href="#" class="news__heading-item--name active">Cẩm Nang du lịch</a>
                </div>
            </div> -->
        </div>

        <div class="row">
            <?php 
                foreach ($listNews as $newsItem) {
                    extract($newsItem);
            ?>
            <div class="col l-12">
                <div class="news__content-item">
                    <div class="gird">
                        <div class="row">
                            <div class="col l-4">
                                <a href="index.php?call=newsDetails&ma_tin=<?php echo $ma_tin ?>" class="news__content-item--image">
                                    <img src="<?php echo $upload_path.$hinh_anh?>" alt="" class="news__content-item--img">
                                </a>
                            </div>

                            <div class="col l-8">
                                <div class="news__content-item--info">
                                    <a href="index.php?call=newsDetails&ma_tin=<?php echo $ma_tin ?>" class="news__content-item--info-name">
                                        <h1><?php echo $tieu_de ?></h1>
                                    </a>

                                    <div class="news__content-item--info-sub">
                                        <?php $cateItemName =  loadone_loai_tin($_GET['ma_loai_tin']); ?>
                                        <span class="news__content-item--sub-category"><?php echo $cateItemName['ten_loai'] ?></span>
                                        <p class="news__content-item--sub-date">- <?php echo $ngay_dang ?></p>
                                    </div>

                                    <div class="news__content-item--info-overview">
                                        <p>
                                            <?php echo $tom_tat ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col l-12">
                <div class="news__content-item">
                    <div class="gird">
                        <div class="row">
                            <div class="col l-4">
                                <a href="./newsDeatails.html" class="news__content-item--image">
                                    <img src="../Content/IMG/Tour/baclieu.jpg" alt="" class="news__content-item--img">
                                </a>
                            </div>

                            <div class="col l-8">
                                <div class="news__content-item--info">
                                    <a href="./newsDeatails.html" class="news__content-item--info-name">
                                        <h1>Du lịch Tây Bắc tháng 11 nên đi đâu và trải nghiệm gì?</h1>
                                    </a>

                                    <div class="news__content-item--info-sub">
                                        <span class="news__content-item--sub-category">Cẩm nang du lịch</span>
                                        <p class="news__content-item--sub-date">- 17/11/2021</p>
                                    </div>

                                    <div class="news__content-item--info-overview">
                                        <p>
                                            Tháng 11, những ngày gió đông bắt đầu chạm ngõ, có lẽ ngoài Hà Nội thì các điểm đến
                                            của du lịch Tây Bắc là điều đầu tiên khiến những “đôi chân xê dịch” nghĩ đến đầu tiên.
                                            Và vẻ đẹp của Mộc Châu mùa hoa cải, biển mây ở Tà Xùa, Sapa hay vườn hoa mai anh đào Điện Biên… luôn làm người ta háo hức.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

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
                        <a href="index.php?call=newsList&ma_loai_tin=<?php echo $ma_loai ?>&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                            <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                        </a>
                    </div>
                    <?php } ?>
                        
                    <div class="pagination__num">
                        <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                            <?php if($page == $i) { ?>
                            <a href="index.php?call=newsList&ma_loai_tin=<?php echo $ma_loai ?>&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                        <?php } else { ?>
                            <a href="index.php?call=newsList&ma_loai_tin=<?php echo $ma_loai ?>&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                        <?php } 
                            } ?>
                    </div>
                                        
                    <?php if($page < $pageNum) { ?>
                    <div class="pagination__next">
                        <a href="index.php?call=newsList&ma_loai_tin=<?php echo $ma_loai ?>&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                            <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                        </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</main>