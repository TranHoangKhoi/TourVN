<?php

// Kiểm tra khong được bỏ trống thông tin đăng ký
    function check_not_null($hoten,$matkhau,$email,$sdt,$cccd){
        if (!$hoten || !$matkhau || !$email || !$sdt || !$cccd)
        {
            echo "<H1 style="."text-align:center;"." >Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a><H1>";
            exit;
        }
    }
    // kiểm tra xem email đã đúng định dạng hay chưa
    function check_email_valid($email){
        if (!mb_eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "<H1 style="."text-align:center;"." >Email không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a><H1>";
        exit;
    }
      
}
    //Kiểm tra email đã được sử dụng hay chưa
    function check_email_isset($email){
     
    }

    function check_phone_valid($sdt){
        // if (!mb_eregi("/^[\.-)( ]*([0-9]{3})[\.-)( ]*([0-9]{3})[\.-)( ]*([0-9]{4})$/", $sdt))
        // {
        //     echo "<H1 style="."text-align:center;"." >Số điện thoại không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a><H1>";
        //     exit;
        // }
    }
    

?>