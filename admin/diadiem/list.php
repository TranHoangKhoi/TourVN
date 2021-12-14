    <main class="container">
    <?php include'subMenu.php' ?>


        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách các địa điểm</h3>
                    <div class="content__tap-main">
                    <div class="table__control">
                        <form action="?ql=local&listLocal" method="post" class="table__control-group">

                            <div class="filter__id-tour">
                                <input type="text" name="keyword" id="" class="filter__id-tour--input" placeholder="Nhập tên địa điểm...">
                            </div>
                            
                            <input type="submit" value="Tìm"  name="search" class="btn filter__tour--btn" >
                        </form>
                    </div>
                </div>
                
                <div class="content__tap-main">
                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-1">STT</th>
                                <th class="tbl-3">Tên địa điểm</th>
                                <th class="tbl-2">Mã Tỉnh</th>
                                <th class="tbl-2">Vùng miền</th>
                                <th class="tbl-1">Thao tác</th>
                                <th class="tbl-1">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($countList as $localItem) {
                                    extract($localItem);
                                    $localSide = load_data($ma_mien);
                                    extract($localSide);
                            ?>
                            <tr>
                                <td><?php echo ++$starItem ?></td>
                                <td class="text-left"><?php echo $ten_diadiem ?></td>
                                <td><?php echo $ma_tinh ?></td>
                                <td><?php echo $ten_mien ?></td>
                                <td>
                                    <a href="?ql=local&updateLocal&ma_diadiem=<?php echo $ma_diadiem ?>" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="index.php?ql=local&listLocal&deleteLocal&ma_diadiem=<?php echo $ma_diadiem ?>" class="btn btn__tbl">Xóa</a>
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
                            <a href="index.php?ql=local&listLocal&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
        
                        <div class="pagination__num">
                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                <?php if($page == $i) { ?>
                                <a href="index.php?ql=local&listLocal&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                            <?php } else { ?>
                                <a href="index.php?ql=local&listLocal&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                            <?php } 
                                } ?>
                        </div>
                        
                        <?php if($page < $pageNum) { ?>
                        <div class="pagination__next">
                            <a href="index.php?ql=local&listLocal&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>