<?php
    // Thêm thông tin tour
    function add_info_tour($loai_tour, $tieu_de, $goi_ngay, $ngay_khoihanh, $gio_khoihanh, $ngay_ve, $gia_treem, $gia_nguoilon, $soluong, $noi_tap_trung, $khuyen_mai) {
        $sql = "INSERT INTO tour_du_lich(loai_tour, tieu_de, goi_ngay, ngay_khoihanh, gio_khoihanh, ngay_ve, gia_treem, gia_nguoilon, soluong, noi_tap_trung, khuyen_mai) VALUES ('$loai_tour', '$tieu_de', '$goi_ngay', '$ngay_khoihanh', '$gio_khoihanh', '$ngay_ve', '$gia_treem', '$gia_nguoilon', '$soluong', '$noi_tap_trung', '$khuyen_mai')";
        return pdo_execute_lastInsertId($sql);
    }

    // Thêm hành trình
    function add__journeys($ma_tour, $ma_dia_diem, $tieu_de, $ngay_di, $mota) {
        $sql = "INSERT INTO hanh_trinh(ma_tour, ma_dia_diem, tieu_de, ngay_di, mota) VALUES ('$ma_tour', '$ma_dia_diem', '$tieu_de', '$ngay_di', '$mota')";
        pdo_execute($sql);
    }

    // Thêm hình tour
    function add_img_tour($ten_hinh, $ma_tour) {
        $sql = "INSERT INTO hinh_anh_tour(ten_hinh , ma_tour) VALUES ('$ten_hinh', '$ma_tour')";
        pdo_execute($sql);
    }
?>