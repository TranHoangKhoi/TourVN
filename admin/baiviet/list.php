<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách tin tức</h3>
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
                                <th class="tbl-1">Mã tin</th>
                                <th class="tbl-2">Tiêu đề</th>
                                <th class="tbl-1">loại tin</th>
                                <th class="tbl-1">Người đăng</th>
                                <th class="tbl-2">Nội dung</th>
                                <th class="tbl-1">Ngày đăng</th>
                                <th class="tbl-1">Hình ảnh</th>
                                <th class="tbl-0-5">Thao tác</th>
                                <th class="tbl-0-5">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Du lịch Tây Bắc tháng 11 nên đi đâu và trải nghiệm gì?
                                        </p>
                                </td>
                                <td>Cẩm nang du lịch</td>
                                <td class="text-left">Trần Hoàng Khôi</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Bến Tre nổi tiếng là “xứ dừa” trong huyền thoại, nay cũng là điểm du lịch được nhiều du khách 
                                            chốn thị thành tìm về mỗi dịp cuối tuần. Tại đây có nhiều khu vui chơi, du lịch sinh thái mà 
                                            bạn có thể khám phá cả ngày không chán, điển hình là khu du lịch Lan Vương, Cồn Phụng, Làng Bè.
                                        </p>
                                </td>
                                <td>21/11/2021</td>
                                <td class="not-lh"><img src="../Content/IMG/Tour/condao.jpg" alt="" class="img__tbl"></td>
                                <td>
                                    <a href="?ql=newsPage&updatenewsPage" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>12</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Du lịch miền Tây mùa nước nổi săn các sản vật đồng quê
                                        </p>
                                </td>
                                <td>Cẩm nang du lịch</td>
                                <td class="text-left">Trần Hoàng Khôi</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Khi cái gay gắt của nắng hạ không còn thiêu đốt cũng là lúc miền Tây bước vào mùa 
                                            nước nổi mang theo những sản vật có một không hai. Những cung đường ruộng nước như 
                                            được khoác lên lớp áo mới màu bàng bạc, lóng lánh và cứ thế những tour du lịch miền 
                                            Tây mùa nước nổi lại trở nên "hot" hơn bao giờ hết.
                                        </p>
                                </td>
                                <td>21/11/2021</td>
                                <td class="not-lh"><img src="../Content/IMG/Tour/dalat.jpg" alt="" class="img__tbl"></td>
                                <td>
                                    <a href="?ql=newsPage&updatenewsPage" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>12</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Kinh nghiệm du lịch Đà Lạt mùa hoa dã quỳ khoe sắc
                                        </p>
                                </td>
                                <td>Cẩm nang du lịch</td>
                                <td class="text-left">Trần Hoàng Khôi</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Khi những cơn mưa “lặng lẽ” rời đi, trả lại nắng vàng cho Đà Lạt cũng là lúc thành phố mù sương 
                                            khoác lên mình chiếc áo rực rỡ của những màu hoa, nổi bật là sắc vàng mùa hoa dã quỳ. Du lịch 
                                            Đà Lạt mùa này rất tuyệt, bạn không chỉ được ngắm hoa mà còn được săn mây, chill cùng núi rừng Tây Nguyên gió lộng…
                                        </p>
                                </td>
                                <td>21/11/2021</td>
                                <td class="not-lh"><img src="../Content/IMG/Tour/danang.jpg" alt="" class="img__tbl"></td>
                                <td>
                                    <a href="?ql=newsPage&updatenewsPage" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>18</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Bánh tôm, món đặc sản Hà Nội được CNN ca ngợi hết lời
                                        </p>
                                </td>
                                <td>Cẩm nang du lịch</td>
                                <td class="text-left">Trần Hoàng Khôi</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Một trong những nét đẹp của du lịch Hà Nội khiến bao người mê mẩn là nền ẩm thực. Trong đó, món 
                                            bánh tôm Hồ Tây là món ăn không nên bỏ qua khi đến Hà Nội, món ăn này cũng từng được CNN hết lời 
                                            khen ngợi trong chương trình “Destination”.
                                        </p>
                                </td>
                                <td>21/11/2021</td>
                                <td class="not-lh"><img src="../Content/IMG/Tour/hanoi.jpg" alt="" class="img__tbl"></td>
                                <td>
                                    <a href="?ql=newsPage&updatenewsPage" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>19</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Khám phá gì ở Đức sau khi du lịch nước ngoài mở cửa?
                                        </p>
                                </td>
                                <td>Cẩm nang du lịch</td>
                                <td class="text-left">Trần Hoàng Khôi</td>
                                <td class="text-left">
                                        <p class="tbl__desc-box text-left">
                                            Đức nổi tiếng là một trong các quốc gia ở Châu Âu có nhiều tòa lâu đài cổ, công trình 
                                            lịch sử tuyệt đẹp và phong cảnh nên thơ. Khi du lịch Đức bạn nhất định đừng quên khám phá 5 địa điểm này nha.
                                        </p>
                                </td>
                                <td>21/11/2021</td>
                                <td class="not-lh"><img src="../Content/IMG/Tour/hanoi.jpg" alt="" class="img__tbl"></td>
                                <td>
                                    <a href="?ql=newsPage&updatenewsPage" class="btn btn__tbl">Sửa</a>
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