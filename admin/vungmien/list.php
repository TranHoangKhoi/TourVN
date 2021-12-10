<!-- add -->
<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách vùng miền</h3>
                </div>
                <div class="content__tap-main">
                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-2">STT</th>
                                <th class="tbl-3">Tên vùng miền</th>
                                <th class="tbl-3">Mô tả</th>
                                <th class="tbl-1">Thao tác</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $i = 1;
                            foreach($listLocalSide as $localSideItem) {
                            extract($localSideItem);
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td class="text-left"><?php echo $ten_mien ?></td>
                                <td class="tbl__desc">
                                    <p class="tbl__desc-box text-left">
                                        <?php echo $mota ?>
                                    </p>
                                </td>
                                <td>
                                    <a href="?ql=localSide&updateSide&ma_mien=<?php echo $ma_mien ?>" class="btn btn__tbl">Sửa</a>
                                </td>
                                
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>