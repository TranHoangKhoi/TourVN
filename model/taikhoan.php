<?php
      function insert_account($hoten, $cccd, $sdt, $email, $matkhau, $tp, $quan, $phuong, $dia_chi_cu_the) {
        $sql = "INSERT INTO tai_khoan(hoten, cccd, sdt, email, matkhau, tp, quan, phuong, dia_chi_cu_the) 
        VALUES ('$hoten', '$cccd', '$sdt', '$email', '$matkhau', '$tp', '$quan', '$phuong', '$dia_chi_cu_the')";
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
   
    //cập nhật tài khoản
     function update_account($hoten, $cccd, $sdt,$hinh_anh,$tp,$quan,$phuong,$dia_chi_cu_the,$ma_taikhoan){
      if($hinh_anh == '') {
        $sql = "UPDATE tai_khoan SET hoten= '$hoten', cccd = '$cccd', sdt = '$sdt', tp = '$tp', quan = '$quan', phuong = '$phuong', dia_chi_cu_the ='$dia_chi_cu_the' WHERE ma_taikhoan  =$ma_taikhoan" ;
    } else {
      $sql = "UPDATE tai_khoan SET hoten= '$hoten', cccd = '$cccd', sdt = '$sdt', tp = '$tp', hinh_anh='$hinh_anh' ,quan = '$quan', phuong = '$phuong', dia_chi_cu_the ='$dia_chi_cu_the' WHERE ma_taikhoan  =$ma_taikhoan" ;
     }
     pdo_execute($sql);
    }//gọi danh sách

    function list_account_count() {
      $sql="SELECT * FROM tai_khoan WHERE 1 AND vai_tro = 0";
      return pdo_query($sql);
    }

    function list_account($keyword,$email_acc, $starItem, $showItem) {
      $sql="SELECT * FROM tai_khoan WHERE 1 AND vai_tro=0";
      if($keyword!=""){
        $sql.=" AND hoten LIKE '%$keyword%'";
      }
      if($email_acc!=""){
        $sql.=" AND email LIKE '%$email_acc%'";
      }
      $sql.=" ORDER BY hoten DESC LIMIT $starItem,$showItem";
      return pdo_query($sql);
  }

  function list_account_admin_count() {
    $sql="SELECT * FROM tai_khoan WHERE 1 AND vai_tro=1";
    return pdo_query($sql);
  }

  function list_account_admin($keyword,$email_acc, $starItem, $showItem) {
    $sql="SELECT * FROM tai_khoan WHERE 1 AND vai_tro=1 ";
    if($keyword!=""){
      $sql.=" AND hoten LIKE '%$keyword%'";
    }
    if($email_acc!=""){
      $sql.=" AND email LIKE '%$email_acc%'";
    }
    $sql.=" ORDER BY hoten DESC LIMIT $starItem,$showItem";
    
    return pdo_query($sql);
  }
  
  //xõa tài khoản

    function delete_account($ma_taikhoan){
      $sql="DELETE FROM tai_khoan WHERE ma_taikhoan=".$ma_taikhoan;
      pdo_execute($sql);
    }
    
    // thêm tài khoản admin
    function add_admin($hoten,$matkhau,$cccd,$sdt,$email,$hinh_anh){
      $sql="INSERT INTO tai_khoan(hoten,matkhau, cccd, sdt, email,hinh_anh,vai_tro)
      VALUES ('$hoten','$matkhau','$cccd','$sdt','$email','$hinh_anh','1')";
      pdo_execute($sql);
    }
    // load dữ liệu lên form
    function load_account($ma_taikhoan) {
      $sql=  "SELECT * FROM tai_khoan WHERE ma_taikhoan = $ma_taikhoan";
      return pdo_query_one($sql);
    }
    function update_admin($hoten,$matkhau, $cccd, $sdt,$hinh_anh,$ma_taikhoan){
      if($hinh_anh == '') {
        $sql = "UPDATE tai_khoan SET hoten= '$hoten',matkhau='$matkhau', cccd = '$cccd', sdt = '$sdt' WHERE ma_taikhoan  =$ma_taikhoan" ;
    } else {
      $sql = "UPDATE tai_khoan SET hoten= '$hoten',matkhau='$matkhau', cccd = '$cccd', sdt = '$sdt', hinh_anh='$hinh_anh' WHERE ma_taikhoan  =$ma_taikhoan" ;
     }
     pdo_execute($sql);
    }
    //Tìm kiếm admin 
    // function find_admin($keyword){
    //   $sql="SELECT * FROM tai_khoan WHERE hoten LIKE '%$keyword%' ORDER BY hoten";
    //   return pdo_query_one($sql);
    // }
?>