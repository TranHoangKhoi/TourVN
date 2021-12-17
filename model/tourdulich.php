<?php
    // Thêm thông tin tour
    function add_info_tour($loai_tour, $tieu_de, $ma_mien, $goi_ngay, $ngay_khoihanh, $gio_khoihanh, $ngay_ve, $gia_treem, $gia_nguoilon, $soluong, $noi_tap_trung, $khuyen_mai, $gioi_thieu) {
        $sql = "INSERT INTO tour_du_lich(loai_tour, tieu_de, ma_mien, goi_ngay, ngay_khoihanh, gio_khoihanh, ngay_ve, gia_treem, gia_nguoilon, soluong, noi_tap_trung, khuyen_mai, gioi_thieu)
        VALUES ('$loai_tour', '$tieu_de', '$ma_mien', '$goi_ngay', '$ngay_khoihanh', '$gio_khoihanh', '$ngay_ve', '$gia_treem', '$gia_nguoilon', '$soluong', '$noi_tap_trung', '$khuyen_mai', '$gioi_thieu')";
        return pdo_execute_lastInsertId($sql);
    }

    // Thêm hành trình
    function add__journeys($ma_tour, $ma_dia_diem, $tieu_de, $ngay_di, $noi_dung) {
        $sql = "INSERT INTO hanh_trinh(ma_tour, ma_dia_diem, tieu_de, ngay_di, noi_dung) VALUES ('$ma_tour', '$ma_dia_diem', '$tieu_de', '$ngay_di', '$noi_dung')";
        pdo_execute($sql);
    }

    // Thêm hình tour
    function add_img_tour($ten_hinh, $ma_tour) {
        $sql = "INSERT INTO hinh_anh_tour(ten_hinh , ma_tour) VALUES ('$ten_hinh', '$ma_tour')";
        pdo_execute($sql);
    }

    // Load All tour 
    function load_all_tour_trip($startItem, $showItem) {
        $sql = "SELECT * FROM tour_du_lich ORDER BY ma_tour DESC LIMIT $startItem,$showItem";
        return pdo_query($sql);
    }

    function load_all_tour_trip_count($selectTourCate, $tourID) {
        if($selectTourCate > 0) {
            $sql = "SELECT * FROM tour_du_lich WHERE loai_tour = $selectTourCate ORDER BY ma_tour DESC";
        } elseif($tourID != '' && $tourID > 0) {
            $sql = "SELECT * FROM tour_du_lich WHERE ma_tour = $tourID ORDER BY ma_tour DESC";
        } else {
            $sql = "SELECT * FROM tour_du_lich ORDER BY ma_tour DESC ";
        }
        return pdo_query($sql);
    }

    function get_tour_trip($startItem, $showItem, $tourCate, $tourID) {
        if($tourCate > 0) {
            $sql = "SELECT * FROM tour_du_lich WHERE loai_tour = $tourCate ORDER BY ma_tour DESC LIMIT $startItem,$showItem";
        } elseif($tourID != '' && $tourID > 0) {
            $sql = "SELECT * FROM tour_du_lich WHERE ma_tour = $tourID ORDER BY ma_tour DESC LIMIT $startItem,$showItem";
        } else {
            $sql = "SELECT * FROM tour_du_lich WHERE 1 ORDER BY ma_tour DESC LIMIT $startItem,$showItem";
        }
        return pdo_query($sql);
    }

    function delete_info_tour($ma_tour) {
        $sql = "DELETE FROM tour_du_lich WHERE ma_tour = $ma_tour";
        pdo_execute($sql);
    }

    function delete_img_tour($ma_tour) {
        $sql = "DELETE FROM hinh_anh_tour WHERE ma_tour = $ma_tour";
        pdo_execute($sql);
    }

    function delete_journeys($ma_tour) {
        $sql = "DELETE FROM hanh_trinh WHERE ma_tour = $ma_tour";
        pdo_execute($sql);
    }

    function get_tour_info($ma_tour) {
        $sql = "SELECT * FROM tour_du_lich WHERE ma_tour = $ma_tour";
        return pdo_query_one($sql);
    }

    function get_tour_info_by_side_count($ma_mien) {
        $sql = "SELECT * FROM tour_du_lich WHERE ma_mien  = $ma_mien ";
        return pdo_query($sql);
    }

    function get_tour_info_by_side($ma_mien, $startItem, $showItem) {
        $sql = "SELECT * FROM tour_du_lich WHERE ma_mien  = $ma_mien LIMIT $startItem,$showItem";
        return pdo_query($sql);
    }

    function get_tour_info_by_cate_count($loai_tour) {
        $sql = "SELECT * FROM tour_du_lich WHERE loai_tour = $loai_tour";
        return pdo_query($sql);
    }

    function get_tour_info_by_cate($loai_tour , $startItem, $showItem) {
        $sql = "SELECT * FROM tour_du_lich WHERE loai_tour = $loai_tour  LIMIT $startItem,$showItem";
        return pdo_query($sql);
    }

    function get_img_tour($ma_tour) {
        $sql = "SELECT * FROM hinh_anh_tour WHERE ma_tour = $ma_tour";
        return pdo_query($sql);
    }

    function get_journeys($ma_tour) {
        $sql = "SELECT * FROM hanh_trinh WHERE ma_tour = $ma_tour ORDER BY ngay_di ASC";
        return pdo_query($sql);
    }

    function get_journeys_by_local_count($ma_dia_diem) {
        $sql = "SELECT * FROM hanh_trinh WHERE ma_dia_diem = $ma_dia_diem";
        return pdo_query($sql);
    }

    function get_journeys_by_local($ma_dia_diem, $startItem, $showItem) {
        $sql = "SELECT * FROM hanh_trinh WHERE ma_dia_diem = $ma_dia_diem LIMIT $startItem,$showItem";
        return pdo_query($sql);
    }

    function update_img_tour($ma_hinh, $hinh_anh) {
        $sql = "UPDATE hinh_anh_tour SET ten_hinh = '$hinh_anh' WHERE ma_hinh = $ma_hinh";
        pdo_execute($sql);
    }

    function update_tour_journeys($ma_dia_diem, $tieu_de, $ngay_di, $noi_dung, $ma_hanh_trinh ) {
        $sql = "UPDATE hanh_trinh SET ma_dia_diem  = '$ma_dia_diem', tieu_de = '$tieu_de', ngay_di = '$ngay_di', noi_dung = '$noi_dung' WHERE ma_hanh_trinh  = $ma_hanh_trinh";
        pdo_execute($sql);
    }

    function update_tour_info($loai_tour, $tieu_de, $ma_mien, $goi_ngay, $ngay_khoihanh, $gio_khoihanh, $ngay_ve, $gia_treem, $gia_nguoilon, $soluong, $noi_tap_trung, $khuyen_mai , $ma_tour, $gioi_thieu) {
        $sql = "UPDATE tour_du_lich SET loai_tour= '$loai_tour', tieu_de = '$tieu_de', ma_mien = '$ma_mien', goi_ngay = '$goi_ngay', 
        ngay_khoihanh = '$ngay_khoihanh', gio_khoihanh = '$gio_khoihanh', ngay_ve = '$ngay_ve', gia_treem = '$gia_treem', gia_nguoilon = '$gia_nguoilon', 
        soluong = '$soluong', noi_tap_trung = '$noi_tap_trung', khuyen_mai= '$khuyen_mai', gioi_thieu = '$gioi_thieu'  WHERE ma_tour   = $ma_tour ";
        pdo_execute($sql);
    }

    function load_tour_speacial() {
        $sql = "SELECT * FROM tour_du_lich WHERE 1 ORDER BY khuyen_mai DESC LIMIT 0,5";
        return pdo_query($sql);
    }

    function find_count($keyword) {
        $sql="SELECT * FROM tour_du_lich WHERE tieu_de LIKE '%$keyword%' ORDER BY tieu_de";
        return pdo_query($sql);
    }

    function find($keyword, $startItem,$showItem) {
        $sql="SELECT * FROM tour_du_lich WHERE tieu_de LIKE '%$keyword%' ORDER BY tieu_de LIMIT $startItem,$showItem";
        return pdo_query($sql);
    }
