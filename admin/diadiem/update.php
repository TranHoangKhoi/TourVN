<?php
    if (is_array($localItem)) {
        extract($localItem);
        $hinh = $img_path . $hinh_anh; 
    }
?>
<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật địa điểm đi</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" method="post" enctype="multipart/form-data" class="form-box">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localNameUD" class="form-label">Tên địa điểm đi</label>
                                <input type="text" required id="localNameUD" name="localNameUD" class="input-control" value="<?php echo $ten_diadiem ?>" placeholder="VD: Cần Thơ">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localIDUD" class="form-label">Mã Tỉnh</label>
                                <input type="text" required id="localIDUD" name="localIDUD" class="input-control" value="<?php echo $ma_tinh ?>" placeholder="VD: 65">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localSideUD" class="form-label">Vùng miền</label>
                                <select name="localSideUD" required id="" class="input-control-select">
                                    <option value="">Chọn vùng miền</option>
                                    <?php 
                                        $localtionSide = $ma_mien;
                                        $localSide = list_Side();
                                        foreach ($localSide as $side) {
                                            extract($side);
                                        if($ma_mien == $localtionSide){
                                    ?>
                                    <option selected value="<?php echo $ma_mien?>"><?php echo $ten_mien ?></option>
                                    <?php }else { ?>
                                    <option value="<?php echo $ma_mien?>"><?php echo $ten_mien ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localImageUD" class="form-label">Hình ảnh</label>
                                <label for="localImageUD" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện tour và hình lớn trong tour chi tiết</label>
                                <div class="img__block">
                                <img src="<?php echo $hinh ?>" alt="" class="img__tbl">
                                <input type="file" id="localImageUD" name="localImageUD" class="input-control-img" value="">
                            </div>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localDescUD" class="form-label">Mô tả</label>
                                <textarea name="localDescUD" required id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Mô tả địa điểm đến có gì đặc biệt"><?php echo $mota ?></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localCheckFavarite" class="form-label">Đặc biệt</label>
                                <div class="check-box--group">
                                    <div class="check-box--item">
                                        
                                        <input type="radio" <?php if($dac_biet == 0) echo 'checked' ?> name="localCheckFavariteUD" id="" value="0"> Địa điểm thường
                                    </div>
                                    <div class="check-box--item">
                                        <input type="radio" <?php if($dac_biet == 1) echo 'checked' ?> name="localCheckFavariteUD" id="" value="1"> Địa điểm yêu thích
                                    </div>
                                </div>
                            </div>
                            <span class="test-masage"></span>
                        </div>
                    
                        <div class="form-group">
                            <button name="updateLocal" class="btn btn-form">Thêm</button>
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