<?php
      function insert_account($hoten, $cccd, $sdt, $email, $matkhau, $tp, $quan, $phuong) {
        $sql = "INSERT INTO tai_khoan(hoten, cccd, sdt, email, matkhau, tp, quan, phuong) 
        VALUES ('$hoten', '$cccd', '$sdt', '$email', '$matkhau', '$tp', '$quan', '$phuong')";
        pdo_execute($sql);
    }

    function check_account($email,$matkhau){
         $sql=  "SELECT * FROM tai_khoan WHERE email= '$email' AND matkhau= '$matkhau' ";
         return pdo_query_one($sql);
    }

    function check_pass($pass, $ma_taikhoan) {
      $sql=  "SELECT * FROM tai_khoan WHERE matkhau= '$pass' AND ma_taikhoan = $ma_taikhoan";
      return pdo_query_one($sql);
    }

    function update_pass($pass, $ma_taikhoan) {
      $sql = "UPDATE tai_khoan SET matkhau = '$pass' WHERE ma_taikhoan = '$ma_taikhoan'";
      pdo_execute($sql);
    }

    function load_account($ma_taikhoan) {
      $sql=  "SELECT * FROM tai_khoan WHERE ma_taikhoan = $ma_taikhoan";
      return pdo_query_one($sql);
    }

     function update_account($hoten, $cccd, $sdt,$hinh_anh,$tp,$quan,$phuong,$dia_chi_cu_the,$ma_taikhoan){
      if($hinh_anh == '') {
        $sql = "UPDATE tai_khoan SET hoten= '$hoten', cccd = '$cccd', sdt = '$sdt', tp = '$tp', quan = '$quan', phuong = '$phuong', dia_chi_cu_the ='$dia_chi_cu_the' WHERE ma_taikhoan  =$ma_taikhoan" ;
    } else {
      $sql = "UPDATE tai_khoan SET hoten= '$hoten', cccd = '$cccd', sdt = '$sdt', tp = '$tp', hinh_anh='$hinh_anh' ,quan = '$quan', phuong = '$phuong', dia_chi_cu_the ='$dia_chi_cu_the' WHERE ma_taikhoan  =$ma_taikhoan" ;
     }
     pdo_execute($sql);
    }

?>