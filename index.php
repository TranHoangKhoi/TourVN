<?php
ob_start();
session_start();
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
include './model/taikhoan.php';
include './model/check.php';
include './model/hoadon&ve.php';
include './view/header.php';


if (isset($_GET['call']) && ($_GET['call'] != '')) {
    $call = $_GET['call'];
    switch ($call) {
        case 'listTour':
            if (isset($_GET['ma_dia_diem']) && $_GET['ma_dia_diem'] > 0) {
                $localItem = load_one_local($_GET['ma_dia_diem']);

                // Panigition
                $itemNum = 12;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = get_journeys_by_local_count($_GET['ma_dia_diem']);
                $pageNum = pagination($itemNum, $countList);

                $idTour = get_journeys_by_local($_GET['ma_dia_diem'], $starItem, $itemNum);
            } elseif (isset($_GET['ma_vung_mien']) && $_GET['ma_vung_mien'] > 0) {
                // Panigition
                $itemNum = 12;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = get_tour_info_by_side_count($_GET['ma_vung_mien']);
                $pageNum = pagination($itemNum, $countList);

                $listTours = get_tour_info_by_side($_GET['ma_vung_mien'], $starItem, $itemNum);
            } elseif (isset($_GET['loai_tour']) && $_GET['loai_tour'] > 0) {
                // Panigition
                $itemNum = 12;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = get_tour_info_by_cate_count($_GET['loai_tour']);
                $pageNum = pagination($itemNum, $countList);

                $listTour = get_tour_info_by_cate($_GET['loai_tour'], $starItem, $itemNum);
            } elseif (isset($_GET['timkiem']) && ($_GET['keyword'] != '')) {
                $keyW = $_GET['keyword'];
                // Panigition
                $itemNum = 12;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = find_count($keyW);
                $pageNum = pagination($itemNum, $countList);

                $listTour = find($keyW, $starItem, $itemNum);
            }

            include './view/tourList.php';
            break;
            // Tour Details
        case 'tourDetails':
            if (isset($_GET['ma_tour'])) {
                $tourDetail = get_tour_info($_GET['ma_tour']);

                include './view/tourDetail.php';
            }
            break;

            // List News
        case 'newsList':
            if (isset($_GET['ma_loai_tin'])) {
                $newsList = loadone_loai_tin($_GET['ma_loai_tin']);
                // Panigition
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = load_news_by_ma_loai($_GET['ma_loai_tin']);
                $pageNum = pagination($itemNum, $countList);

                $listNews = get_news($starItem, $itemNum, $_GET['ma_loai_tin']);
                include './view/newsList.php';
            }
            break;

            // News Details
        case 'newsDetails':
            if (isset($_GET['ma_tin'])) {
                $newItem = load_one_news($_GET['ma_tin']);
                include './view/newsDetail.php';
            }
            break;

            // Book Ticket
        case 'bookTicket':
            if (isset($_SESSION['account'])) {
                if (isset($_GET['ma_tour'])) {
                    if (isset($_POST['bookBtn'])) {
                        $mess = '';
                        $status = '';
                        $tourItem = get_tour_info($_GET['ma_tour']);
                        extract($tourItem);
                        // Bill
                        $nameusBook = $_POST['namePLE'];
                        $emailusBook = $_POST['emailPLE'];
                        $phoneusBook = $_POST['phonePLE'];
                        $proviceusID = $_POST['proPLE'];
                        $districsusID = $_POST['disPLE'];
                        $wardusID = $_POST['wardPLE'];
                        $addressus = $_POST['addressPLE'];
                        $userBookNote = $_POST['userBookNote'];

                        // Tổng tiền
                        $toltalMoney = $_POST['toltalMoney'];

                        $proviceusBook =  get_province($proviceusID);
                        $districsusBook =  get_district($districsusID);
                        $wardusBook =  get_ward($wardusID);

                        $addressBook = $proviceusBook['_name'] . ',' . $districsusBook['_name'] . ',' . $wardusBook['_name'] . ',' . $addressus;
                        // $idBill = 15;
                        $idBill = add_bill($_SESSION['account']['ma_taikhoan'], $toltalMoney, $nameusBook, $emailusBook, $phoneusBook, $addressBook, $ma_tour, $ngay_khoihanh, $gio_khoihanh, $noi_tap_trung, $userBookNote);



                        if (isset($idBill)) {
                            // Adult
                            $nameUserBook = $_POST['nameUserBook'];
                            $sexUserBook = $_POST['sexUserBook'];
                            $birthUserBook = $_POST['birthUserBook'];
                            $cccdUserBook = $_POST['cccdUserBook'];
                            $addresshUserBook = $_POST['addresshUserBook'];
                            // 
                            $listTicket = [];

                            for ($i = 0; $i < $soluong; $i++) {
                                if ((empty($nameUserBook[$i]) != 1) && (empty($sexUserBook[$i]) != 1) && (empty($birthUserBook[$i]) != 1) && (empty($cccdUserBook[$i]) != 1) && (empty($addresshUserBook[$i]) != 1)) {
                                    $custom = get_user($cccdUserBook[$i]);
                                    if (is_array($custom)) {
                                        // $listCustomAdult = [$nameUserBook[$i], $sexUserBook[$i], $birthUserBook[$i], $cccdUserBook[$i], $addresshUserBook[$i]];
                                        // array_push($listTicket, $listCustomAdult);

                                        if (!add_tickets($ma_tour, $custom['ma_kh'], $idBill, $nameUserBook[$i], $gia_nguoilon, $ngay_khoihanh, $gio_khoihanh, $noi_tap_trung, 'Người lớn')) {
                                            $mess = 'Đặt vé thành công';
                                            $status = 'green';
                                        } else {
                                            $status = 'red';
                                        }
                                    } else {
                                        $maKH = add_custom_and_get($nameUserBook[$i], $cccdUserBook[$i], '', $addresshUserBook[$i], $sexUserBook[$i], $birthUserBook[$i]);
                                        if (!add_tickets($ma_tour, $maKH, $idBill, $nameUserBook[$i], $gia_nguoilon, $ngay_khoihanh, $gio_khoihanh, $noi_tap_trung, 'Người lớn')) {
                                            $mess = 'Đặt vé thành công';
                                            $status = 'green';
                                        } else {
                                            $status = 'red';
                                        }
                                    }
                                }
                            }

                            // Kid
                            if (isset($_POST['nameKidBook']) && $_POST['cccdAdultBook']) {
                                $nameKidBook = $_POST['nameKidBook'];
                                $cccdAdultBook = $_POST['cccdAdultBook'];

                                for ($i = 0; $i < $soluong; $i++) {
                                    if ((empty($nameKidBook[$i]) != 1) && (empty($cccdAdultBook[$i]) != 1)) {
                                        $customAdult = get_user($cccdAdultBook[$i]);
                                        if (!add_tickets($ma_tour, $customAdult['ma_kh'], $idBill, $nameKidBook[$i], $gia_treem, $ngay_khoihanh, $gio_khoihanh, $noi_tap_trung, 'Trẻ em')) {
                                            $mess = 'Đặt vé thành công';
                                            $status = 'green';
                                        } else {
                                            $status = 'red';
                                        }
                                    }
                                }
                            }
                        }
                    }

                    $tourInfo = get_tour_info($_GET['ma_tour']);
                    include './view/bookTicket.php';
                }
            } else {
                header('location: index.php?call=login');
            }
            break;

            // Introduce
        case 'intro':
            include './view/introduce.php';
            break;

            // Contact
        case 'hotline':
            include './view/hotLine.php';
            break;

            //acount
        case 'account':
            //Cập nhật
            if (isset($_POST['update']) && ($_POST['update'])) {
                $hoten = $_POST['hoten'];
                $cccd = $_POST['cccd'];
                $sdt = $_POST['sdt'];
                $tp = $_POST['tp'];
                $quan = $_POST['quan'];
                $phuong = $_POST['phuong'];
                $dia_chi_cu_the = $_POST['dia_chi_cu_the'];
                $ma_taikhoan = $_POST['ma_taikhoan'];
                $hinh_anh = $_FILES['hinh_anh']['name'];
                $target_dir = "./upload/"; //lấy từ thư mục upload
                $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);

                update_account($hoten, $cccd, $sdt, $hinh_anh, $tp, $quan, $phuong, $dia_chi_cu_the, $ma_taikhoan);
                $_SESSION['account'] = load_account($ma_taikhoan);
                header('location: index.php?call=account&updateAcc');
            }
            //Cập nhật mật khẩu
            if (isset($_POST['updatePass'])) {
                $mess = '';
                $status = '';
                $passOld = md5($_POST['passOld']);
                $passNew = md5($_POST['passNew']);
                $passConfirm = $_POST['passConfirm'];

                $checkPass = check_pass($passOld, $_SESSION['account']['ma_taikhoan']);
                if (is_array($checkPass)) {
                    if (!update_pass($passNew, $_SESSION['account']['ma_taikhoan'])) {
                        $mess = 'Đổi mật khẩu thành công';
                        $status = 'green';
                    }
                } else {
                    $mess = 'Mật khẩu không chính xác';
                    $status = 'red';
                }
            }

            if (isset($_GET['ticket'])) {
                // Panigition
                $itemNum = 6;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }

                $countList = get_bill_by_ma_tk_count($ma_taikhoan);

                $pageNum = pagination($itemNum, $countList);

                $listBillConFirm = get_bill_by_ma_tk($ma_taikhoan, $starItem, $itemNum);
            }
            // Đến trang admin
            // if(isset($_POST['go_admin'])){
            //      header('location: /admin/index.php');
            // }


            //đăng xuất
            if (isset($_GET['log_out'])) {
                session_unset();
                header("location: index.php");
            }
            include './view/account.php';
            break;

            // Form Login
        case 'login':
            $mess = '';
            //Đăng ký
            if (isset($_POST['register']) && ($_POST['register'])) {
                $hoten = $_POST['hoten'];
                $cccd = $_POST['cccd'];
                $sdt = $_POST['sdt'];
                $tp = $_POST['tp'];
                $phuong = $_POST['phuong'];
                $quan = $_POST['quan'];
                $email = $_POST['email'];
                $addressus = $_POST['address'];
                $matkhau = md5($_POST['matkhau']);

                // Address Details
                $proviceus =  get_province($tp);
                $districsus =  get_district($quan);
                $wardus =  get_ward($phuong);

                $addressDetail = $proviceus['_name'] . ',' . $districsus['_name'] . ',' . $wardus['_name'] . ',' . $addressus;

                //     // kiểm tra xem người dùng có nhập đầy đủ thông tin hay không
                //     check_not_null($hoten,$matkhau,$email,$sdt,$cccd);   
                //    //Kiểm tra email có hợp lệ hay không 
                //     check_email_valid($email);
                //     //Kiểm tra xem số điện thoại có hợp lệ hạy không
                //     check_phone_valid($sdt);

                // Thêm Giới tính và Ngày sinh
                if (!insert_account($hoten, $cccd, $sdt, $email, $matkhau, $tp, $quan, $phuong, $addressus)) {
                    add_custom($hoten, $cccd, $sdt, $addressDetail, 'gioi_tinh', 'ngay_sinh');
                };
                $mess = 'Chúc mừng! Bạn đã đăng Ký thành công';
            }
            //đăng nhập
            $mess_fail = "";
            if (isset($_POST['Log_in']) && ($_POST['Log_in'])) {
                $email = $_POST['emailLG'];
                $matkhau = md5($_POST['matkhauLG']);

                $check_account = check_account($email, $matkhau);

                if (is_array($check_account)) {
                    $_SESSION['account'] = $check_account;
                    header("Location: index.php");
                    // $mess_success="Bạn đã đăng nhập thành công";
                    // include c./view/count.php';
                    // break;      
                } else {
                    $mess_fail = "Tài khoản này không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include './view/loginAndRes.php';
            break;

            // Home
        default:
            include './view/home.php';
            break;
    }
} else {
    if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
        header('location: index.php?call=listTour&timkiem&keyword=' . $_GET['keyword']);
    }
    include './view/home.php';
}

include './view/footer.php';
ob_end_flush();
