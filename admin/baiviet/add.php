<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active JS-tap--item">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Thêm mới bài viết</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" method="post" enctype="multipart/form-data" class="form-box">
                            <?php
                                $listNewsCate = list_load_all();
                            ?>
                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsCategory" class="form-label">Loại tin tức</label>
                                <select name="newsCategory" required id="newsCategory" class="input-control-select">
                                    <option value="">Chọn loại tin tức</option>
                                    <?php 
                                        foreach($listNewsCate as $newsCateItem){ 
                                            extract($newsCateItem);
                                    ?>
                                    <option value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsImg" class="form-label">Hình ảnh</label>
                                <label for="newsImg" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện của bài viết</label>
                                <input type="file" required id="newsImg" name="newsImage" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsName" class="form-label">Tiêu đề bài viết</label>
                                <input type="text" required id="newsName" name="newsName" class="input-control" placeholder="VD: Tháng 11 12 đi du lịch ở đâu? Top 10 điển đến hot cuối năm">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsDesc" class="form-label">Tóm tắt bài viêt</label>
                                <textarea name="newsDesc" required id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="VD: Khi những cơn gió lạnh đầu đông tràn về cũng là lúc du lịch trong nước trở nên sôi động hơn. Khắp nơi mọi trên dãy đất hình chữ S Việt Nam khoác lên mình chiếc áo mới đẹp lạ kỳ. Và nếu bạn vẫn đang băn khoăn tìm kiếm một địa điểm du lịch thú vị vào dịp cuối năm tháng 11 12 này, đừng bỏ lỡ top 10 sau đây nhé!"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsContent" class="form-label">Nội dung bài Viết</label>
                                <textarea name="newsContent" required id="contentNews" cols="30" rows="10" class="input-control--textarea" placeholder="Nội dung bài viết"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <button name="addNews" class="btn btn-form">Thêm bài viết</button>
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