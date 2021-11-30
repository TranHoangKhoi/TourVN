<?php
function insert_tour($tenloai, $mota, $hinhanh)
{
    $sql = "INSERT INTO loai_tour (ten_loai,mota,hinh_anh) VALUES ('$tenloai','$mota','$hinhanh')";
    pdo_execute($sql);
}
// load danh sách tour từ cơ sở dữ liệu
function load_all_tour()
{
    $sql = "select * from loai_tour order by ma_loai  ";
    $list_category = pdo_query($sql);
    return $list_category;
}

function get_tour($starItem, $showNum)
{
    $sql = "select * from loai_tour order by ma_loai DESC limit $starItem,$showNum";
    return pdo_query($sql);
}

// Load 1 danh mục tour
function load_one_tour($ma_loai)
{
    $sql = "select * from loai_tour where ma_loai=".$ma_loai;
    return pdo_query_one($sql);
}

// hàm xóa 
function  delete_one_category($ma_loai)
{
    $sql = "delete from loai_tour where ma_loai = " . $ma_loai;
    pdo_execute($sql);
}

// Hàm cập nhật category
function update_cate_tour($ma_loai, $ten_loai, $mota, $hinh_anh)
{
    if($hinh_anh == '') {
        $sql = "update loai_tour set ten_loai='" . $ten_loai . "', mota = '" . $mota . "' where ma_loai=" . $ma_loai;
    } else {
        $sql = "update loai_tour set ten_loai='" . $ten_loai . "', mota = '" . $mota . "', hinh_anh = '" . $hinh_anh . "' where ma_loai=" . $ma_loai;
    }
    pdo_execute($sql);
}