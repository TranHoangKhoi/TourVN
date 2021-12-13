<?php 
    function get_user($cccd) {
        $sql = "SELECT * FROM khach_hang WHERE cccd = $cccd";
        return pdo_query_one($sql);
    }

    // Get user
    function get_user_by_maTk($ma_taikhoan) {
        $sql = "SELECT * FROM tai_khoan WHERE ma_taikhoan = $ma_taikhoan";
        return pdo_query_one($sql);
    }

    // Thêm khách hàng
    function add_custom($hoten, $cccd, $sdt, $diachi, $gioi_tinh, $ngay_sinh) {
        $sql = "INSERT INTO khach_hang(hoten, cccd, sdt, diachi, gioi_tinh, ngay_sinh) 
        VALUES ('$hoten', '$cccd', '$sdt', '$diachi', '$gioi_tinh', '$ngay_sinh')";
        pdo_execute($sql);
    }
    // 
    function add_custom_and_get($hoten, $cccd, $sdt, $diachi, $gioi_tinh, $ngay_sinh) {
        $sql = "INSERT INTO khach_hang(hoten, cccd, sdt, diachi, gioi_tinh, ngay_sinh) 
        VALUES ('$hoten', '$cccd', '$sdt', '$diachi', '$gioi_tinh', '$ngay_sinh')";
        return pdo_execute_lastInsertId($sql);
    }
?>