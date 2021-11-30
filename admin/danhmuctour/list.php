<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">

        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách danh mục tour</h3>
            </div>
            <div class="content__tap-main">
                <table>
                    <thead>
                        <tr>
                            <th class="tbl-1">STT</th>
                            <th class="tbl-3">Tên danh mục</th>
                            <th class="tbl-1">Hình ảnh</th>
                            <th class="tbl-3">Mô tả</th>
                            <th class="tbl-1">Thao tác</th>
                            <th class="tbl-1">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_category as $category) {
                            extract($category);
                            $hinh = $img_path . $hinh_anh;
                            // if (is_file($hinh)) {
                            //     $anh = "<img src='" .  $hinh . "' class='img__tbl' >";
                            // } else {
                            //     $anh = "Không có hình";
                            // }
                            $delete_cate = "index.php?ql=tourCate&deleteCate&ma_loai=" . $ma_loai;
                            $update_cate = "index.php?ql=tourCate&updateCate&ma_loai=" . $ma_loai;

                        ?>

                           <tr>
                                <td> <?php echo ++$starItem; ?></td>
                                <td class="text-left"> <?php echo $ten_loai ?> </td>
                                <td class="not-lh"> 
                                    <img src="<?php echo $hinh ?>" alt="hinh" class="img__tbl">
                                </td>
                                <td class="tbl__desc">
                                    <p class="tbl__desc-box text-left">
                                        <?php echo $mota ?>
                                    </p>
                                </td>
                              
                                <td>
                                    <a href="index.php?ql=tourCate&updateCate&ma_loai=<?php echo $ma_loai ?>" class="btn btn__tbl">Sữa</a>
                                </td>
                                <td>
                                    <a href="index.php?ql=tourCate&listCate&deleteCate&ma_loai=<?php echo $ma_loai ?>" class="btn btn__tbl">Xóa</a>
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
                            <a href="index.php?ql=tourCate&listCate&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=tourCate&listCate&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=tourCate&listCate&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=tourCate&listCate&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
            </div>
        </div>


    </div>




</main>