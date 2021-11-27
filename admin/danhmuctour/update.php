<?php
if (is_array($list_ones)) {
    extract($list_ones);
    // show hình ảnh
    $hinhpath = "../Upload/" . $hinh_anh; //đặt biến tạm
    if (is_file($hinhpath)) {
        $hinh = "<img src='" . $hinhpath . "' height='200'>";
    } else {
        $hinh = "no photo";
    }
}
?>

<main class="container">
    <?php include 'subMenu.php' ?>

    <div class="content__body">
        <div class="content__tap active">
            <div class="content__tap-heading">
                <h3 class="content__tap-heading-text">Cập nhật danh mục tour</h3>
            </div>
            <div class="content__tap-main">
                <form action="" class="form-box" method="POST">
                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryName" class="form-label">Tên danh mục</label>
                            <input type="text" id="categoryName" name="categoryName" class="input-control" placeholder="VD: Tour biển đảo" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="localiMage2" class="form-label">Hình ảnh</label>
                            <label for="localiMage2" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện danh mục</label>
                            <input type="file" id="localiMage2" name="localiMage2" class="input-control-img" value="<?php if (isset($hinh) && ($hinh != "")) echo $hinh; ?>">
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <div class="form-field">
                            <label for="categoryDesc" class="form-label">Mô tả</label>
                            <textarea name="categoryDesc" id="" cols="30" rows="10" maxlength="300" value="<?php if (isset($mota) && ($mota != "")) echo $mota; ?>" class="input-control--textarea" placeholder="Mô tả"></textarea>
                        </div>
                        <span class="test-masage"></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-form" name="capnhat" value="Cập nhật">
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>