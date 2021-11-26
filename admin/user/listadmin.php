<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách admin</h3>
                </div>

                <div class="content__tap-main">
                    <div class="table__control">
                        <form action="" class="table__control-group">
                            <div class="filter__id-tour">
                                <input type="text" name="" id="" class="filter__id-tour--input" placeholder="Nhập tên admin...">
                            </div>
                            <span>Hoặc tìm theo</span>
                            <div class="filter__id-tour">
                                <input type="text" name="" id="" class="filter__id-tour--input" placeholder="Nhập mã admin...">
                            </div>
                            
                            <button class="btn filter__tour--btn">Tìm</button>
                        </form>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-1">STT</th>
                                <th class="tbl-2">Họ tên</th>
                                <th class="tbl-1">Số ĐT</th>
                                <th class="tbl-2">Email</th>
                                <th class="tbl-1">Hình ảnh</th>
                                <th class="tbl-1">Thao tác</th>
                                <th class="tbl-1">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-left">Trần Hoàng Khôi</td>
                                <td>0903*******</td>
                                <td>khoithpc02042@gmail.com</td>
                                <td class="not-lh"><img src="../Content/IMG/Usser/user2.jpg" alt="" class="img__tbl"></td>

                                <td>
                                    <a href="?ql=user&updateacc" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td class="text-left">Phạm Nhật Vượng</td>
                                <td>0903*******</td>
                                <td>vuongdz@gmail.com</td>
                                <td class="not-lh"><img src="../Content/IMG/Usser/user3.jpg" alt="" class="img__tbl"></td>

                                <td>
                                    <a href="?ql=user&updateacc" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td class="text-left">Khoa PUG</td>
                                <td>0903*******</td>
                                <td>khoadz@gmail.com</td>
                                <td class="not-lh"><img src="../Content/IMG/Usser/user3.jpg" alt="" class="img__tbl"></td>

                                <td>
                                    <a href="?ql=user&updateacc" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td class="text-left">Jonny Dang</td>
                                <td>0903*******</td>
                                <td>dangdiomond@gmail.com</td>
                                <td class="not-lh"><img src="../Content/IMG/Usser/user3.jpg" alt="" class="img__tbl"></td>

                                <td>
                                    <a href="?ql=user&updateacc" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td class="text-left">Sơn Tùng</td>
                                <td>0903*******</td>
                                <td>tungmtp@gmail.com</td>
                                <td class="not-lh"><img src="../Content/IMG/Usser/user3.jpg" alt="" class="img__tbl"></td>

                                <td>
                                    <a href="?ql=user&updateacc" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
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