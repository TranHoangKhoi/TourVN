<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">

            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách tour du lịch</h3>
                </div>
                <div class="content__tap-main">
                    <div class="table__control">
                        <form action="" method="post" class="table__control-group">
                            <div class="filter__category">
                                <select name="selectTourCate" id="" class="filter__category-select">
                                    <option value="">Lọc theo loại tour</option>
                                    <?php $tourcateList = load_all_tour(); 
                                        foreach($tourcateList as $tourcateItem) {
                                            extract($tourcateItem);
                                    ?>
                                    <option value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span>Hoặc tìm theo</span>
                            <div class="filter__id-tour">
                                <input type="text" name="tourID" class="filter__id-tour--input" placeholder="Nhập mã tour...">
                            </div>
                            
                            <button name="findTourItem" class="btn filter__tour--btn">Tìm</button>
                        </form>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-0-5">STT</th>
                                <th class="tbl-0-5">Mã tour</th>
                                <th class="tbl-2">Tiêu đề</th>
                                <th class="tbl-1">Loại tour</th>
                                <th class="tbl-1">Số lượng ngày</th>
                                <th class="tbl-1">Ngày khởi hành</th>
                                <th class="tbl-1">Giờ khởi hành</th>
                                <th class="tbl-1">Nơi tập trung</th>
                                <th class="tbl-1">Giá trẻ em</th>
                                <th class="tbl-1">Giá người lớn</th>
                                <th class="tbl-1">Khuyến mãi</th>
                                <th class="tbl-0-5">Thao tác</th>
                                <th class="tbl-0-5">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($list_tour as $tourItem){
                                    extract($tourItem);
                            ?>
                            <tr>
                                <td><?php echo ++$starItem ?></td>
                                <td><?php echo $ma_tour ?></td>
                                <td>
                                    <div class="tbl__desc-box text-left">
                                        <?php echo $tieu_de ?>
                                    </div>
                                </td>
                                    <?php
                                        $tourCateOne = load_one_tour($loai_tour);
                                        extract($tourCateOne);
                                    ?>
                                <td><?php echo $ten_loai ?></td>
                                <td><?php echo $goi_ngay ?></td>
                                <td><?php echo $ngay_khoihanh ?></td>
                                <td><?php echo $gio_khoihanh ?></td>
                                <td><?php echo $noi_tap_trung ?></td>
                                <td><?php echo number_format($gia_treem) ?>đ</td>
                                <td><?php echo number_format($gia_nguoilon) ?>đ</td>
                                <td><?php echo number_format($khuyen_mai)?>%</td>
                                <td>
                                    <a href="?ql=tourItem&updatetour&ma_tour=<?php echo $ma_tour ?>" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="?ql=tourItem&listtour&deteletour&ma_tour=<?php echo $ma_tour ?>" class="btn btn__tbl">Xóa</a>
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
                            <a href="index.php?ql=tourItem&listtour&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=tourItem&listtour&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=tourItem&listtour&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=tourItem&listtour&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>


        </div>
    </main>