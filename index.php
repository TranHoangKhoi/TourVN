<?php
include './model/pdo.php';
include './global.php';
include './model/baiviet.php';
include './model/danhmuc_tintuc.php';
include './model/danhmuc_tour.php';
include './model/diadiem.php';
include './model/localSide.php';
include './model/tourdulich.php';
include './model/user.php';

include $view_path.'header.php';

if (isset($_GET['call']) && ($_GET['call'] != '')) {
    $call = $_GET['call'];
    switch ($call) {
        case 'intro':
            include $view_path.'introduce.php';
            break;
        case 'hotline':
            include $view_path.'hotLine.php';
            break;
        case 'login':
            include $view_path.'loginAndRes.php';
            break;
        default:
            include $view_path.'home.php';
            break;
    }
} else {
    include $view_path.'home.php';
}

include './view/footer.php';
