<?php 
    if(is_array($newsItem)) {
        extract($newsItem);
        $newsCates = $ma_loai;
        $hinh = $img_path . $hinh_anh;
    }
?>
<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật bài viết</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" method="post" enctype="multipart/form-data" class="form-box">

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsCategoryUD" class="form-label">Loại tin tức</label>
                                <select name="newsCategoryUD" required id="newsCategoryUD" class="input-control-select">
                                    <option value="">Chọn loại tin tức</option>
                                    <?php 
                                        $listNewsCate = list_load_all();
                                        foreach($listNewsCate as $newsCateItem){ 
                                            extract($newsCateItem);
                                            if($newsCates == $ma_loai) {
                                    ?>
                                        <option selected value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                    <?php } else { ?>
                                        <option value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsNameUD" class="form-label">Tiêu đề bài viết</label>
                                <input type="text" id="newsNameUD" required name="newsNameUD" class="input-control" value="<?php echo $tieu_de ?>"placeholder="VD: Tháng 11 12 đi du lịch ở đâu? Top 10 điển đến hot cuối năm">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newImage" class="form-label">Hình ảnh</label>
                                <label for="newImage" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện cho bài viết</label>
                                <div class="img__block">
                                    <img src="<?php echo $hinh ?>" alt="" class="img__tbl">
                                    <input type="file" id="newImage" name="newImageUD" class="input-control-img" value="">
                                </div>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsDescUD" class="form-label">Tóm tắt bài viêt</label>
                                <textarea name="newsDescUD" required id="" cols="30" rows="10" class="input-control--textarea"  placeholder="VD: Khi những cơn gió lạnh đầu đông tràn về cũng là lúc du lịch trong nước trở nên sôi động hơn. Khắp nơi mọi trên dãy đất hình chữ S Việt Nam khoác lên mình chiếc áo mới đẹp lạ kỳ. Và nếu bạn vẫn đang băn khoăn tìm kiếm một địa điểm du lịch thú vị vào dịp cuối năm tháng 11 12 này, đừng bỏ lỡ top 10 sau đây nhé!"><?php echo $tom_tat ?></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsContentUD" class="form-label">Nội dung bài Viết</label>
                                <textarea name="newsContentUD" required id="newsContenUD" cols="30" rows="10" class="input-control--textarea" placeholder="Nội dung bài viết"><?php echo $noi_dung ?></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <button name="updateNewBtn" class="btn btn-form">Cập nhật bài viết</button>
                        </div>

                        <?php
                            if(isset($mess) && $mess != '') {
                        ?>
                            <div class="mess-form success">
                                <span>
                                    <i><ion-icon name="checkbox-outline"></ion-icon></i>
                                    <?php echo $mess?>
                                </span>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>


        </div>
    </main>