    <main class="container">
        <?php include'subMenu.php'?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Thêm mới địa điểm đi</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" method="post" enctype="multipart/form-data" class="form-box">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localName" class="form-label">Tên địa điểm</label>
                                <input type="text" required id="localName" name="localName" class="input-control" placeholder="VD: Cần Thơ">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localID" class="form-label">Mã Tỉnh</label>
                                <input type="text" required id="localID" name="localID" class="input-control" placeholder="VD: 65">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localSide" class="form-label">Vùng miền</label>
                                <select name="localSide" required id="" class="input-control-select">
                                    <option value="">Chọn vùng miền</option>
                                    <?php 
                                        $localSide = list_Side();
                                        foreach ($localSide as $side) {
                                            extract($side);
                                    ?>
                                    <option value="<?php echo $ma_mien?>"><?php echo $ten_mien ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage"  class="form-label">Hình ảnh</label>
                                <label for="localiMage" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện tour và hình lớn trong tour chi tiết</label>
                                <input type="file" required id="localiMage" name="localiMage" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localDesc" class="form-label">Mô tả</label>
                                <textarea name="localDesc" required id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Mô tả địa điểm đến có gì đặc biệt"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localCheckFavarite" class="form-label">Đặc biệt</label>
                                <div class="check-box--group">
                                    <div class="check-box--item">
                                        <input type="radio" required checked name="localCheckFavarite" id="" value="0"> Địa điểm thường
                                    </div>
                                    <div class="check-box--item">
                                        <input type="radio" required name="localCheckFavarite" id="" value="1"> Địa điểm yêu thích
                                    </div>
                                </div>
                            </div>
                            <span class="test-masage"></span>
                        </div>
                    
                        <div class="form-group">
                            <button name="addLocal" class="btn btn-form">Thêm</button>
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