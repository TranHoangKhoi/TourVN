
<main class="container">
        <?php include 'subMenu.php' ?>
        <?php
            if(is_array($load_account)){
                extract($load_account);
                $hinh = $img_path . $hinh_anh;
            }
            ?>
        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật tài khoản admin</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" method="POST" enctype="multipart/form-data" class="form-box">
                        
                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminPass" class="form-label">Họ và tên</label>
                                <input type="text" required id="adminPass" name="hoten" value="<?php echo $hoten?>" class="input-control" placeholder="VD: Trần Văn A">
                            </div>
                            <span class="test-masage"></span>
                        </div> 

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminPass" class="form-label">Mật khẩu</label>
                                <input type="password" required id="adminPass" name="matkhau" value="<?php echo $matkhau?>" class="input-control" placeholder="VD: AZ123456">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminPass" class="form-label">CCCD/CMND</label>
                                <input type="number" required id="adminPass" name="cccd" value="<?php echo $cccd?>" class="input-control" placeholder="VD: Trần Văn A">
                            </div>
                            <span class="test-masage"></span>
                        </div> 

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminPhone" class="form-label">Số điện thoại</label>
                                <input type="number" required id="adminPhone" name="sdt" value="<?php echo $sdt?>" class="input-control" placeholder="VD: 0971123123">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminEmail" class="form-label">Email</label>
                                <input type="email" required id="adminEmail" name="email" value="<?php echo $email?>" class="input-control" placeholder="VD: khoi189@gmail.com">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminImg" class="form-label">Hình ảnh</label>
                                <label for="adminImg" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện cho tài khoản</label>
                                <input type="file" id="adminImg" name="hinh_anh" class="input-control-img">
                                
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                        <input type="hidden" name="ma_taikhoan" value="<?=$ma_taikhoan?>">
                        <input type="submit" name="update_admin" class="btn btn__form" value="Cập Nhật" >
                        </div>
                    </form>
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
                </div>
            </div>
        </div>


    </main>