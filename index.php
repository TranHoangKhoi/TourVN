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
include './model/diachi.php';

include $view_path.'header.php';

if (isset($_GET['call']) && ($_GET['call'] != '')) {
    $call = $_GET['call'];
    switch ($call) {
        case 'listTour':
            if(isset($_GET['ma_dia_diem']) && $_GET['ma_dia_diem'] > 0) {
                $localItem = load_one_local($_GET['ma_dia_diem']);

                // Panigition
                $itemNum = 12;
                $starItem = 0;
                if(isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = get_journeys_by_local_count($_GET['ma_dia_diem']);
                $pageNum = pagination($itemNum, $countList);

                $idTour = get_journeys_by_local($_GET['ma_dia_diem'], $starItem, $itemNum);

            } elseif(isset($_GET['ma_vung_mien']) && $_GET['ma_vung_mien'] > 0) {
                // Panigition
                $itemNum = 12;
                $starItem = 0;
                if(isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = get_tour_info_by_side_count($_GET['ma_vung_mien']);
                $pageNum = pagination($itemNum, $countList);

                $listTours = get_tour_info_by_side($_GET['ma_vung_mien'], $starItem, $itemNum);
            } elseif(isset($_GET['loai_tour']) && $_GET['loai_tour'] > 0) {
                // Panigition
                $itemNum = 12;
                $starItem = 0;
                if(isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = get_tour_info_by_cate_count($_GET['loai_tour']);
                $pageNum = pagination($itemNum, $countList);

                $listTour = get_tour_info_by_cate($_GET['loai_tour'] , $starItem, $itemNum);
            }
            include $view_path.'tourList.php';
            break;
        // Tour Details
        case 'tourDetails':
            if(isset($_GET['ma_tour'])) {
                $tourDetail = get_tour_info($_GET['ma_tour']);

                include $view_path.'tourDetail.php';
            }
            break;

        // List News
        case 'newsList':
            if(isset($_GET['ma_loai_tin'])) {
                $newsList = loadone_loai_tin($_GET['ma_loai_tin']);
                // Panigition
                $itemNum = 10;
                $starItem = 0;
                if(isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = load_news_by_ma_loai($_GET['ma_loai_tin']);
                $pageNum = pagination($itemNum, $countList);

                $listNews = get_news($starItem, $itemNum, $_GET['ma_loai_tin']);
                include $view_path.'newsList.php';
            }
            break;

        // News Details
        case 'newsDetails':
            if(isset($_GET['ma_tin'])) {
                $newItem = load_one_news($_GET['ma_tin']);
                include $view_path.'newsDetail.php';
            }
            break;

        // Book Ticket
        case 'bookTicket':
            if(isset($_GET['ma_tour'])) {
                $tourInfo = get_tour_info($_GET['ma_tour']);
                include $view_path.'bookTicket.php';
            }
            break;

        // Introduce
        case 'intro':
            include $view_path.'introduce.php';
            break;

        // Contact
        case 'hotline':
            include $view_path.'hotLine.php';
            break;

        // Form Login
        case 'login':
            include $view_path.'loginAndRes.php';
            break;

        // Home
        default:
            include $view_path.'home.php';
            break;
    }
} else {
    include $view_path.'home.php';
}

include './view/footer.php';
