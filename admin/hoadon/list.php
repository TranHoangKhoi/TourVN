<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">

            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách hóa đơn</h3>
                </div>
                <div class="content__tap-main">
                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-0-5">STT</th>
                                <th class="tbl-1">Mã hóa đơn</th>
                                <th class="tbl-1">Mã tài khoản</th>
                                <th class="tbl-1">Mã tour</th>
                                <th class="tbl-1">Tổng tiền</th>
                                <th class="tbl-1">Ngày thanh toán</th>
                                <th class="tbl-1">Ngày khởi hành</th>
                                <th class="tbl-1">Giờ khởi hành</th>
                                <th class="tbl-1">Nơi khởi hành</th>
                                <th class="tbl-2">Ghi chú</th>
                                <th class="tbl-0-5">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td >HD-DN-001</td>
                                <td >13</td>
                                <td>DN-001</td>
                                <td>6,890,000 VNĐ</td>
                                <td>21/12/2021</td>
                                <td>25/12/2021</td>
                                <td>08:00 AM</td>
                                <td>Cần Thơ</td>
                                <td>
                                    <div class="tbl__desc-box text-left">
                                    Xin chào Hãng du lịch Vietravel! Tôi là Nguyễn Phương Thảo, ngày hôm nay là ngày cuối cùng trong chuyến du lịch Sapa, hành trình 03 ngày (20/04 – 22/4) của đoàn chi nhánh Công ty Cổ phần Thương mại XNK Thủ Đức – Cửa 
                                    hàng kinh doanh xe gắn máy. Cảm xúc của tôi lúc này là rất hài lòng với chương trình 03 ngày mà tour đã xây dựng trên mức hoàn hảo. 
                                    Tổ phục vụ hướng dẫn quá nhiệt tình, chu đáo, giỏi và hiểu rõ tâm lý khách hàng. Tôi cũng là người hỗ trợ các anh Hướng dẫn viên khi cần.
                                     Tôi thật sự ngạc nhiên và nể phục các anh trong công việc này. Điển hình là HDV Nguyễn Văn Út rất duyên dáng, vui tính, tận tâm và đa tài tạo nên buổi Gala thành công trên mức tuyệt vời. Thành thật cảm ơn anh rất nhiều
                                    </div>
                                </td>
                                <td>
                                    <a href="index.php?ql=tourBill&detials" class="btn btn__tbl">Chi tiết</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="pagination__block">
                    <div class="pagination__list">
                        <div class="pagination__prev">
                            <a href="" class="pagination__item pagination__prev-item">
                                <i class="pagination__prev-icon"><ion-icon name="arrow-dropleft"></ion-icon></i>
                            </a>
                        </div>
        
                        <div class="pagination__num">
                            <a href="" class="pagination__item active pagination__num-item">1</a>
                            <a href="" class="pagination__item pagination__num-item">2</a>
                            <a href="" class="pagination__item pagination__num-item">3</a>
                        </div>
        
                        <div class="pagination__next">
                            <a href="" class="pagination__item pagination__next-item">
                                <i class="pagination__next-icon"><ion-icon name="arrow-dropright"></ion-icon></i>
                            </a>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </main>