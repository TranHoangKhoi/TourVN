<?php
// hàm thêm loại tin 
function insert_news($tenloai)
{
    $sql = "INSERT INTO loai_tin(ten_loai) VALUES ('$tenloai')";
    pdo_execute($sql);
}

//hàm load all loại tin
function list_load_all()
{
    $sql = "select * from loai_tin ";
    $list_news = pdo_query($sql);
    return  $list_news;
}
// hmaf load 1 danh muc
function loadone_loai_tin($ma_loai)
{
    $sql = "SELECT * FROM loai_tin WHERE ma_loai=" . $ma_loai;
    $list_one = pdo_query_one($sql);
    return $list_one;
}
// hàm xóa loai tin theo mã 
function delete_one($ma_loai)
{
    $sql = "delete from loai_tin where ma_loai = " . $ma_loai;
    pdo_execute($sql);
}
// Hàm cập nhật loai tin 
function update_news($tenloai, $id)
{
    $sql = "UPDATE loai_tin set ten_loai=?  where ma_loai= ?";
    pdo_execute($sql, $tenloai, $id);
}
