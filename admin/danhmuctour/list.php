<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">

        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách danh mục tour</h3>
            </div>
            <div class="content__tap-main">
                <table>
                    <thead>
                        <tr>
                            <th class="tbl-1">STT</th>
                            <th class="tbl-3">Tên danh mục</th>
                            <th class="tbl-1">Hình ảnh</th>
                            <th class="tbl-3">Mô tả</th>
                            <th class="tbl-1">Thao tác</th>
                            <th class="tbl-1">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_category as $category) {
                            extract($category);
                            $hinh = $img_path . $img;
                            if (is_file($hinh)) {
                                $anh = "<img src='" .  $hinh . "'>";
                            } else {
                                $anh = "Không có hình";
                            }
                            $delete_cate = "index.php?ql=tourCate&deleteCate&ma_loai=" . $ma_loai;
                            $update_cate = "index.php?ql=tourCate&updateCate&ma_loai=" . $ma_loai;

                            echo '   <tr>
                                <td>' . $ma_loai . '</td>
                                <td class="text-left">' . $ten_loai . '</td>
                                <td class="not-lh">' . $anh . '</td>
                                <td class="tbl__desc">
                                    <p class="tbl__desc-box text-left">
                                        ' . $mota . '
                                    </p>
                                </td>
                              
                                <td>
                                    <a href="' . $update_cate . '" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="' . $delete_cate . '" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>';
                        }

                        ?>
                        <!-- <tr>
                                <td>2</td>
                                <td class="text-left">Tour hành xe tự lái</td>
                                <td class="not-lh"><img src="../Content/IMG/Category/txcanva.jpg" alt="" class="img__tbl"></td>
                                <td class="tbl__desc">
                                    <p class="tbl__desc-box text-left">
                                        I haven't realized until now that almost 90% of the hidden gems in my playlist came from Syrex. This is another one.
                                    </p>
                                </td>
                                <td>
                                    <a href="?ql=tourCate&updateCate" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td class="text-left">Tour hành văn hóa Việt Nam</td>
                                <td class="not-lh"><img src="../Content/IMG/Category/htx.jfif" alt="" class="img__tbl"></td>
                                <td class="tbl__desc">
                                    <p class="tbl__desc-box text-left">
                                        Edm is Electric Dance music which is literally this. My favorite genres are Edm
                                    </p>
                                </td>
                                <td>
                                    <a href="?ql=tourCate&updateCate" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td class="text-left">Tour hành thanh lọc cơ thể</td>
                                <td class="not-lh"><img src="../Content/IMG/Category/ttlct.jpg" alt="" class="img__tbl"></td>
                                <td class="tbl__desc">
                                    <p class="tbl__desc-box text-left">
                                        This music feels like you were in different world specially if you were wearing headphones! I love it!!💖✨
                                    </p>
                                </td>
                                <td>
                                    <a href="?ql=tourCate&updateCate" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr>

                            <tr>

                                <td>5</td>
                                <td class="text-left">Tour Biển đảo</td>
                                <td class="not-lh"><img src="../Content/IMG/Category/tbd.jpg" alt="" class="img__tbl"></td>
                                <td>
                                    <p class="tbl__desc-box text-left">
                                        I love my twin sweetie, we are currently listening to this mashup, i hope we 
                                        will be this close next year as we are now. I dont want to loose her 💕
                                    </p>
                                </td>
                                <td>
                                    <a href="?ql=tourCate&updateCate" class="btn btn__tbl">Sửa</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn__tbl">Xóa</a>
                                </td>
                            </tr> -->
                    </tbody>
                </table>
            </div>

            <div class="pagination__block">
                <div class="pagination__list">
                    <div class="pagination__prev">
                        <a href="" class="pagination__item pagination__prev-item">
                            <i class="pagination__prev-icon">
                                <ion-icon name="arrow-dropleft"></ion-icon>
                            </i>
                        </a>
                    </div>

                    <div class="pagination__num">
                        <a href="" class="pagination__item active pagination__num-item">1</a>
                        <a href="" class="pagination__item pagination__num-item">2</a>
                        <a href="" class="pagination__item pagination__num-item">3</a>
                    </div>

                    <div class="pagination__next">
                        <a href="" class="pagination__item pagination__next-item">
                            <i class="pagination__next-icon">
                                <ion-icon name="arrow-dropright"></ion-icon>
                            </i>
                        </a>
                    </div>

                </div>
            </div>
        </div>


    </div>




</main>