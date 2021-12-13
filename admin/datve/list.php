<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách đặt vé</h3>
                </div>

                <div class="content__tap-main">
                    <div class="table__control">
                        <form action="" class="table__control-group">
                            <div class="filter__id-tour">
                                <input type="text" name="" id="" class="filter__id-tour--input" placeholder="Nhập mã vé...">
                            </div>                            
                            <button class="btn filter__tour--btn">Tìm</button>
                        </form>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-0-5">STT</th>
                                <th class="tbl-1">Mã tour</th>
                                <th class="tbl-2">Tên tour</th>
                                <th class="tbl-1">Ngày khởi hành</th>
                                <th class="tbl-1">Giờ khởi hành</th>
                                <th class="tbl-1">Ngày về</th>
                                <th class="tbl-1">Nơi khởi hành</th>
                                <th class="tbl-0-5">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PC02042</td>
                                <td class="text-left">Tour Đà Lạt</td>
                                <td>21/11/2021</td>
                                <td>08:00 AM</td>
                                <td>25/12/2021</td>
                                <td>TP Hồ Chí Minh</td>
                                <td>
                                    <a href="index.php?ql=tourTicket&details" class="btn btn__tbl">Chi tiết</a>
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