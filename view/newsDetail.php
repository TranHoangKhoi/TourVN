<?php 
    if(is_array($newItem)) {
        extract($newItem);
    }
?>
<!-- NewS Details -->
<main>
            <!-- List Tour Cate -->
            <div class="grid wide">
                <div class="row content__block">
                    <div class="col l-8">
                        <div class="news__content-block">
                            <div class="news__content-heading">
                                <h1><?php echo $tieu_de ?></h1>
                                <div class="news__content-heading--info">
                                <?php $cateItemName =  loadone_loai_tin($ma_loai); ?>
                                    <p><?php echo $cateItemName['ten_loai'] ?></p>
                                    <span>- <?php echo $ngay_dang ?></span>
                                </div>
                            </div>

                            <div class="news__content-body">
                                <div class="news__content-body--details">
                                    <?php echo $noi_dung ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l-4 content__block">
                        <div class="news__new">
                            <h2 class="news__new-heading">Tin mới nhất</h2>
                            <ul class="news__new-list">
                                <?php 
                                    $listNameNews =  load_all_news_limit(); 
                                    foreach($listNameNews as $nameNewsItem) {
                                        extract($nameNewsItem);
                                ?>
                                <li class="news__new-item">
                                    <a href="index.php?call=newsDetails&ma_tin=<?php echo $ma_tin ?>" class="news__new-link"><?php echo $tieu_de ?></a>
                                </li>
                                <?php } ?>
                                <!-- <li class="news__new-item">
                                    <a href="" class="news__new-link">Hành trình du lịch Nhật Bản mùa lá đỏ quyến rũ</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </main>