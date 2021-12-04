<?php 
    if(is_array($tourInfo)) {
        extract($tourInfo);
    }
    $imgTour = get_img_tour($ma_tour);
?>
<!-- Book Ticket -->
        <main>
            <div class="book__ticket content__block">
                <form action="">
                    <div class="grid wide">
                        <!-- Book Ticket Heading -->
                        <div class="row mb-50">
                            <div class="col l-4">
                                <div class="book__ticket-image">
                                    <img src="<?php echo $upload_path.$imgTour[0]['ten_hinh']?>" alt="" class="book__ticket-image--img">
                                </div>
                            </div>
                            <div class="col l-8">
                                <div class="book__ticket-info">
                                    <div class="book__ticket-info--name">
                                        <h1 class="book__ticket-info--name-item"><?php echo $tieu_de ?></h1>
                                    </div>
    
                                    <div class="book__ticket-info--ticket">
                                        <p class="book__ticket-info--bold">Khởi hành: <span><?php echo $ngay_khoihanh ?></span></p>
                                        <p class="book__ticket-info--bold">Thời gian: <span style="text-transform: capitalize"><?php echo $goi_ngay ?></span></p>
                                        <p class="book__ticket-info--bold">Nơi khởi hành: <span style="text-transform: capitalize"><?php echo $noi_tap_trung ?></span></p>
                                        <p class="book__ticket-info--bold">Số chổ nhận: <span id="JSslot"><?php echo $soluong ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Overview Tour -->
                        <div class="row">
                            <!-- Overveiw -->
                            <div class="col l-8">
                                <div class="text__heaing-block tour__overview">
                                    <h2 class="text__heaing-block--item">
                                        Tổng quan về chuyến đi
                                    </h2>
                                </div>
                                <div class="customer__block">
                                    <!-- Form Customer -->
                                    <div class="form__custtomer">
                                        <div class="text__sub-heaing-block tour__overview">
                                            <h2 class="text__sub-heaing-block--item">
                                                Thông tin người đặt vé
                                            </h2>
                                        </div>
                                        <div action="" class="form__custtomer-box">
                                            <div class="form__custtomer-item">
                                                <label for="namePLE" class="form__custtomer-item--label">Họ và Tên</label>
                                                <input type="text" id="namePLE" class="form__custtomer-item--control">
                                            </div>
                                            <div class="form__custtomer-item">
                                                <label for="emailPLE" class="form__custtomer-item--label">Email</label>
                                                <input type="email" id="emailPLE" class="form__custtomer-item--control">
                                            </div>
    
                                            <div class="form__custtomer-item w-100">
                                                <label for="phonePLE" class="form__custtomer-item--label">Số điện thoại</label>
                                                <input type="number" id="phonePLE" class="form__custtomer-item--control">
                                            </div>
    
                                            <div class="form__custtomer-item form__custtomer-item--select">
                                                <label for="phonePLE" class="form__custtomer-item--label">Tỉnh / TP</label>
                                                <select name="" id="" class="info__customer-adults--control provinceAcc">
                                                    <option value="">Tỉnh / TP</option>
                                                    <?php 
                                                        $listProvince = load_all_province(); 
                                                        foreach($listProvince as $province) {    
                                                            extract($province);
                                                    ?>
                                                    <option value="<?php echo $id ?>"><?php echo $_name ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form__custtomer-item form__custtomer-item--select">
                                                <label for="phonePLE" class="form__custtomer-item--label">Quận / Huyện</label>
                                                <select name="" id="" class="info__customer-adults--control districtAcc">
                                                    <option value="">Quận / Huyện</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form__custtomer-item form__custtomer-item--select">
                                                <label for="phonePLE" class="form__custtomer-item--label">Phường / Xã</label>
                                                <select name="" id="" class="info__customer-adults--control wardAcc">
                                                    <option value="">Phường / xã</option>
                                                </select>
                                            </div>
                                            <div class="form__custtomer-item form__custtomer-item--select">
                                                <label for="phonePLE" class="form__custtomer-item--label">Địa chỉ</label>
                                                <input type="text" class="info__customer-adults--control" placeholder="VD: 271/Nguyễn Văn Linh">    
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
    
                                    <!-- Change Number Customer -->
                                    <div class="chagne__customer">
                                        <div class="text__sub-heaing-block tour__overview">
                                            <h2 class="text__sub-heaing-block--item">
                                                Hành khách
                                            </h2>
                                        </div>
    
                                        <div class="change__customer-block">
                                            <div id="JSchangeAdult" class="change__customer-item">

                                                <div class="change__customer-title">
                                                    <h4>Người lớn</h4>
                                                    <p>> 12 tuổi</p>
                                                </div>
            
                                                <div class="change__customer-control">
                                                    <span class="change change__customer-control--min js__minus-btn--adults">
                                                        <i><ion-icon name="remove"></ion-icon></i>
                                                    </span>
                                                    <span class="change__customer-control--num js__num-btn--adults">
                                                        1
                                                    </span>
                                                    <span class="change change__customer-control--plus js__add-btn--adults">
                                                        <i><ion-icon name="add"></ion-icon></i>
                                                    </span>
                                                </div>
                                            </div>
            
                                            <div id="JSchangeKid" class="change__customer-item">
                                                <div class="change__customer-title">
                                                    <h4>Trẻ em</h4>
                                                    <p>< 12 tuổi</p>
                                                </div>
            
                                                <div class="change__customer-control">
                                                    <span class="change change__customer-control--min js__minus-btn--kids">
                                                        <i><ion-icon name="remove"></ion-icon></i>
                                                    </span>
                                                    <span class="change__customer-control--num js__num-btn--kids">
                                                        0
                                                    </span>
                                                    <span class="change change__customer-control--plus js__add-btn--kids">
                                                        <i><ion-icon name="add"></ion-icon></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
    
    
                                    </div>
    
                                    <!-- Info Customer -->
                                    <div class="info__customer">
                                        <div class="text__sub-heaing-block tour__overview">
                                            <h2 class="text__sub-heaing-block--item">
                                                Thông tin Hành Khách
                                            </h2>
                                        </div>
    
                                        <div id="JSFormInfoCustomer" class="">
                                            <div id="JSCustomerAdultsBox" class="info__customer-adults">
                                                <div class="info__customer-adults--title">
                                                    <h4>Người lớn</h4>
                                                </div>

                                                <!-- <div class="info__customer-adults--checkbox">
                                                    <input type="checkbox" name="" id="checkboxLocal" class="info__customer-adults--checkbox-item">
                                                    <label for="checkboxLocal" class="info__customer-adults--checkbox-title">Sử dụng địa chỉ người đặt vé làm địa chỉ khách hàng</label>
                                                </div> -->


                                                
                                                <div class="info__customer-adults--form js__form-adults">
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-text">
                                                            <label for="" class="info__customer-adults--label">Họ tên</label>
                                                            <input type="text" class="info__customer-adults--control" placeholder="Họ và tên">
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Giới tính</label>
                                                            <select name="" id="" class="info__customer-adults--control">
                                                                <option value="">Giới tính</option>
                                                                <option value="male">Nam</option>
                                                                <option value="female">Nữ</option>
                                                            </select>
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Ngày sinh</label>
                                                            <input type="date" class="info__customer-adults--control">
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item w-100">
                                                            <label for="" class="info__customer-adults--label">Số căn cước công dân</label>
                                                            <input type="number" class="info__customer-adults--control" placeholder="CCCD">
                                                        </div>
    
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Tỉnh / TP</label>
                                                            <select name="" id="" class="info__customer-adults--control provinceUS1">
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
    
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Quận / Huyện</label>
                                                            <select name="" id="" class="info__customer-adults--control districtUS1">
                                                                <option value="">Quận/Huyện</option>
                                                            </select>
                                                        </div>
    
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Phường Xã</label>
                                                            <select name="" id="" class="info__customer-adults--control wardUS1">
                                                                <option value="">Phường Xã</option>
                                                            </select>
                                                        </div>
    
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select-text">
                                                            <label for="" class="info__customer-adults--label">Địa chỉ</label>
                                                            <input type="text" class="info__customer-adults--control" placeholder="VD: 271/Nguyễn Văn Linh">
                                                        </div>
                                                </div>
    
                                            </div>
    
                                            <div id="JSCustomerKidsBox" class="info__customer-adults">
                                                <!-- <div class="info__customer-adults--title js__form-kid--title">
                                                    <h4>Trẻ em</h4>
                                                </div> -->
                                                
                                                 <!-- <div class="info__customer-adults--form js__form-kid">
                                                    <div class="info__customer-adults--form-item info__customer-adults--form-text">
                                                        <label for="" class="info__customer-adults--label">Họ tên</label>
                                                        <input type="text" class="info__customer-adults--control">
                                                    </div>
    
                                                    <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                        <label for="" class="info__customer-adults--label">Giới tính</label>
                                                        <select name="" id="" class="info__customer-adults--control">
                                                            <option value="">Giới tính</option>
                                                            <option value="male">Nam</option>
                                                            <option value="female">Nữ</option>
                                                        </select>
                                                    </div>
    
                                                    <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                        <label for="" class="info__customer-adults--label">Ngày sinh</label>
                                                        <input type="date" class="info__customer-adults--control">
                                                    </div>
                                                    
                                                </div> -->
    
                                            </div>
    
                                        </div>
                                    </div>
    
                                    <!-- Customer Save Inner -->
                                    <div class="inner__customer">
                                        <div class="text__sub-heaing-block tour__overview">
                                            <h2 class="text__sub-heaing-block--item">
                                                Qúy khách có ghi chú, lưu ý gì hãy nói với chúng tôi !
                                            </h2>
                                        </div>
    
                                        <div class="inner__customer-box">
                                            <textarea name="" id="" class="inner__customer-box--control" cols="30" rows="10" placeholder="Vui lòng nhập nội dung lời nhắn bằng tiếng Anh hoặc tiếng Việt"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Trip summary -->
                            <div class="col l-4">
                                <div class="summary__trip">
                                    <div class="text__heaing-block tour__overview">
                                        <h2 class="text__heaing-block--item">
                                            Tóm tắt chuyến đi
                                        </h2>
                                    </div>
                                    
                                    <!-- Summary Trip Info -->
                                    <div class="summary__trip-info">
                                        <div class="summary__trip-info--image">
                                            <img src="<?php echo $upload_path.$imgTour[0]['ten_hinh']?>" alt="" class="summary__trip-info--image-img">
                                        </div>
                                        <div class="summary__trip-info--name">
                                            <h4 class="summary__trip-info--name-item">
                                                <?php echo $tieu_de ?>
                                            </h4>
                                        </div>
                                    </div>
    
                                    <!-- Summary Trip Go -->
                                    <div class="summary__trip-go">
                                        <div class="summary__trip-go--start">
                                            <i class="start__icon"><ion-icon name="calendar"></ion-icon></i>
                                            <div class="start__content">
                                                <h4 class="start__content-label">Bắt đầu chuyến đi</h4>
                                                <p class="start__content-date"><?php echo $ngay_khoihanh ?></p>
                                            </div>
                                        </div>
                                        <div class="summary__trip-go--end">
                                            <i class="end__icon"><ion-icon name="calendar"></ion-icon></i>
                                            <div class="end__content">
                                                <h4 class="end__content-label">Kết thúc chuyến đi</h4>
                                                <p class="end__content-date"><?php echo $ngay_ve ?></p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Summart Trip Details -->
                                    <div class="summary__trip-detail">
                                        <table class="summary__trip-detail--tbl">
                                            <tbody>
                                                <tr>
                                                    <th class="text-left">Hành khách</th>
                                                    <th class="text-right"><i class="summary__trip-detail--tbl-icon"><ion-icon name="people"></ion-icon></i></th>
                                                </tr>
                                                <tr>
                                                    <td>Người lớn: </td>
                                                    <td class="text-right fw-bold"><span id="JS-num_adult">1</span> x <span class="JS-money_adult-box"></span> </td>
                                                    <input type="hidden"id="JS-money_adult" value="<?php echo $gia_nguoilon ?>">
                                                </tr>
                                                <tr>
                                                    <td>Người trẻ em: </td>
                                                    <td class="text-right fw-bold"><span id="JS-num_kid">0</span> x  <span class="JS-money_kid-box"></span></td>
                                                    <input type="hidden" id="JS-money_kid" value="<?php echo $gia_treem ?>">
                                                </tr>
                                                <tr>
                                                    <td>Tổng cộng: </td>
                                                    <td class="price text-right"><span id="JS-Total-Money-All"></span></td>
                                                    <input type="hidden" name="toltalMoney" class="toltalMoneyBox" value="">
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <button class="btn summary__trip-detail--btn">Đặt ngay</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </main>