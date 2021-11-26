    <main class="container">
    <?php include'subMenu.php' ?>


        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Danh sách các địa điểm</h3>
                </div>
                <div class="content__tap-main">
                    <table>
                        <thead>
                            <tr>
                                <th class="tbl-1">STT</th>
                                <th class="tbl-3">Tên địa điểm</th>
                                <th class="tbl-2">Mã Tỉnh</th>
                                <th class="tbl-2">Vùng miền</th>
                                <th class="tbl-1">Thao tác</th>
                                <th class="tbl-1">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-left">Cần Thơ</td>
                                <td>65</td>
                                <td>Miền Tây</td>
                                <td>
                                    <a href="?ql=local&updateLocal" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td class="text-left">Bến Tre</td>
                                <td>72</td>
                                <td>Miền Tây</td>
                                <td>
                                    <a href="?ql=local&updateLocal" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td class="text-left">Hòn Sơn</td>
                                <td>68</td>
                                <td>Miền Tây</td>
                                <td>
                                    <a href="?ql=local&updateLocal" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td class="text-left">Đà Nẵng</td>
                                <td>17</td>
                                <td>Miền Trung</td>
                                <td>
                                    <a href="?ql=local&updateLocal" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td class="text-left">Hà Nội</td>
                                <td>37</td>
                                <td>Miền Bắc</td>
                                <td>
                                    <a href="?ql=local&updateLocal" class="btn btn__tbl">Sửa</a>
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