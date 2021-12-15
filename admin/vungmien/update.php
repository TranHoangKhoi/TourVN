<?php
if (is_array($localSideItem)) {
    extract($localSideItem);
}
?>
<!-- add -->
<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật vùng miền</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" method="post" class="form-box">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localSide" class="form-label">Tên vùng miền</label>
                                <input type="text" required id="localSide" name="localSideUD" class="input-control" placeholder="VD: Miền Nam" value="<?php echo $ten_mien ?>">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localSideDersc" class="form-label">Mô tả</label>
                                <textarea name="localSideDerscUD" required id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Mô tả về vùng miền đó"><?php echo $mota ?></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <button name="updateLocalSide" class="btn btn-form">Cập nhật</button>
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