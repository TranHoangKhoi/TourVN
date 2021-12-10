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

        //acount
        case 'account':
             //Cập nhật
             if(isset($_POST['update'])&&($_POST['update'])){
                $hoten=$_POST['hoten'];
                $cccd=$_POST['cccd'];
                $sdt=$_POST['sdt'];
                $tp=$_POST['tp'];
                $quan=$_POST['quan'];
                $phuong=$_POST['phuong'];
                $dia_chi_cu_the=$_POST['dia_chi_cu_the'];
                $ma_taikhoan=$_POST['ma_taikhoan'];
                $hinh_anh = $_FILES['hinh_anh']['name'];
                $target_dir = "./upload/"; //lấy từ thư mục upload
                $target_file = $target_dir.basename($_FILES["hinh_anh"]["name"]);
                move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);

                update_account($hoten, $cccd, $sdt,$hinh_anh,$tp,$quan,$phuong,$dia_chi_cu_the,$ma_taikhoan);
                $_SESSION['account'] = load_account($ma_taikhoan);
                header('location: index.php?call=account&updateAcc');
            }
            //Cập nhật mật khẩu
            if(isset($_POST['updatePass'])) {
                $mess = '';
                $status = '';
                $passOld = md5($_POST['passOld']);
                $passNew = md5($_POST['passNew']);
                $passConfirm = $_POST['passConfirm'];

                $checkPass = check_pass($passOld, $_SESSION['account']['ma_taikhoan']);
                if(is_array($checkPass)) {
                    if(!update_pass($passNew, $_SESSION['account']['ma_taikhoan'])) {
                        $mess = 'Đổi mật khẩu thành công';
                        $status = 'green';
                    }
                } else {
                    $mess = 'Mật khẩu không chính xác';
                    $status = 'red';
                }
            }
            // Đến trang admin
            // if(isset($_POST['go_admin'])){
            //      header('location: /admin/index.php');
            // }


            //đăng xuất
            if(isset($_GET['log_out'])){
                session_unset();
                 header("location: index.php");
            }
            include $view_path.'account.php';
            break;

            // Form Login
        case 'login':
            $mess='';
            //Đăng ký
            if(isset($_POST['register'])&&($_POST['register'])){
                $hoten=$_POST['hoten'];
                $cccd=$_POST['cccd'];
                $sdt=$_POST['sdt'];
                $tp=$_POST['tp'];
                $phuong=$_POST['phuong'];
                $quan=$_POST['quan'];
                $email=$_POST['email'];
                $matkhau=md5($_POST['matkhau']);

            //     // kiểm tra xem người dùng có nhập đầy đủ thông tin hay không
            //     check_not_null($hoten,$matkhau,$email,$sdt,$cccd);   
            //    //Kiểm tra email có hợp lệ hay không 
            //     check_email_valid($email);
            //     //Kiểm tra xem số điện thoại có hợp lệ hạy không
            //     check_phone_valid($sdt);
                

                 insert_account($hoten, $cccd, $sdt, $email, $matkhau, $tp, $quan, $phuong);
                 $mess='Chúc mừng! Bạn đã đăng Ký thành công';
            }
            //đăng nhập
            $mess_fail="";
            if(isset($_POST['Log_in'])&&($_POST['Log_in'])){     
                $email = $_POST['emailLG'];
                $matkhau = md5($_POST['matkhauLG']);
                
                $check_account = check_account($email,$matkhau);

                if(is_array($check_account)){
                    $_SESSION['account']=$check_account;
                    header("Location: index.php");
                    // $mess_success="Bạn đã đăng nhập thành công";
                    // include $view_path.'account.php';
                    // break;      
                }else{
                    $mess_fail="Tài khoản này không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
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
ob_end_flush();
?>
