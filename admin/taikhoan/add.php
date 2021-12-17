<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">

            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Thêm mới tài khoản admin</h3>
                </div>
                <div class="content__tap-main">
                    <form action="?ql=user&add" method="POST" class="form-box" enctype="multipart/form-data" id="formAddAccAdmin">
                        <div class="form-group">
                                <div class="form-field">
                                    <label for="nameAdmin" class="form-label">Họ và tên</label>
                                    <input type="text" id="nameAdmin" name="hoten" class="input-control" placeholder="VD: Trần Văn A">
                                </div>
                                <span class="test-masage"></span>
                            </div>                            

                            <div class="form-group">
                                <div class="form-field">
                                    <label for="adminCCCD" class="form-label">CCCD/CMND</label>
                                    <input type="number" id="adminCCCD" name="adminUserName" class="input-control" placeholder="VD:0123456789">
                                </div>
                                <span class="test-masage"></span>
                            </div>

                            <div class="form-group">
                                <div class="form-field">
                                    <label for="adminPhone" class="form-label">Số điện thoại</label>
                                    <input type="number" id="adminPhone" name="sdt" class="input-control" placeholder="VD: 0971123123">
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
                                <div class="form-field">
                                    <label for="adminEmail" class="form-label">Email</label>
                                    <input type="email" id="adminEmail" name="email" class="input-control" placeholder="VD: khoi189@gmail.com">
                                </div>
                                <span class="test-masage"></span>
                            </div>

                            <div class="form-group">
                                <div class="form-field">
                                    <label for="adminPass" class="form-label">Mật khẩu</label>
                                    <input type="password" id="adminPass" name="matkhau" class="input-control" placeholder="VD: AZ123456">
                                </div>
                                <span class="test-masage"></span>
                            </div>

                            <div class="form-group">
                                <div class="form-field">
                                    <label for="adminPassConFrim" class="form-label">Nhập lại mật khẩu</label>
                                    <input type="password" id="adminPassConFrim" class="input-control" placeholder="VD: AZ123456">
                                </div>
                                <span class="test-masage"></span>
                            </div>

                            <div class="form-group">
                                <button name="add_admin" class="btn btn-form">Thêm</button>
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