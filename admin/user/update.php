<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật tài khoản admin</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" class="form-box">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminUserName" class="form-label">Tài khoản</label>
                                <input type="text" id="adminUserName" name="adminUserName" class="input-control" placeholder="VD: admin123123">
                            </div>
                            <span class="test-masage"></span>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminPass" class="form-label">Mật khẩu</label>
                                <input type="password" id="adminPass" name="adminPass" class="input-control" placeholder="VD: AZ123456">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminPass" class="form-label">Họ và tên</label>
                                <input type="password" id="adminPass" name="adminPass" class="input-control" placeholder="VD: Trần Văn A">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminPhone" class="form-label">Số điện thoại</label>
                                <input type="number" id="adminPhone" name="adminPhone" class="input-control" placeholder="VD: 0971123123">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminEmail" class="form-label">Email</label>
                                <input type="email" id="adminEmail" name="adminEmail" class="input-control" placeholder="VD: khoi189@gmail.com">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="adminImg" class="form-label">Hình ảnh</label>
                                <label for="adminImg" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện cho tài khoản</label>
                                <input type="file" id="adminImg" name="adminImg" class="input-control-img">
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