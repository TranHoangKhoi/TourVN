<?php
if (is_array($list_one)) {
    extract($list_one);
}
?>

<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Cập nhật danh mục tin tức</h3>
            </div>
            <div class="content__tap-main">
                <form action="" class="form-box" method="POST">
                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryName" class="form-label">Tên danh mục</label>
                            <input type="text" required id="categoryName" name="categoryName" class="input-control" placeholder="VD: Cẩm nang du lịch" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-form" name="capnhat" value="Cập nhật">
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