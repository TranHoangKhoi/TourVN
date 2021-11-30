<?php 
    function get_user($ma_taikhoan) {
        $sql = "SELECT * FROM tai_khoan WHERE ma_taikhoan = $ma_taikhoan";
        return pdo_query_one($sql);
    }
?>