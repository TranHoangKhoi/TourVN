<?php
      function insert_account($hoten, $cccd, $sdt, $email, $matkhau, $tp, $quan, $phuong) {
        $sql = "INSERT INTO tai_khoan(hoten, cccd, sdt, email, matkhau, tp, quan, phuong) 
        VALUES ('$hoten', '$cccd', '$sdt', '$email', '$matkhau', '$tp', '$quan', '$phuong')";
        pdo_execute($sql);
    }

    function check_account($email,$matkhau){
         $sql=  "SELECT * FROM tai_khoan WHERE email='".$email."' AND matkhau='".$matkhau."'";
         return pdo_query_one($sql);
    }


?>