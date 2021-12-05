<?php
    function add_news($maLoai, $maTaiKhoan, $tieuDe, $tom_tat, $noiDung, $hinhAnh) {
        $sql = "INSERT INTO tin_tuc(ma_loai, ma_taikhoan, tieu_de, tom_tat, noi_dung, hinh_anh) VALUES ('$maLoai', '$maTaiKhoan', '$tieuDe', '$tom_tat', '$noiDung', '$hinhAnh')";
        pdo_execute($sql);
    }

    function load_all_news() {
        $sql = "SELECT * FROM tin_tuc ORDER BY ma_tin DESC";
        return pdo_query($sql);
    }

    function load_all_news_limit() {
        $sql = "SELECT * FROM tin_tuc ORDER BY ma_tin DESC LIMIT 0,10";
        return pdo_query($sql);
    }

    function load_one_news($ma_tin) {
        $sql = "SELECT * FROM tin_tuc WHERE ma_tin = $ma_tin";
        return pdo_query_one($sql);
    }

    function load_news_by_ma_loai($ma_loai ) {
        $sql = "SELECT * FROM tin_tuc WHERE ma_loai  = $ma_loai ";
        return pdo_query($sql);
    }

    function get_news($starItem, $itemNum, $maLoai) {
        if($maLoai > 0) {
            $sql = "SELECT * FROM tin_tuc WHERE ma_loai = $maLoai ORDER BY ma_tin DESC LIMIT $starItem,$itemNum";
        }else {
            $sql = "SELECT * FROM tin_tuc ORDER BY ma_tin DESC LIMIT $starItem,$itemNum";
        }
        return pdo_query($sql);
    }

    function delete_news($ma_tin) {
        $sql = "DELETE FROM tin_tuc WHERE ma_tin = $ma_tin";
        pdo_execute($sql);
    }

    function update_news_page($ma_loai, $tieu_de, $tom_tat, $noi_dung, $hinh_anh, $ma_tin) {
        if($hinh_anh == '') {
            $sql = "UPDATE tin_tuc SET ma_loai = $ma_loai, tieu_de = '$tieu_de', tom_tat = '$tom_tat', noi_dung = '$noi_dung' WHERE ma_tin = $ma_tin";
        } else {
            $sql = "UPDATE tin_tuc SET ma_loai = $ma_loai, tieu_de = '$tieu_de', tom_tat = '$tom_tat', noi_dung = '$noi_dung', hinh_anh = '$hinh_anh' WHERE ma_tin = $ma_tin";
        }
        pdo_execute($sql);
    }
?>