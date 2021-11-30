
<?php
//Thêm
function add_localSide($localSide,$localSideDersc) {
    $sql="INSERT INTO vung_mien(ten_mien,mota) values ('$localSide','$localSideDersc')";
    pdo_execute($sql);
}
//Show danh sách vùng miền
function list_Side() {
    $sql="SELECT * FROM vung_mien ORDER BY ten_mien ";
    return pdo_query($sql);
}
//Xóa
function delete_Side($ma_mien) {
    $sql="DELETE FROM vung_mien WHERE ma_mien=".$ma_mien;
    pdo_execute($sql);
}

function load_data($ma_mien) {
    $sql="SELECT *FROM vung_mien WHERE ma_mien=".$ma_mien;
    $the_side=pdo_query_one($sql);
    return $the_side;
}

function updateSide($nameSide,$localSideDersc,$id_side) {
    $sql="UPDATE vung_mien SET ten_mien='".$nameSide."',mota='".$localSideDersc."' WHERE ma_mien=".$id_side;
    pdo_execute($sql);
}


?>