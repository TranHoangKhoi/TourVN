<?php
    $img_path= "../upload/";
    $admin_path = "../admin/";
    $model_path = '../model/';
    $diadiem_path = "$admin_path/diadiem/";
    $danhmuctintuc_path = "$admin_path/danhmuctintuc/";
    $danhmuctour_path = "$admin_path/danhmuctour/";
    $vungmien_path = "$admin_path/vungmien/";

    function pagination($showItem, $listItem) {
        $showLocal = $showItem;
        $countLocal = count($listItem);
        $countPage = ceil($countLocal / $showLocal);

        return $countPage;
    }
?>
