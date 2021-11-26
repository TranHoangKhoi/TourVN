<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật địa điểm đi</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" class="form-box">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localName" class="form-label">Tên địa điểm đi</label>
                                <input type="text" id="localName" name="localName" class="input-control" placeholder="VD: Cần Thơ">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localID" class="form-label">Mã Tỉnh</label>
                                <input type="text" id="localID" name="localID" class="input-control" placeholder="VD: 65">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localSide" class="form-label">Vùng miền</label>
                                <select name="localSide" id="" class="input-control-select">
                                    <option value="">Chọn vùng miền</option>
                                    <option value="1">Miền Bắc</option>
                                    <option value="2">Miền Nam</option>
                                    <option value="3">Miền Trung</option>
                                    <option value="4">Miền Tây</option>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage1" class="form-label">Hình ảnh 1</label>
                                <label for="localiMage1" class="form-sub-label">Hình ảnh 1 dùng làm ảnh đại diện tour và hình lớn trong tour chi tiết</label>
                                <input type="file" id="localiMage1" name="localiMage1" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage2" class="form-label">Hình ảnh 2</label>
                                <label for="localiMage2" class="form-sub-label">Hình ảnh 2 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage2" name="localiMage2" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage3" class="form-label">Hình ảnh 3</label>
                                <label for="localiMage3" class="form-sub-label">Hình ảnh 3 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage3" name="localiMage3" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage4" class="form-label">Hình ảnh 4</label>
                                <label for="localiMage4" class="form-sub-label">Hình ảnh 4 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage4" name="localiMage4" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage5" class="form-label">Hình ảnh 5</label>
                                <label for="localiMage5" class="form-sub-label">Hình ảnh 5 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage5" name="localiMage5" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage6" class="form-label">Hình ảnh 6</label>
                                <label for="localiMage6" class="form-sub-label">Hình ảnh 6 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage6" name="localiMage6" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage7" class="form-label">Hình ảnh 7</label>
                                <label for="localiMage7" class="form-sub-label">Hình ảnh 7 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage7" name="localiMage7" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage8" class="form-label">Hình ảnh 8</label>
                                <label for="localiMage8" class="form-sub-label">Hình ảnh 8 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage8" name="localiMage8" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localiMage9" class="form-label">Hình ảnh 9</label>
                                <label for="localiMage9" class="form-sub-label">Hình ảnh 9 dùng làm ảnh trong tour chi tiết</label>
                                <input type="file" id="localiMage9" name="localiMage9" class="input-control-img">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localDesc" class="form-label">Mô tả</label>
                                <textarea name="localDesc" id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Mô tả địa điểm đến có gì đặc biệt"></textarea>
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