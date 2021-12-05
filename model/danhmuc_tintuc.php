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
    return  pdo_query($sql);
}

function get_news_cate($starItem, $itemNum)
{
    $sql = "select * from loai_tin order by ma_loai DESC limit $starItem,$itemNum";
    return  pdo_query($sql);
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
function update_news($id, $tenloai)
{
    $sql = "update loai_tin set ten_loai='" . $tenloai . "' where ma_loai=" . $id;
    pdo_execute($sql);
}
