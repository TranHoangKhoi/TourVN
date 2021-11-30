<?php
include './header.php';
include '../model/pdo.php';
include '../model/danhmuc_tour.php';
include '../model/danhmuc_tintuc.php';

if ($_GET['ql'] && $_GET['ql'] != '') {
    $ql = $_GET['ql'];
    switch ($ql) {
        case 'local':
            if (isset($_GET['listLocal'])) {
                include './diadiem/list.php';
            } elseif (isset($_GET['updateLocal'])) {
                include './diadiem/update.php';
            } elseif (isset($_GET['add'])) {
                include './diadiem/add.php';
            }
            break;
        case 'localSide':
            if (isset($_GET['listSide'])) {
                include './vungmien/list.php';
            } elseif (isset($_GET['updateSide'])) {
                include './vungmien/update.php';
            } elseif (isset($_GET['add'])) {
                include './vungmien/add.php';
            }
            break;
        case 'tourCate':
            if (isset($_GET['listCate'])) {
                $list_category = load_all_tour();

                include './danhmuctour/list.php';
            } elseif (isset($_GET['updateCate'])) {


                include './danhmuctour/update.php';
            } elseif (isset($_GET['add'])) {
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['categoryName'];
                    $mota = $_POST['categoryDesc'];
                    $hinhanh = $_FILES['localiMage2']['name'];
                    $target_dir = "../upload/"; //lấy từ thư mục upload
                    $target_file = $target_dir . basename($_FILES["localiMage2"]["name"]);
                    if (move_uploaded_file($_FILES["localiMage2"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";//thông báo upload
                    } else {
                        // echo "Xin lỗi không thể tải ảnh.";
                    }
                    insert_tour($tenloai, $mota, $hinhanh);
                    $tt = 'Đã Thêm Thành Công';
                }
                //Kiểm tra người dùng có clip vào nút thêm mới ko
                include './danhmuctour/add.php';
            } elseif (isset($_GET['deleteCate'])) {
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    delete_one_category($_GET['ma_loai']);
                }
                $list_category = load_all_tour();
                include './danhmuctour/list.php';
            }
            break;
        case 'newsCate':
            if (isset($_GET['listnewsCate'])) {
                $list_news = list_load_all();
                include './danhmuctintuc/list.php';
                //
            } elseif (isset($_GET['updatenewsCate'])) {
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    $list_one = loadone_loai_tin($_GET['ma_loai']);
                }
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['categoryName'];
                    $id = $_POST['id'];
                    update_news($id, $tenloai);
                }
                include './danhmuctintuc/update.php';
                //
            } elseif (isset($_GET['add'])) {
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['categoryName'];
                    insert_news($tenloai);
                }
                include './danhmuctintuc/add.php';
                //
            } elseif (isset($_GET['deletenewsCate'])) {
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    delete_one($_GET['ma_loai']);
                }
                $list_news = list_load_all();
                include './danhmuctintuc/list.php';
            }
            break;
        case 'newsPage':
            if (isset($_GET['listnewsPage'])) {
                include './baiviet/list.php';
            } elseif (isset($_GET['updatenewsPage'])) {
                include './baiviet/update.php';
            } elseif (isset($_GET['add'])) {
                include './baiviet/add.php';
            }
            break;
        case 'tourItem':
            if (isset($_GET['listtour'])) {
                include './tourdulich/list.php';
            } elseif (isset($_GET['updatetour'])) {
                include './tourdulich/update.php';
            } elseif (isset($_GET['add'])) {
                include './tourdulich/add.php';
            }
            break;
        case 'user':
            if (isset($_GET['listuser'])) {
                include './user/listuser.php';
            } elseif (isset($_GET['listadmin'])) {
                include './user/listadmin.php';
            } elseif (isset($_GET['add'])) {
                include './user/add.php';
            } elseif (isset($_GET['updateacc'])) {
                include './user/update.php';
            }
            break;
        case 'tourBill':
            if (isset($_GET['list'])) {
                include './hoadon/list.php';
            }
            break;
        case 'tourTicket':
            if (isset($_GET['list'])) {
                include './datve/list.php';
            }
            break;
    }
}

include './footer.php';
