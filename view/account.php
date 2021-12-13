<?php
    if(isset($_SESSION['account'])) {
        extract($_SESSION['account']);
    ?>
  

<main>
            <!-- List Tour Cate -->
            <div class="grid wide">
                <div class="row">
                    <!-- List Tour -->
                    <div class="col l-12 m-12 c-12">  
                        <div class="tour__block">
                            <!-- Text heading -->
                            <div class="content__text-heading">
                                <h1 class="content__text-heading--item">Tài khoản khách hàng</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col l-3">
                        <div class="account__cate">
                            <div class="account__cate-item">
                                <a href="?call=account&updateAcc" class="account__cate-item-choose 
                                    <?php if(isset($_GET['updateAcc'])) echo 'active'?>
                                ">
                                    <i class="account__cate-item-icon"><ion-icon name="build"></ion-icon></i>
                                    Cập nhật tài khoản
                                </a>
                            </div>

                            <div class="account__cate-item">
                                <a href="?call=account&updatePass" class="account__cate-item-choose
                                    <?php if(isset($_GET['updatePass'])) echo 'active'?>
                                ">
                                    <i class="account__cate-item-icon"><ion-icon name="refresh"></ion-icon></i>
                                    Đổi mật khẩu
                                </a>
                            </div>

                            <div class="account__cate-item">
                                <a href="?call=account&ticket" class="account__cate-item-choose 
                                    <?php if(isset($_GET['ticket'])) echo 'active'?>
                                ">
                                    <i class="account__cate-item-icon"><ion-icon name="bookmarks"></ion-icon></i>
                                    Các vé đã đặt
                                </a>
                            </div>
                            <?php
                                if($vai_tro==1){
                            ?>
                         
                            <div class="account__cate-item">
                                <a href="./admin/index.php" class="account__cate-item-choose">
                                    <i class="account__cate-item-icon"><ion-icon name="finger-print"></ion-icon></ion-icon></i>
                                     Quản lý ADMIN
                                </a>
                                
                            </div>
                            <?php
                                }
                            ?>
                            <div class="account__cate-item">
                                <a href="?call=account&log_out" class="account__cate-item-choose check-out">
                                    <i class="account__cate-item-icon"><ion-icon name="power"></ion-icon></i>
                                    Đăng xuất
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                     } 
                    ?>
                    <div class="col l-9 ">
                        <div class="account__right 
                            <?php if(isset($_GET['updateAcc'])) echo 'active'?>
                        ">
                            <form action="?call=account" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <div class="form-field">
                                        <label for="resUserName" class="form-label">Họ và tên</label>
                                        <input type="text" id="resUserName" name="hoten" class="input-control" value="<?php echo $hoten ?>" placeholder="VD: Trần Văn Tèo">
                                    </div>
                                    <span class="test-masage"></span>
                                </div>

                                <div class="form-group">
                                    <div class="form-field">
                                        <label for="resCMND" class="form-label">CMND</label>
                                        <input type="number" id="resCMND" name="cccd" class="input-control" value="<?php echo $cccd ?>" placeholder="VD: 0123654892365">
                                    </div>
                                    <span class="test-masage"></span>
                                </div>

                                <div class="form-group">
                                    <div class="form-field">
                                        <label for="resPhone" class="form-label">Số điện thoại</label>
                                        <input type="number" id="resPhone" name="sdt" class="input-control" value="<?php echo $sdt ?>" placeholder="VD: 0939123123">
                                    </div>
                                    <span class="test-masage"></span>
                                </div>

                                <!-- <div class="form-group">
                                    <div class="form-field">
                                        <label for="resEmail" class="form-label">Email</label>
                                        <input type="email" id="resEmail" name="email" class="input-control" value="<?php echo $email ?>" placeholder="VD: teo@gamil.com">
                                    </div>
                                    <span class="test-masage"></span>
                                </div> -->

                                <div class="form-group">
                                    <div class="form-field">
                                        <label for="newImage" class="form-label">Hình ảnh</label>
                                        <div class="img__body">
                                            <img src="<?php echo $upload_path.$hinh_anh ?>" alt="" class="img__item">
                                            <input type="file" id="newImage" name="hinh_anh" class="input-control-img" value="">
                                        </div>
                                    </div>
                                    <span class="test-masage"></span>
                                </div>

                                <div class="form-row form_flex">
                                    <div class="form-group w-20">
                                        <div class="form-field">
                                            <label for="" class="form-label">Tỉnh / TP</label>
                                                <select name="tp" id="" class="input-control provinceAcc">
                                                    <option value="">Tỉnh/TP</option>
                                                    <?php 
                                                    $listProvince = load_all_province(); 
                                                    foreach($listProvince as $province) {    
                                                        extract($province);
                                                        if($id == $tp) {
                                                    ?>
                                                        <option selected value="<?php echo $id ?>"><?php echo $_name ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $id ?>"><?php echo $_name ?></option>
                                                    <?php } } ?>
                                                </select>
                                        </div>
                                        <span class="test-masage"></span>
                                    </div>

                                    <div class="form-group w-20">
                                        <div class="form-field">
                                            <label for="" class="form-label">Quận / Huyện</label>
                                            <input type="text" hidden value="<?php echo $quan ?>" class="idDis">
                                                <select name="quan" id="" class="input-control districtAcc">
                                                </select>
                                        </div>
                                        <span class="test-masage"></span>
                                    </div>

                                    <div class="form-group w-20">
                                        <div class="form-field">
                                            <label for="" class="form-label">Phường / Xã</label>
                                            <input type="text" hidden value="<?php echo $phuong ?>" class="idWard">
                                                <select name="phuong" id="" class="input-control wardAcc">
                                                </select>
                                        </div>
                                        <span class="test-masage"></span>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-field">
                                            <label for="" class="form-label">Địa chỉ cụ thể</label>
                                            <input type="text" name="dia_chi_cu_the" class="input-control" value="<?php echo $dia_chi_cu_the ?>" placeholder="VD: 271 / Nguyễn Văn Linh">
                                        </div>
                                        <span class="test-masage"></span>
                                    </div>

                                </div>

                                <div class="form-group mt-32">
                                    <input type="hidden" name="ma_taikhoan" value="<?=$ma_taikhoan?>">
                                    <!-- <button class="btn btn__form" name="update">
                                        Cập nhật
                                        <i class="btn__form-icon"><ion-icon name="create"></ion-icon></i>
                                    </button> -->
                                    <input type="submit" name="update" class="btn btn__form" value="Cập Nhật" >
                                    
                                </div>
                            </form>
                        </div>
                        
                        <div class="account__right
                            <?php if(isset($_GET['updatePass'])) echo 'active'?>
                        ">
                            <form action="" method="post">
                                <div class="form-group">
                                    <div class="form-field">
                                        <label for="passOld" class="form-label">Mật khẩu cũ</label>
                                        <input type="password" id="passOld" name="passOld" class="input-control" placeholder="Nhập mật khẩu">
                                    </div>
                                    <span class="test-masage"></span>
                                </div>

                                <div class="form-group">
                                    <div class="form-field">
                                        <label for="passNew" class="form-label">Mật khẩu mới</label>
                                        <input type="password" id="passNew" name="passNew" class="input-control" placeholder="Nhập mật khẩu mới">
                                    </div>
                                    <span class="test-masage"></span>
                                </div>

                                <div class="form-group">
                                    <div class="form-field">
                                        <label for="passConfirm" class="form-label">Nhập lại mật khẩu mới</label>
                                        <input type="password" id="passConfirm" name="passConfirm" class="input-control" placeholder="Nhập lại mật khẩu mới">
                                    </div>
                                    <span class="test-masage"></span>
                                </div>

                                <div class="form-group mt-32">
                                    <button class="btn btn__form" name="updatePass">
                                        Cập nhật
                                        <i class="btn__form-icon"><ion-icon name="create"></ion-icon></i>
                                    </button>
                                </div>

                                <?php
                                    if(isset($mess) && $mess != '') {
                                ?>
                                <div class="mess-form success" style="color:<?php echo $status ?>;">
                                    <span>
                                        <i><ion-icon name="checkbox-outline"></ion-icon></i>
                                        <?php echo $mess?>
                                    </span>
                                </div>
                                <?php } ?>

                            </form>
                        </div>

                        <div class="account__right 
                            <?php if(isset($_GET['ticket'])) echo 'active'?>
                        ">
                            <?php
                                foreach($listBillConFirm as $billItem) {
                                    extract($billItem);
                            ?>
                            <div class="ticket__block">
                                <div class="ticket__basic">
                                    <div class="ticket__basic-item ticket__basic-id">
                                        <p class="ticket__basic-label">
                                            Mã hóa đơn
                                        </p>
                                        <p class="ticket__basic-content">
                                            <?php echo $ma_hd ?>
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-user">
                                        <p class="ticket__basic-label">
                                            Người đặt vé
                                        </p>
                                        <p class="ticket__basic-content">
                                            <?php echo $ho_ten_kh ?>
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-date">
                                        <p class="ticket__basic-label">
                                            Ngày đặt vé
                                        </p>
                                        <p class="ticket__basic-content">
                                            <?php echo $ngay_dat ?>
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-total">
                                        <p class="ticket__basic-label">
                                            Tổng tiền thanh toán
                                        </p>
                                        <p class="ticket__basic-content">
                                            <?php echo number_format($gia_tien) ?> VNĐ
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-icon">
                                        <i class="ticket__basic-icon--item active"><ion-icon name="add"></ion-icon></i>
                                        <i class="ticket__basic-icon--item "><ion-icon name="remove"></ion-icon></i>
                                    </div>



                                </div>

                                <div class="ticket__details ">
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Mã tour
                                        </p>
                                        <p class="ticket__details-content">
                                            <?php echo $ma_tour  ?>
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Số lượng vé đã đặt
                                        </p>
                                        <p class="ticket__details-content">
                                            <?php 
                                                $listTicket = get_ticket_by_ma_hd($ma_hd);
                                                echo count($listTicket);
                                            ?>
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Ngày khởi hành
                                        </p>
                                        <p class="ticket__details-content">
                                            <?php echo $ngay_khoi_hanh ?>
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Giờ khởi hành
                                        </p>
                                        <p class="ticket__details-content">
                                            <?php echo $gio_khoi_hanh ?>
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Nơi khởi hành
                                        </p>
                                        <p class="ticket__details-content">
                                            <?php echo $noi_khoi_hanh ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <!-- <div class="ticket__block">
                                <div class="ticket__basic">
                                    <div class="ticket__basic-item ticket__basic-id">
                                        <p class="ticket__basic-label">
                                            Mã hóa đơn
                                        </p>
                                        <p class="ticket__basic-content">
                                            HD-DN-001
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-user">
                                        <p class="ticket__basic-label">
                                            Người đặt vé
                                        </p>
                                        <p class="ticket__basic-content">
                                            Trần Hoàng Khôi
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-date">
                                        <p class="ticket__basic-label">
                                            Ngày đặt vé
                                        </p>
                                        <p class="ticket__basic-content">
                                            20/10/2021
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-total">
                                        <p class="ticket__basic-label">
                                            Tổng tiền thanh toán
                                        </p>
                                        <p class="ticket__basic-content">
                                            8,790,000đ
                                        </p>
                                    </div>

                                    <div class="ticket__basic-item ticket__basic-icon">
                                        <i class="ticket__basic-icon--item active"><ion-icon name="add"></ion-icon></i>
                                        <i class="ticket__basic-icon--item "><ion-icon name="remove"></ion-icon></i>
                                    </div>



                                </div>

                                <div class="ticket__details ">
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Mã tour
                                        </p>
                                        <p class="ticket__details-content">
                                            DN-001
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Số lượng vé đã đặt
                                        </p>
                                        <p class="ticket__details-content">
                                            6
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Ngày khởi hành
                                        </p>
                                        <p class="ticket__details-content">
                                            22/11/2021
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Giờ khởi hành
                                        </p>
                                        <p class="ticket__details-content">
                                            08:00 AM
                                        </p>
                                    </div>
                                    <div class="ticket__details-item">
                                        <p class="ticket__details-label">
                                            Nơi khởi hành
                                        </p>
                                        <p class="ticket__details-content">
                                            Cần Thơ
                                        </p>
                                    </div>
                                </div>
                            </div> -->
                            
                            <div class="pagination__block">
                                    <div class="pagination__list">
                                        <?php 
                                            $page = 1;
                                            if(isset($_GET['page'])) {
                                                $page = $_GET['page'];
                                            }
                                            if($page > 1) { 
                                        ?>
                                        <div class="pagination__prev">
                                            <a href="index.php?call=account&ticket&page=<?php echo $page - 1 ?>" class="pagination__item pagination__prev-item">
                                                <i class="pagination__prev-icon"><ion-icon name="rewind"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                        
                                        <div class="pagination__num">
                                            <?php for($i = 1; $i <= $pageNum; $i++) { ?>
                                                <?php if($page == $i) { ?>
                                                <a href="index.php?call=account&ticket&page=<?php echo $i ?>" class="pagination__item active pagination__num-item"><?php echo $i ?></a>
                                            <?php } else { ?>
                                                <a href="index.php?call=account&ticket&page=<?php echo $i ?>" class="pagination__item pagination__num-item"><?php echo $i ?></a>
                                            <?php } 
                                                } ?>
                                        </div>
                                        
                                        <?php if($page < $pageNum) { ?>
                                        <div class="pagination__next">
                                            <a href="index.php?call=account&ticket&page=<?php echo $page + 1 ?>" class="pagination__item pagination__next-item">
                                                <i class="pagination__next-icon"><ion-icon name="fastforward"></ion-icon></i>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                            </div> 
                            
                        </div>


                    </div>


                </div>
            </div>

        </main>