<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách tin tức</h3>
                </div>
                
                <div class="content__tap-main">
                    <div class="table__control">
                        <?php 
                            $listNewsCate = list_load_all();
                            extract($listNewsCate);
                        ?>
                        <form action="" method="post" class="table__control-group">
                            <div class="filter__category">
                                <select name="newsCate" id="" class="filter__category-select">
                                    <option value="0">Lọc theo loại tin</option>
                                    <option value="0">Tất cả tin tức</option>
                                    <?php 
                                        foreach($listNewsCate as $newsCateItem){ 
                                            extract($newsCateItem);
                                    ?>
                                    <option value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <button name="findNews" class="btn filter__tour--btn">Tìm</button>
                        </form>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-0-5">STT</th>
                                <th class="tbl-1">Mã tin</th>
                                <th class="tbl-2">Tiêu đề</th>
                                <th class="tbl-1">loại tin</th>
                                <th class="tbl-1">Người đăng</th>
                                <th class="tbl-2">Nội dung</th>
                                <th class="tbl-1">Ngày đăng</th>
                                <th class="tbl-1">Hình ảnh</th>
                                <th class="tbl-0-5">Thao tác</th>
                                <th class="tbl-0-5">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($list_news as $newsItem) {
                                    extract($newsItem);
                                    $hinh = $img_path . $hinh_anh;
                                    $user =  get_user_by_maTk($ma_taikhoan);
                                    extract($user);
                                    $newCateItem = loadone_loai_tin($ma_loai);
                                    extract($newCateItem);
                                    
                            ?>
                            <tr>
                                <td><?php echo ++$starItem ?></td>
                                <td><?php echo $ma_tin ?></td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            <?php echo $tieu_de ?>
                                        </p>
                                </td>
                                <td><?php echo $ten_loai ?></td>
                                <td class="text-left"><?php echo $hoten ?></td>
                                <td class="text-left">
                                    <div class="tbl__desc-box text-left"> <?php echo $noi_dung ?> </div>
                                </td>
                                <td><?php echo $ngay_dang ?></td>
                                <td class="not-lh">
                                    <img src="<?php echo $hinh ?>" alt="" class="img__tbl">
                                    
                                </td>
                                <td>
                                    <a href="?ql=newsPage&updatenewsPage&ma_tin=<?php echo $ma_tin ?>" class="btn btn__tbl">Sữa</a>
                                </td>
                                <td> 
                                    <a href="index.php?ql=newsPage&listnewsPage&deleteNews&ma_tin=<?php echo $ma_tin ?>" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>
                            <?php } ?>
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
                            <a href="index.php?ql=newsPage&listnewsPage&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=newsPage&listnewsPage&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=newsPage&listnewsPage&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=newsPage&listnewsPage&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>