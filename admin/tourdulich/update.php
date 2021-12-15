<?php
    if(is_array($tourInfo)) {
        extract($tourInfo);
        $tour_cate = $loai_tour;
        $sideTour = $ma_mien;
    }
?>
<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật tour du lịch</h3>
                </div>
                <div class="content__tap-main">
                <form action="" method="post" class="form-box" enctype="multipart/form-data">

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourName" class="form-label">Tiêu đề tour</label>
                            <textarea id="tourName" required name="tourNameUD" class="input-control--textarea" placeholder="VD: Combo TripU 3N2Đ Khách sạn căn hộ Vinpearl Beachfront Nha Trang"><?php echo $tieu_de ?></textarea>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="localCategory" class="form-label">Loại tour</label>
                            <select name="localCategoryUD" required id="" class="input-control-select">
                                <option value="">Chọn Loại tour</option>
                                <?php 
                                    $listTourCate  = load_all_tour();
                                    foreach($listTourCate as $tourCateItem) {
                                        extract($tourCateItem);
                                        if($loai_tour == $tour_cate) {
                                ?>
                                <option selected value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                <?php }else { ?>
                                <option  value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                <?php  } } ?>
                            </select>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourDescUD" class="form-label">Giới thiệu tour</label>
                            <textarea name="tourDescUD" required id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả tour có gì đặc biệt"><?php echo $gioi_thieu ?></textarea>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="sideTourUD" class="form-label">Vùng miền</label>
                            <select name="sideTourUD" required id="" class="input-control-select">
                                <option value="">Chọn vùng miền</option>
                                <?php 
                                    $listSide  = list_Side();
                                    foreach($listSide as $sideItem) {
                                        extract($sideItem);
                                        if($ma_mien == $sideTour) {
                                ?>
                                <option selected value="<?php echo $ma_mien ?>"><?php echo $ten_mien ?></option>
                                <?php } else { ?>
                                <option value="<?php echo $ma_mien ?>"><?php echo $ten_mien ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="dateNum" class="form-label">Số lượng ngày (Ngày lẫn đêm)</label>
                            <input type="text" required id="dateNum" name="dateNumUD" class="input-control" value="<?php echo $goi_ngay ?>" placeholder="VD: 3 ngày 2 đêm">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourDateStart" class="form-label">Ngày khởi hành</label>
                            <input type="date" required id="tourDateStart" name="tourDateStartUD" class="input-control" value="<?php echo $ngay_khoihanh ?>">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourTimeStart" class="form-label">Giờ khởi hành</label>
                            <input type="time" required id="tourTimeStart" name="tourTimeStartUD" class="input-control" value="<?php echo $gio_khoihanh ?>">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourDateEnd" class="form-label">Ngày về</label>
                            <input type="date" required id="tourDateEnd" name="tourDateEndUD" value="<?php echo $ngay_ve ?>" class="input-control">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="localFocus" class="form-label">Nơi tập trung</label>
                            <input type="text" required id="localFocus" name="localFocusUD" class="input-control" value="<?php echo $noi_tap_trung ?>" placeholder="VD: TP Cần Thơ">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourPriceAdult" class="form-label">Giá vé người lớn (VNĐ)</label>
                            <input type="number" required id="tourPriceAdult" name="tourPriceAdultUD" class="input-control" value="<?php echo $gia_nguoilon ?>" placeholder="Viết liền không kí tự đặc biệt (VD: 2490000)">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourPriceKid" class="form-label">Giá vé trẻ em (VNĐ)</label>
                            <input type="number" required id="tourPriceKid" name="tourPriceKidUD" class="input-control" value="<?php echo $gia_treem ?>" placeholder="Viết liền không kí tự đặc biệt (VD: 220000)">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourNumppl" class="form-label">Số lượng người đi</label>
                            <input type="number" required id="tourNumppl" name="tourNumpplUD" class="input-control" value="<?php echo $soluong ?>" placeholder="VD: 7">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="tourSales" class="form-label">Khuyến mãi(%)</label>
                            <input type="number" required id="tourSales" name="tourSalesUD" class="input-control" value="<?php echo $khuyen_mai ?>" placeholder="VD: 10">
                        </div>
                        <span class="test-masage"></span>
                    </div>
                    
                    <?php
                        $i = 1;
                        foreach($tourImg as $imgItem) {
                            extract($imgItem);
                            $hinh = $img_path . $ten_hinh;
                    ?>
                        <div class="form-group">
                            <div class="form-field">
                                <label for="newImage" class="form-label">Hình ảnh <?php echo $i++ ?></label>
                                <div class="img__block">
                                    <img src="<?php echo $hinh ?>" alt="" class="img__tbl">
                                    <input type="file" id="newImage" name="tourImageUD[]" class="input-control-img" value="">
                                    <input type="hidden" name="idImg[]" value="<?php echo $ma_hinh ?>">
                                </div>
                            </div>
                            <span class="test-masage"></span>
                        </div>
                    <?php } ?>

                    <!-- <div class="form-group">
                        <div class="form-field">
                            <label for="localNum" class="form-label">Số lượng địa điểm</label>
                            <select name="localNum" id="localNum" class="input-control-select">
                                <option value="">Chọn số lượng địa điểm du lịch</option>
                                <option value="1">1 địa điểm</option>
                                <option value="2">2 địa điểm</option>
                                <option value="3">3 địa điểm</option>
                                <option value="4">4 địa điểm</option>
                                <option value="5">5 địa điểm</option>
                                <option value="6">6 địa điểm</option>
                                <option value="7">7 địa điểm</option>
                                <option value="8">8 địa điểm</option>
                                <option value="9">9 địa điểm</option>
                                <option value="10">10 địa điểm</option>
                            </select>
                        </div>
                        <span class="test-masage"></span>
                    </div> -->

                    <div class="tour__content">
                        <?php 
                            $stt = 1;
                            foreach($tourJourneys as $journeyItem){ 
                                extract($journeyItem);
                                $date = $stt++;

                        ?>
                        <!-- Ngày 1 -->
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localTour" class="form-label">Ngày <?php echo $date ?></label>
                                
                                <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                <select name="localTourSelectUD[]" required id="localTourSelect" class="input-control-select">
                                    <option value="">Chọn địa điểm</option>
                                    <?php   
                                        $localList = load_all_local('');
                                        foreach ($localList as $localItem) {
                                            extract($localItem);
                                            if($ma_diadiem == $ma_dia_diem) {
                                    ?>
                                    <option selected value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } else { ?>
                                    <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } }?>
                                </select>
                                <div class="line"></div>
                                <label for="localTourName" class="form-sub-label">Tiêu đề ngày <?php echo $date ?></label>
                                <textarea name="localTourNameUD[]" required  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 1 sẽ đi đâu"><?php echo $tieu_de ?></textarea>
                                <div class="line"></div>
                                <label for="localDateinUD" class="form-sub-label">Ngày đến</label>
                                <input type="date" required  id="localDateinUD" name="localDateinUD[]" value="<?php echo $ngay_di ?>" class="input-control">
                                <div class="line"></div>
                                <label for="localTourMainUD" class="form-sub-label">Mô tả hành trình</label>
                                <textarea required id="content<?php echo $date ?>" name="localTourMainUD[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"><?php echo $noi_dung ?></textarea>
                                <input type="hidden" name="journeyID[]" value="<?php echo $ma_hanh_trinh  ?>">
                            </div>
                            <span class="test-masage"></span>
                        </div>
                        <?php } ?>

                        <!-- <div class="form-group">
                            <div class="form-field">
                                <label for="localTour" class="form-label">Ngày 2</label>
                                
                                <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                <select name="localTourSelect[]" id="localTourSelect" class="input-control-select">
                                    <option value="">Chọn địa điểm</option>
                                    <?php
                                        foreach ($localList as $localItem) {
                                            extract($localItem);
                                    ?>
                                    <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } ?>
                                </select>
                                <div class="line"></div>
                                <label for="localTourName" class="form-sub-label">Tiêu đề ngày 2</label>
                                <textarea name="localTourName[]"  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 2 sẽ đi đâu"></textarea>
                                <div class="line"></div>
                                <label for="localDatein" class="form-sub-label">Ngày đến</label>
                                <input type="date"  id="localDatein" name="localDatein[]" class="input-control">
                                <div class="line"></div>
                                <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                                <textarea id="content2" name="localTourMain[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localTour" class="form-label">Ngày 3</label>
                                
                                <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                <select name="localTourSelect[]" id="localTourSelect" class="input-control-select">
                                    <option value="">Chọn địa điểm</option>
                                    <?php
                                        foreach ($localList as $localItem) {
                                            extract($localItem);
                                    ?>
                                    <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } ?>
                                </select>
                                <div class="line"></div>
                                <label for="localTourName" class="form-sub-label">Tiêu đề ngày 3</label>
                                <textarea name="localTourName[]"  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 3 sẽ đi đâu"></textarea>
                                <div class="line"></div>
                                <label for="localDatein" class="form-sub-label">Ngày đến</label>
                                <input type="date"  id="localDatein" name="localDatein[]" class="input-control">
                                <div class="line"></div>
                                <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                                <textarea id="content3" name="localTourMain[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localTour" class="form-label">Ngày 4</label>
                                
                                <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                <select name="localTourSelect[]" id="localTourSelect" class="input-control-select">
                                    <option value="">Chọn địa điểm</option>
                                    <?php
                                        foreach ($localList as $localItem) {
                                            extract($localItem);
                                    ?>
                                    <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } ?>
                                </select>
                                <div class="line"></div>
                                <label for="localTourName" class="form-sub-label">Tiêu đề ngày 4</label>
                                <textarea name="localTourName[]"  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 4 sẽ đi đâu"></textarea>
                                <div class="line"></div>
                                <label for="localDatein" class="form-sub-label">Ngày đến</label>
                                <input type="date"  id="localDatein" name="localDatein[]" class="input-control">
                                <div class="line"></div>
                                <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                                <textarea id="content4" name="localTourMain[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localTour" class="form-label">Ngày 5</label>
                                
                                <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                <select name="localTourSelect[]" id="localTourSelect" class="input-control-select">
                                    <option value="">Chọn địa điểm</option>
                                    <?php
                                        foreach ($localList as $localItem) {
                                            extract($localItem);
                                    ?>
                                    <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } ?>
                                </select>
                                <div class="line"></div>
                                <label for="localTourName" class="form-sub-label">Tiêu đề ngày 5</label>
                                <textarea name="localTourName[]"  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 5 sẽ đi đâu"></textarea>
                                <div class="line"></div>
                                <label for="localDatein" class="form-sub-label">Ngày đến</label>
                                <input type="date"  id="localDatein" name="localDatein[]" class="input-control">
                                <div class="line"></div>
                                <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                                <textarea id="content5" name="localTourMain[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localTour" class="form-label">Ngày 6</label>
                                
                                <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                <select name="localTourSelect[]" id="localTourSelect" class="input-control-select">
                                    <option value="">Chọn địa điểm</option>
                                    <?php
                                        foreach ($localList as $localItem) {
                                            extract($localItem);
                                    ?>
                                    <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } ?>
                                </select>
                                <div class="line"></div>
                                <label for="localTourName" class="form-sub-label">Tiêu đề ngày 6</label>
                                <textarea name="localTourName[]"  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 6 sẽ đi đâu"></textarea>
                                <div class="line"></div>
                                <label for="localDatein" class="form-sub-label">Ngày đến</label>
                                <input type="date"  id="localDatein" name="localDatein[]" class="input-control">
                                <div class="line"></div>
                                <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                                <textarea id="content6" name="localTourMain[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localTour" class="form-label">Ngày 7</label>
                                
                                <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                <select name="localTourSelect[]" id="localTourSelect" class="input-control-select">
                                    <option value="">Chọn địa điểm</option>
                                    <?php
                                        foreach ($localList as $localItem) {
                                            extract($localItem);
                                    ?>
                                    <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                    <?php } ?>
                                </select>
                                <div class="line"></div>
                                <label for="localTourName" class="form-sub-label">Tiêu đề ngày 7</label>
                                <textarea name="localTourName[]"  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 7 sẽ đi đâu"></textarea>
                                <div class="line"></div>
                                <label for="localDatein" class="form-sub-label">Ngày đến</label>
                                <input type="date"  id="localDatein" name="localDatein[]" class="input-control">
                                <div class="line"></div>
                                <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                                <textarea id="content7" name="localTourMain[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div> -->
                    </div>

                    <div class="form-group">
                        <button name="updateTourbtn" class="btn btn-form">Thêm</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </main>