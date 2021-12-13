<?php 
    // Add bill
    function add_bill($ma_taikhoan, $gia_tien, $ho_ten_kh, $email_kh, $sdt_kh, $dia_chi_kh, $ma_tour, $ngay_khoi_hanh, $gio_khoi_hanh, $noi_khoi_hanh, $ghi_chu) {
        $sql = "INSERT INTO hoa_don(ma_taikhoan, gia_tien, ho_ten_kh, email_kh, sdt_kh, dia_chi_kh, ma_tour, ngay_khoi_hanh, gio_khoi_hanh, noi_khoi_hanh, ghi_chu) 
        VALUES ('$ma_taikhoan', '$gia_tien', '$ho_ten_kh', '$email_kh', '$sdt_kh', '$dia_chi_kh', '$ma_tour', '$ngay_khoi_hanh',' $gio_khoi_hanh', '$noi_khoi_hanh', '$ghi_chu')" ;
        return pdo_execute_lastInsertId($sql);
    }

    // Add Ticket
    function add_tickets($ma_tour, $ma_kh, $ma_hd , $hoten_kh, $giave_kh, $ngay_khoi_hanh, $gio_khoi_hanh, $noi_khoi_hanh, $loai_ve) {
        $sql = "INSERT INTO ve(ma_tour, ma_kh, ma_hd , hoten_kh, giave_kh, ngay_khoi_hanh, gio_khoi_hanh, noi_khoi_hanh, loai_ve)
        VALUES ('$ma_tour', '$ma_kh', '$ma_hd' , '$hoten_kh', '$giave_kh', '$ngay_khoi_hanh', '$gio_khoi_hanh', '$noi_khoi_hanh', '$loai_ve')";
        pdo_execute($sql);
    }

    // Đếm
    function get_bill_by_ma_tk_count($ma_taikhoan) {
        $sql = "SELECT * FROM hoa_don WHERE ma_taikhoan  = $ma_taikhoan";
        return pdo_query($sql);
    }

    // By mã tài khoản
    function get_bill_by_ma_tk($ma_taikhoan, $startItem, $showItem) {
        $sql = "SELECT * FROM hoa_don WHERE ma_taikhoan  = $ma_taikhoan ORDER BY ma_hd DESC LIMIT $startItem,$showItem";
        return pdo_query($sql);
    }

    // By mã hóa đơn
    function get_ticket_by_ma_hd($ma_hd) {
        $sql = "SELECT * FROM ve WHERE ma_hd  = $ma_hd ORDER BY ma_hd DESC";
        return pdo_query($sql);
    }
?>