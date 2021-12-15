<!-- Login & Registration -->
        <main>
            <!-- Register & Login -->
            <div class="register__login">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-12">
                            <div class="form__cart-block">
                                <div class="form__cart-list">
                                    <div class="form__text-heading">
                                        <h5>Chào mừng bạn đã đến với</h5>
                                        <h1>TourVN</h1>
                                    </div>
    
                                    <div class="form__cart-body">
                                        <div class="form__cart-tap">
                                            <span class="res__btn JS-Form-Tap active">Đăng nhập</span>
                                            <span class="log__btn JS-Form-Tap ">Đăng ký</span>
                                        </div>

                                        <!-- Login -->
                                        <form action="?call=login" class="form__cart-control JS-Form-Control active" method="POST" id="formLogin">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="emailLG" class="form-label">Email</label>
                                                    <input type="email" id="emailLG" name="emailLG" class="input-control" placeholder="VD: teo@gamil.com">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="matkhauLG" class="form-label">Mật khẩu</label>
                                                    <input type="password" id="matkhauLG" name="matkhauLG" class="input-control" placeholder="VD: teo@gamil.com">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-group mt-32">
                                                <!-- <button class="btn btn__form">
                                                    Đăng nhập
                                                    <i class="btn__form-icon"><ion-icon name="log-in"></ion-icon></i>
                                                </button> -->
                                                <input type="submit" name="Log_in" class="btn btn__form" value="Đăng Nhập">
                                            </div>
                                        </form>

                                        <!-- Register -->
                                        <form action="?call=login" class="form__cart-control JS-Form-Control" method="POST" id="formRegister" >
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="resUserName" class="form-label">Họ và tên</label>
                                                    <input type="text" id="resUserName" name="hoten" class="input-control" placeholder="VD: Trần Văn Tèo">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="resCMND" class="form-label">CMND/CCCD</label>
                                                    <input type="number" id="resCMND" name="cccd" class="input-control" placeholder="VD: 0123654892365">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="resPhone" class="form-label">Số điện thoại</label>
                                                    <input type="number" id="resPhone" name="sdt" class="input-control" placeholder="VD: 0939123123">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <label for="" class="form-label">Tỉnh / TP</label>
                                                            <select name="tp" id="ressCity" class="input-control provinceAcc">
                                                                <option value="">Tỉnh/TP</option>
                                                                <?php 
                                                                $listProvince = load_all_province(); 
                                                                foreach($listProvince as $province) {    
                                                                    extract($province);
                                                                ?>
                                                                    <option value="<?php echo $id ?>"><?php echo $_name ?></option>
                                                                <?php } ?>
                                                            </select>
                                                    </div>
                                                    <span class="test-masage"></span>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <label for="" class="form-label">Quận / Huyện</label>
                                                            <select name="quan" id="ressDistrict" class="input-control districtAcc">
                                                                <option value="">Quận / Huyện</option>
                                                            </select>
                                                    </div>
                                                    <span class="test-masage"></span>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <label for="" class="form-label">Phường / Xã</label>
                                                            <select name="phuong" id="ressWard" class="input-control wardAcc">
                                                                <option value="">Phường / Xã</option>
                                                            </select>
                                                    </div>
                                                    <span class="test-masage"></span>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <label for="" class="form-label">Địa chỉ cụ thể</label>
                                                        <input name="address" id="ressAdress" type="text"  class="input-control" placeholder="VD: 271 / Nguyễn Văn Linh">
                                                    </div>
                                                    <span class="test-masage"></span>
                                                </div>


                                            </div>

                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="resEmail" class="form-label">Email</label>
                                                    <input type="email" id="resEmail" name="email" class="input-control" placeholder="VD: teo@gamil.com">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="resPass" class="form-label">Mật khẩu</label>
                                                    <input type="password" id="resPass" name="matkhau" class="input-control" placeholder="VD: teo@gamil.com">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-field">
                                                    <label for="resPassConFirm" class="form-label">Nhập lại mật khẩu</label>
                                                    <input type="password" id="resPassConFirm" name="resPassConFirm" class="input-control" placeholder="VD: teo@gamil.com">
                                                </div>
                                                <span class="test-masage"></span>
                                            </div>

                                            <div class="form-group mt-32">
                                                <!-- <button name="register" class="btn btn__form">
                                                    Đăng ký ngay
                                                    <i class="btn__form-icon"><ion-icon name="create"></ion-icon></i>
                                                </button> -->
                                                <input type="submit" name="register" class="btn btn__form" value="Đăng Ký">
                                            </div>
                                        </form>
                                        
                        <?php
                            if(isset($mess) && $mess != '') {
                        ?>
                        <div class="mess-form success" style="color:green;">
                            <span>
                                <i><ion-icon name="checkbox-outline"></ion-icon></i>
                                <?php echo $mess?>
                            </span>
                        </div>
                        <?php } ?>

                        <?php
                            if(isset($mess_fail) && $mess_fail != '') {
                        ?>
                        <div class="mess-form success" style="color:red;">
                            <span>
                                <i><ion-icon name="checkbox-outline"></ion-icon></i>
                                <?php echo $mess_fail?>
                            </span>
                        </div>
                        <?php } ?>
                        <?php
                            if(isset($mess_success) && $mess_success != '') {
                        ?>
                        <div class="mess-form success" style="color:green;">
                            <span>
                                <i><ion-icon name="checkbox-outline"></ion-icon></i>
                                <?php echo $mess_success?>
                            </span>
                        </div>
                        <?php } ?>
                       



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>