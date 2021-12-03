<?php
    $img_path = "../upload/";
    $web_path = "../TourVN/";
    $admin_path = "../admin/";
    $model_path = '../model/';
    $view_path = '../TourVN/view/';
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
