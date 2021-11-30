        <!-- Book Ticket -->
        <main>
            <div class="book__ticket content__block">
                <div class="grid wide">
                    <!-- Book Ticket Heading -->
                    <div class="row mb-50">
                        <div class="col l-4">
                            <div class="book__ticket-image">
                                <img src="../Content/IMG/Tour/baclieu.jpg" alt="" class="book__ticket-image--img">
                            </div>
                        </div>
                        <div class="col l-8">
                            <div class="book__ticket-info">
                                <div class="book__ticket-info--name">
                                    <h1 class="book__ticket-info--name-item">Phú Quốc - Ngắm Hoàng Hôn Tại Sunset Sanato - Bãi Sao (Khách Sạn 3 Sao - Vietnam Airlines)</h1>
                                </div>

                                <div class="book__ticket-info--ticket">
                                    <p class="book__ticket-info--bold">Khởi hành: <span>21/11/2021</span></p>
                                    <p class="book__ticket-info--bold">Thời gian: <span>3 ngày</span></p>
                                    <p class="book__ticket-info--bold">Nơi khởi hành: <span>TP Cần Thơ</span></p>
                                    <p class="book__ticket-info--bold">Số chổ nhận: <span id="JSslot">7</span></p>
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
                                    <form action="" class="form__custtomer-box">
                                        <div class="form__custtomer-item">
                                            <label for="namePLE" class="form__custtomer-item--label">Họ và Tên</label>
                                            <input type="text" id="namePLE" class="form__custtomer-item--control">
                                        </div>
                                        <div class="form__custtomer-item">
                                            <label for="emailPLE" class="form__custtomer-item--label">Email</label>
                                            <input type="email" id="emailPLE" class="form__custtomer-item--control">
                                        </div>
                                        <div class="form__custtomer-item">
                                            <label for="phonePLE" class="form__custtomer-item--label">Số điện thoại</label>
                                            <input type="number" id="phonePLE" class="form__custtomer-item--control">
                                        </div>
                                        <div class="form__custtomer-item">
                                            <label for="addressPLE" class="form__custtomer-item--label">Địa chỉ</label>
                                            <input type="text" id="addressPLE" class="form__custtomer-item--control">
                                        </div>
                                    </form>
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

                                    <form id="JSFormInfoCustomer" method="post" action="" class="">
                                        <div id="JSCustomerAdultsBox" class="info__customer-adults">
                                            <div class="info__customer-adults--title">
                                                <h4>Người lớn</h4>
                                            </div>
                                            
                                            <div class="info__customer-adults--form js__form-adults">
                                                    <div class="info__customer-adults--form-item info__customer-adults--form-text">
                                                        <label for="" class="info__customer-adults--label">Họ tên</label>
                                                        <input type="text" class="info__customer-adults--control" placeholder="Họ và tên">
                                                    </div>

                                                    <div class="info__customer-adults--form-item w-100">
                                                        <label for="" class="info__customer-adults--label">Số căn cước công dân</label>
                                                        <input type="number" class="info__customer-adults--control" placeholder="CCCD">
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

                                                    <!-- <div class="info__customer-adults--form-item info__customer-adults--form-text">
                                                        <label for="" class="info__customer-adults--label">Địa chỉ</label>
                                                        <input type="text" class="info__customer-adults--control" placeholder="Địa chỉ">
                                                    </div> -->
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
                                                    <select name="" id="" class="info__customer-adults--control">
                                                        <option value="">Ngày</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>

                                                <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                    <select name="" id="" class="info__customer-adults--control">
                                                        <option value="">Tháng</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>

                                                <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                    <select name="" id="" class="info__customer-adults--control">
                                                        <option value="">Năm</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                        </div>

                                    </form>
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
                                        <img src="../Content/IMG/Tour/baclieu.jpg" alt="" class="summary__trip-info--image-img">
                                    </div>
                                    <div class="summary__trip-info--name">
                                        <h4 class="summary__trip-info--name-item">
                                            Phú Quốc - Ngắm Hoàng Hôn Tại Sunset Sanato - Bãi Sao (Khách Sạn 3 Sao - Vietnam Airlines) 
                                        </h4>
                                    </div>
                                </div>

                                <!-- Summary Trip Go -->
                                <div class="summary__trip-go">
                                    <div class="summary__trip-go--start">
                                        <i class="start__icon"><ion-icon name="calendar"></ion-icon></i>
                                        <div class="start__content">
                                            <h4 class="start__content-label">Bắt đầu chuyến đi</h4>
                                            <p class="start__content-date">T7, 27 Tháng 11, 2021</p>
                                        </div>
                                    </div>
                                    <div class="summary__trip-go--end">
                                        <i class="end__icon"><ion-icon name="calendar"></ion-icon></i>
                                        <div class="end__content">
                                            <h4 class="end__content-label">Kết thúc chuyến đi</h4>
                                            <p class="end__content-date">T4, 1 Tháng 12, 2021</p>
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
                                                <td class="text-right fw-bold JS-Total-Money-Adult">1 X 10,590,000đ</td>
                                            </tr>
                                            <tr>
                                                <td>Người trẻ em: </td>
                                                <td class="text-right fw-bold JS-Total-Money-Kid">1 X 7,590,000đ</td>
                                            </tr>
                                            <tr>
                                                <td>Tổng cộng: </td>
                                                <td class="price text-right JS-Total-Money-All">18,180,000đ</td>
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
            </div>
        </main>