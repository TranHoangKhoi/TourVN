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
// hàm xóa 
function  delete_one_category($ma_loai)
{
    $sql = "delete from loai_tour where ma_loai = " . $ma_loai;
    pdo_execute($sql);
}
