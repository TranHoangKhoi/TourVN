<?php

?>

<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Cập nhật danh mục tour</h3>
            </div>
            <div class="content__tap-main">
                <form action="" class="form-box">
                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryName" class="form-label">Tên danh mục</label>
                            <input type="text" id="categoryName" name="categoryName" class="input-control" placeholder="VD: Tour biển đảo" value="">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="localiMage2" class="form-label">Hình ảnh</label>
                            <label for="localiMage2" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện danh mục</label>
                            <input type="file" id="localiMage2" name="localiMage2" class="input-control-img" value="">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryDesc" class="form-label">Mô tả</label>
                            <textarea name="categoryDesc" id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Mô tả" value=""></textarea>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-form">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>