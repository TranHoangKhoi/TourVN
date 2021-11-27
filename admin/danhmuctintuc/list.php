<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Danh sách danh mục tin tức</h3>
            </div>
            <div class="content__tap-main">
                <table>
                    <thead>
                        <tr>
                            <th class="tbl-2">STT</th>
                            <th class="tbl-4">Tên danh mục</th>
                            <th class="tbl-2">Thao tác</th>
                            <th class="tbl-2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_news as $news) {
                            extract($news);
                            $delete_news = "index.php?ql=newsCate&deletenewsCate&ma_loai=" . $ma_loai;
                            $update_news = "index.php?ql=newsCate&updatenewsCate&ma_loai=" . $ma_loai;
                            echo '
                            <tr>
                                <td>' . $ma_loai . '</td>
                                <td class="text-left">' . $ten_loai . '</td>
                                <td>
                                    <a href="' . $update_news . '" class="btn btn__tbl">Sửa</a>
                                </td>

                                <td>
                                    <a href="' . $delete_news . '" >Xóa</a>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>