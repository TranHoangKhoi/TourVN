<?php
function add_local($ma_mien, $ten_diadiem, $mota, $ma_tinh, $hinh_anh, $dac_biet) {
    $sql = "INSERT INTO dia_diem(ma_mien, ten_diadiem, mota, ma_tinh, hinh_anh, dac_biet) VALUES ('$ma_mien', '$ten_diadiem', '$mota', '$ma_tinh', '$hinh_anh', '$dac_biet')";
    pdo_execute($sql);
}

function load_all_local($keyword) {
    $sql = "SELECT * FROM dia_diem WHERE 1 ";
       if($keyword!=''){
        $sql.=" AND ten_diadiem LIKE '%$keyword%'";
      }
      $sql.=" ORDER BY ten_diadiem DESC";
      return pdo_query($sql);
}

function load_local_by_side($ma_mien) {
    $sql = "SELECT * FROM dia_diem WHERE ma_mien = $ma_mien ORDER By ma_diadiem DESC LIMIT 0,5";
    return pdo_query($sql);
}

function load_local_by_side_not_limit($ma_mien) {
    $sql = "SELECT * FROM dia_diem WHERE ma_mien = $ma_mien ORDER By ma_diadiem DESC LIMIT 0,5";
    return pdo_query($sql);
}

function load_one_local($ma_diadiem) {
    $sql = "SELECT * FROM dia_diem WHERE ma_diadiem = $ma_diadiem";
    return pdo_query_one($sql);
}

function load_local_by_special() {
    $sql = "SELECT * FROM dia_diem WHERE dac_biet = 1";
    return pdo_query($sql);
}

function load_local_by_special_limit() {
    $sql = "SELECT * FROM dia_diem WHERE dac_biet = 1 LIMIT 0,4";
    return pdo_query($sql);
}

function get_local($starItem, $itemNum) {
    $sql = "SELECT * FROM dia_diem ORDER By ma_diadiem LIMIT $starItem,$itemNum";
    return pdo_query($sql);
}

function delete_local($ma_diadiem) {
    $sql = "DELETE FROM dia_diem WHERE ma_diadiem = $ma_diadiem";
    pdo_execute($sql);
}

function update_local($ten_diadiem, $ma_mien, $mota, $hinh_anh, $ma_tinh, $dac_biet, $ma_diadiem) {
    if($hinh_anh == '') {
        $sql = "UPDATE dia_diem SET ten_diadiem = '$ten_diadiem', ma_mien = '$ma_mien', mota= '$mota', ma_tinh = '$ma_tinh', dac_biet = '$dac_biet'  WHERE ma_diadiem= $ma_diadiem";
    } else {
        $sql = "UPDATE dia_diem SET ten_diadiem = '$ten_diadiem', ma_mien = '$ma_mien', mota= '$mota', hinh_anh = '$hinh_anh', ma_tinh = '$ma_tinh', dac_biet = '$dac_biet'  WHERE ma_diadiem= $ma_diadiem";
    }
    pdo_execute($sql);
}

?>