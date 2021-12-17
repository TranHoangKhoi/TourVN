<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active JS-tap--item">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Thêm mới tour du lịch</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" method="post" class="form-box" enctype="multipart/form-data">

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourName" class="form-label">Tiêu đề tour</label>
                                <input type="text" required id="tourName" name="tourName" class="input-control" placeholder="VD: Combo TripU 3N2Đ Khách sạn căn hộ Vinpearl Beachfront Nha Trang">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localCategory" class="form-label">Loại tour</label>
                                <select name="localCategory" required id="" class="input-control-select">
                                    <option value="">Chọn Loại tour</option>
                                    <?php 
                                        $listTourCate  = load_all_tour();
                                        foreach($listTourCate as $tourCateItem) {
                                            extract($tourCateItem);
                                    ?>
                                    <option value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourDesc" class="form-label">Giới thiệu tour</label>
                                <textarea name="tourDesc" required id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả tour có gì đặc biệt"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="sideTour" class="form-label">Vùng miền</label>
                                <select name="sideTour" required id="" class="input-control-select">
                                    <option value="">Chọn vùng miền</option>
                                    <?php 
                                        $listSide  = list_Side();
                                        foreach($listSide as $sideItem) {
                                            extract($sideItem);
                                    ?>
                                    <option value="<?php echo $ma_mien ?>"><?php echo $ten_mien ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="dateNum" class="form-label">Số lượng ngày (Ngày lẫn đêm)</label>
                                <input type="text" required id="dateNum" name="dateNum" class="input-control" placeholder="VD: 3 ngày 2 đêm">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourDateStart" class="form-label">Ngày khởi hành</label>
                                <input type="date" required id="tourDateStart" name="tourDateStart" class="input-control">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourTimeStart" class="form-label">Giờ khởi hành</label>
                                <input type="time" required id="tourTimeStart" name="tourTimeStart" class="input-control">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourDateEnd" class="form-label">Ngày về</label>
                                <input type="date" required id="tourDateEnd" name="tourDateEnd" class="input-control">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localFocus" class="form-label">Nơi tập trung</label>
                                <input type="text" required id="localFocus" name="localFocus" class="input-control" placeholder="VD: TP Cần Thơ">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourPriceAdult" class="form-label">Giá vé người lớn</label>
                                <input type="number" required id="tourPriceAdult" min="1" name="tourPriceAdult" class="input-control" placeholder="Viết liền không kí tự đặc biệt (VD: 2490000)">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourPriceKid" class="form-label">Giá vé trẻ em</label>
                                <input type="number" required id="tourPriceKid" min="0" name="tourPriceKid" class="input-control" placeholder="Viết liền không kí tự đặc biệt (VD: 220000)">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourNumppl" class="form-label">Số lượng người đi</label>
                                <input type="number" required id="tourNumppl" name="tourNumppl" min="1" class="input-control" placeholder="VD: 7">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourSales" class="form-label">Khuyến mãi(%)</label>
                                <input type="number" required id="tourSales" name="tourSales" min="0" max="100" class="input-control" placeholder="VD: 10">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg1" class="form-label">Hình ảnh 1</label>
                              <label for="tourImg1" class="form-sub-label">Hình ảnh 1 dùng làm ảnh đại diện cho tour</label>
                              <input type="file" required id="tourImg1" name="tourImg1" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg2" class="form-label">Hình ảnh 2</label>
                              <label for="tourImg2" class="form-sub-label">Hình ảnh 2 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg2" name="tourImg2" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg3" class="form-label">Hình ảnh 3</label>
                              <label for="tourImg3" class="form-sub-label">Hình ảnh 3 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg3" name="tourImg3" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg4" class="form-label">Hình ảnh 4</label>
                              <label for="tourImg4" class="form-sub-label">Hình ảnh 4 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg4" name="tourImg4" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg5" class="form-label">Hình ảnh 5</label>
                              <label for="tourImg5" class="form-sub-label">Hình ảnh 5 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg5" name="tourImg5" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg6" class="form-label">Hình ảnh 6</label>
                              <label for="tourImg6" class="form-sub-label">Hình ảnh 6 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg6" name="tourImg6" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg7" class="form-label">Hình ảnh 7</label>
                              <label for="tourImg7" class="form-sub-label">Hình ảnh 7 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg7" name="tourImg7" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg8" class="form-label">Hình ảnh 8</label>
                              <label for="tourImg8" class="form-sub-label">Hình ảnh 8 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg8" name="tourImg8" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>
                        <div class="form-group">
                          <div class="form-field">
                              <label for="tourImg9" class="form-label">Hình ảnh 9</label>
                              <label for="tourImg9" class="form-sub-label">Hình ảnh 9 dùng làm ảnh giới thiệu tour</label>
                              <input type="file" required id="tourImg9" name="tourImg9" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                        </div>
                    

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
                            <?php $localList = load_all_local(''); ?>
                            <!-- Ngày 1 -->
                            <div class="form-group">
                                <div class="form-field">
                                    <label for="localTour" class="form-label">Ngày 1</label>
                                    
                                    <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                                    <select name="localTourSelect[]" required id="localTourSelect" class="input-control-select">
                                        <option value="">Chọn địa điểm</option>
                                        <?php
                                            foreach ($localList as $localItem) {
                                                extract($localItem);
                                        ?>
                                        <option value="<?php echo $ma_diadiem ?>"><?php echo $ten_diadiem ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="line"></div>
                                    <label for="localTourName" class="form-sub-label">Tiêu đề ngày 1</label>
                                    <textarea name="localTourName[]" required  id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày 1 sẽ đi đâu"></textarea>
                                    <div class="line"></div>
                                    <label for="localDatein" class="form-sub-label">Ngày đến</label>
                                    <input type="date" required id="localDatein" name="localDatein[]" class="input-control">
                                    <div class="line"></div>
                                    <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                                    <textarea id="content1" required name="localTourMain[]"  id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày 1"></textarea>
                                </div>
                                <span class="test-masage"></span>
                            </div>

                            <div class="form-group">
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
                            </div>
                        </div>

                        <div class="form-group">
                            <button name="addTour" class="btn btn-form">Thêm</button>
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