<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active JS-tap--item">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Thêm mới tour du lịch</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" class="form-box">

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourName" class="form-label">Tiêu đề tour</label>
                                <input type="text" id="tourName" name="tourName" class="input-control" placeholder="VD: Combo TripU 3N2Đ Khách sạn căn hộ Vinpearl Beachfront Nha Trang">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localCategory" class="form-label">Loại tour</label>
                                <select name="localCategory" id="" class="input-control-select">
                                    <option value="">Chọn Loại tour</option>
                                    <option value="1">Tour hành trình xanh</option>
                                    <option value="2">Tour biển đảo</option>
                                    <option value="3">Tour thanh lọc cơ thể</option>
                                    <option value="4">Tour Văn hóa Việt Nam</option>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="dateNum" class="form-label">Số lượng ngày (Ngày lẫn đêm)</label>
                                <input type="text" id="dateNum" name="dateNum" class="input-control" placeholder="VD: 3 ngày 2 đêm">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourDateStart" class="form-label">Ngày khởi hành</label>
                                <input type="date" id="tourDateStart" name="tourDateStart" class="input-control">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourDateEnd" class="form-label">Ngày trở về</label>
                                <input type="date" id="tourDateEnd" name="tourDateEnd" class="input-control" placeholder="VD: Combo TripU 3N2Đ Khách sạn căn hộ Vinpearl Beachfront Nha Trang">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourTimeStart" class="form-label">Giờ khởi hành</label>
                                <input type="time" id="tourTimeStart" name="tourTimeStart" class="input-control" placeholder="VD: Combo TripU 3N2Đ Khách sạn căn hộ Vinpearl Beachfront Nha Trang">
                            </div>
                            <span class="test-masage"></span>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localFocus" class="form-label">Nơi tập trung</label>
                                <input type="text" id="localFocus" name="localFocus" class="input-control" placeholder="VD: TP Cần Thơ">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourPriceAdult" class="form-label">Giá vé người lớn</label>
                                <input type="number" id="tourPriceAdult" name="tourPriceAdult" class="input-control" placeholder="Viết liền không kí tự đặc biệt (VD: 2490000)">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourPriceKid" class="form-label">Giá vé trẻ em</label>
                                <input type="number" id="tourPriceKid" name="tourPriceKid" class="input-control" placeholder="Viết liền không kí tự đặc biệt (VD: 220000)">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourNumppl" class="form-label">Số lượng người đi</label>
                                <input type="number" id="tourNumppl" name="tourNumppl" class="input-control" placeholder="VD: 7">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="tourNumppl" class="form-label">Khuyến mãi(%)</label>
                                <input type="number" id="tourNumppl" name="tourNumppl" class="input-control" placeholder="VD: 10">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
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
                        </div>
                        
                        <div class="tour__content">

                        </div>



                        <div class="form-group">
                            <button class="btn btn-form">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="content__tap JS-tap--item">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách tour du lịch</h3>
                </div>
                <div class="content__tap-main">
                    <div class="table__control">
                        <form action="" class="table__control-group">
                            <div class="filter__category">
                                <select name="" id="" class="filter__category-select">
                                    <option value="">Lọc theo loại tour</option>
                                    <option value="">Tour hành trình xanh</option>
                                    <option value="">Tour hành xe tự lái</option>
                                    <option value="">Tour hành văn hóa Việt Nam</option>
                                </select>
                            </div>
                            <span>Hoặc tìm theo</span>
                            <div class="filter__id-tour">
                                <input type="text" name="" id="" class="filter__id-tour--input" placeholder="Nhập mã tour...">
                            </div>
                            
                            <button class="btn filter__tour--btn">Tìm</button>
                        </form>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-0-5">STT</th>
                                <th class="tbl-0-5">Mã tour</th>
                                <th class="tbl-2">Tiêu đề</th>
                                <th class="tbl-1">Loại tour</th>
                                <th class="tbl-1">Số lượng ngày</th>
                                <th class="tbl-1">Ngày khởi hành</th>
                                <th class="tbl-1">Giờ khởi hành</th>
                                <th class="tbl-1">Ngày về</th>
                                <th class="tbl-1">Nơi tập trung</th>
                                <th class="tbl-1">Điểm đến</th>
                                <th class="tbl-1">Giá trẻ em</th>
                                <th class="tbl-1">Giá người lớn</th>
                                <th class="tbl-1">Khuyến mãi</th>
                                <th class="tbl-1">Hành trình</th>
                                <th class="tbl-0-5">Thao tác</th>
                                <th class="tbl-0-5">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12</td>
                                <td class="text-left">Tour Cần Thơ 4 ngày</td>
                                <td>Tour Biển đảo</td>
                                <td>3 Ngày 2 đêm</td>
                                <td>21/11/2021</td>
                                <td>08:00</td>
                                <td>27/11/2021</td>
                                <td>Cần Thơ</td>
                                <td>4</td>
                                <td>4,790,000đ</td>
                                <td>3,590,000đ</td>
                                <td>7%</td>
                                <td><a href="" class="btn btn__tbl">Chi tiết</a></td>
                                <td>
                                    <a href="" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>13</td>
                                <td class="text-left">Tour TP Hồ Chí Minh 4 ngày</td>
                                <td>Tour văn hóa Việt Nam</td>
                                <td>3 Ngày 2 đêm</td>
                                <td>21/11/2021</td>
                                <td>08:00</td>
                                <td>27/11/2021</td>
                                <td>Cần Thơ</td>
                                <td>4</td>
                                <td>4,790,000đ</td>
                                <td>3,590,000đ</td>
                                <td>7%</td>
                                <td><a href="" class="btn btn__tbl">Chi tiết</a></td>
                                <td>
                                    <a href="" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>14</td>
                                <td class="text-left">Tour Cần Giờ 4 ngày</td>
                                <td>Tour thanh lọc cơ thể</td>
                                <td>3 Ngày 2 đêm</td>
                                <td>21/11/2021</td>
                                <td>08:00</td>
                                <td>27/11/2021</td>
                                <td>Cần Thơ</td>
                                <td>4</td>
                                <td>4,790,000đ</td>
                                <td>3,590,000đ</td>
                                <td>7%</td>
                                <td><a href="" class="btn btn__tbl">Chi tiết</a></td>
                                <td>
                                    <a href="" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>18</td>
                                <td class="text-left">Tour Hội An 4 ngày</td>
                                <td>Tour thanh lọc cơ thể</td>
                                <td>3 Ngày 2 đêm</td>
                                <td>21/11/2021</td>
                                <td>08:00</td>
                                <td>27/11/2021</td>
                                <td>Cần Thơ</td>
                                <td>4</td>
                                <td>4,790,000đ</td>
                                <td>3,590,000đ</td>
                                <td>7%</td>
                                <td><a href="" class="btn btn__tbl">Chi tiết</a></td>
                                <td>
                                    <a href="" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>20</td>
                                <td class="text-left">Tour Vũng Tàu 4 ngày</td>
                                <td>Tour Biển đảo</td>
                                <td>3 Ngày 2 đêm</td>
                                <td>21/11/2021</td>
                                <td>08:00</td>
                                <td>27/11/2021</td>
                                <td>Cần Thơ</td>
                                <td>4</td>
                                <td>4,790,000đ</td>
                                <td>3,590,000đ</td>
                                <td>7%</td>
                                <td><a href="" class="btn btn__tbl">Chi tiết</a></td>
                                <td>
                                    <a href="" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </main>