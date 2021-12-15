<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Thêm mới danh mục tin tức</h3>
            </div>
            <div class="content__tap-main">
                <form action="index.php?ql=newsCate&add" class="form-box" method="POST">
                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryName" class="form-label">Tên danh mục</label>
                            <input type="text" required id="categoryName" name="categoryName" class="input-control" placeholder="VD: Cẩm nang du lịch">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-form" name="themmoi" value="Thêm">
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