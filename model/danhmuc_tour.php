<?php
function insert_tour($tenloai, $mota, $hinhanh)
{
    $sql = "INSERT INTO loai_tour (ten_loai,mota,hinh_anh) VALUES ('$tenloai','$mota','$hinhanh')";
    pdo_execute($sql);
}
// load danh sách tour từ cơ sở dữ liệu
function load_all_tour()
{
    $sql = "SELECT * from loai_tour order by ma_loai  ";
    $list_category = pdo_query($sql);
    return $list_category;
}
// hàm xóa 
function  delete_one_category($ma_loai)
{
    $sql = "DELETE from loai_tour where ma_loai = " . $ma_loai;
    pdo_execute($sql);
}

// Hàm cập nhật loai tour 
function update_newss($tenloai, $mota, $hinh, $id)
{
    if ($hinh != "") {
        $sql = "UPDATE loai_tour SET  ten_loai='" . $tenloai . "' ,hinh_anh='" . $hinh . "' ,mota='" . $mota . "' WHERE ma_loai=" . $id;
    } else {
        $sql = "UPDATE loai_tour SET  ten_loai='" . $tenloai . "' ,hinh_anh='" . $hinh . "' ,mota='" . $mota . "' WHERE ma_loai=" . $id;
    }
    pdo_execute($sql);
}

function loadone_loai_tour($ma_loai)
{
    $sql = "SELECT * FROM loai_tour WHERE ma_loai=" . $ma_loai;
    $list_ones = pdo_query_one($sql);
    return $list_ones;
}
