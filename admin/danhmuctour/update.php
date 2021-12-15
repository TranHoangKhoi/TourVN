<?php
    if (is_array($cate_item)) {
        extract($cate_item);
        $hinh = $img_path . $hinh_anh; 
    }
?>
<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Cập nhật danh mục tour</h3>
            </div>
            <div class="content__tap-main">
                <form action="" method="POST" enctype="multipart/form-data" class="form-box">
                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryName" class="form-label">Tên danh mục</label>
                            <input type="text" required id="categoryName" name="categoryNameUD" class="input-control" placeholder="VD: Tour biển đảo" value="<?php echo $ten_loai ?>">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourCateImg" class="form-label">Hình ảnh</label>
                            <label for="tourCateImg" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện danh mục</label>
                            <div class="img__block">
                                <img src="<?php echo $hinh ?>" alt="" class="img__tbl">
                                <input type="file" id="tourCateImg" name="tourCateImgUD" class="input-control-img" value="">
                            </div>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryDesc" class="form-label">Mô tả</label>
                            <textarea name="categoryDescUD" required id="categoryDesc" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả" ><?php echo $mota?></textarea>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <button name="updateCate" class="btn btn-form">Cập nhật</button>
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