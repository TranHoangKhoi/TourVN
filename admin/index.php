<?php
ob_start();
session_start();
include './header.php';
include '../global.php';
include '../model/hoadon&ve.php';
include $model_path . '/pdo.php';
include $model_path . '/danhmuc_tour.php';
include $model_path . '/danhmuc_tintuc.php';
include $model_path . '/localSide.php';
include $model_path . '/diadiem.php';
include $model_path . '/baiviet.php';
include $model_path . '/user.php';
include $model_path . '/tourdulich.php';
include $model_path . '/taikhoan.php';
$ql = '';
if (isset($_GET['ql'])) {
    $ql = $_GET['ql'];
}

$ma_taikhoan = '';
if(isset($_SESSION['account']['ma_taikhoan'])) {
    $ma_taikhoan =  $_SESSION['account']['ma_taikhoan'];
}
if(isset($_SESSION['account']['ma_taikhoan']) && ($_SESSION['account']['vai_tro'] == 1)) {
    switch ($ql) {

            // Local Side 
        case 'localSide':
            if (isset($_GET['listSide'])) {

                $listLocalSide = list_Side();
                include $vungmien_path . 'list.php';
            } elseif (isset($_GET['updateSide'])) {
                $mess = '';
                if (isset($_GET['ma_mien']) && ($_GET['ma_mien'] > 0)) {
                    if (isset($_POST['updateLocalSide'])) {
                        $nameLocalSide = $_POST['localSideUD'];
                        $descLocalSide = $_POST['localSideDerscUD'];
                        $IdLocal = $_GET['ma_mien'];

                        if (!updateSide($nameLocalSide, $descLocalSide, $IdLocal)) {
                            $mess = 'Cập nhật thành công';
                        }
                    }
                    $localSideItem = load_data($_GET['ma_mien']);
                }
                include $vungmien_path . 'update.php';
            } elseif (isset($_GET['add'])) {
                $mess = '';
                if (isset($_POST['addLocal'])) {
                    $nameSide = $_POST['localSideName'];
                    $localSideDersc = $_POST['localSideDersc'];

                    if (!add_localSide($nameSide, $localSideDersc)) {
                        $mess = 'Thêm thành công';
                    }
                }
                include $vungmien_path . 'add.php';
            }
            break;

            // Tour Category
        case 'tourCate':
            if (isset($_GET['listCate'])) {

                if (isset($_GET['deleteCate'])) {
                    if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                        delete_one_category($_GET['ma_loai']);
                    }
                }

                // Panigition
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = load_all_tour();
                $pageNum = pagination($itemNum, $countList);

                $list_category = get_tour($starItem, $itemNum);
                include $danhmuctour_path . '/list.php';
            } elseif (isset($_GET['updateCate']) && (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0))) {
                $mess = '';
                if (isset($_POST['updateCate'])) {
                    $tenloai = $_POST['categoryNameUD'];
                    $mota = $_POST['categoryDescUD'];
                    $hinh_anh = $_FILES['tourCateImgUD']['name'];
                    $target_dir = "../upload/"; //lấy từ thư mục upload
                    $target_file = $target_dir . basename($_FILES["tourCateImgUD"]["name"]);
                    move_uploaded_file($_FILES["tourCateImgUD"]["tmp_name"], $target_file);

                    if (!update_cate_tour($_GET['ma_loai'], $tenloai, $mota, $hinh_anh)) {
                        $mess = 'Cập nhật thành công';
                    }
                }

                $cate_item =  load_one_tour($_GET['ma_loai']);
                include $danhmuctour_path . '/update.php';
            } elseif (isset($_GET['add'])) {
                $mess = '';
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['categoryName'];
                    $mota = $_POST['categoryDesc'];
                    $hinhanh = $_FILES['localiMage2']['name'];
                    $target_dir = "../upload/"; //lấy từ thư mục upload
                    $target_file = $target_dir . basename($_FILES["localiMage2"]["name"]);
                    move_uploaded_file($_FILES["localiMage2"]["tmp_name"], $target_file);

                    if (!insert_tour($tenloai, $mota, $hinhanh)) {
                        $mess = 'Thêm thành công';
                    }
                }
                include $danhmuctour_path . '/add.php';
            }
            break;

            // News Category
        case 'newsCate':
            if (isset($_GET['listnewsCate'])) {
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    delete_one($_GET['ma_loai']);
                }

                // Panigition
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = list_load_all();
                $pageNum = pagination($itemNum, $countList);

                $list_news = get_news_cate($starItem, $itemNum);
                include './danhmuctintuc/list.php';
                //
            } elseif (isset($_GET['updatenewsCate'])) {
                $mess = '';
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $tenloai = $_POST['categoryName'];
                        update_news($_GET['ma_loai'], $tenloai);
                        $mess = 'Cập nhật thành công';
                    }
                    $list_one = loadone_loai_tin($_GET['ma_loai']);
                }
                include './danhmuctintuc/update.php';
                //
            } elseif (isset($_GET['add'])) {
                $mess = '';
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['categoryName'];
                    if (isset($tenloai)) {
                        insert_news($tenloai);
                        $mess = 'Thêm thành công';
                    }
                }
                include './danhmuctintuc/add.php';
                //
            }
            break;

            // News Page
        case 'newsPage':
            if (isset($_GET['listnewsPage'])) {
                // Detele News
                if (isset($_GET['deleteNews'])) {
                    if (isset($_GET['ma_tin'])) {
                        delete_news($_GET['ma_tin']);
                    }
                }

                // Load list News
                $maLoai = 0;
                if (isset($_POST['findNews'])) {
                    $maLoai = $_POST['newsCate'];
                }
                // Panigation
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = load_all_news();
                $pageNum = pagination($itemNum, $countList);

                // load
                $list_news = get_news($starItem, $itemNum, $maLoai);
                include './baiviet/list.php';
            } elseif (isset($_GET['updatenewsPage'])) {
                $mess = '';
                if (isset($_GET['ma_tin']) && $_GET['ma_tin'] > 0) {
                    if (isset($_POST['updateNewBtn'])) {
                        $cateID = $_POST['newsCategoryUD'];
                        $newsNameUD = $_POST['newsNameUD'];
                        $newsDescUD = $_POST['newsDescUD'];
                        $newsContentUD = $_POST['newsContentUD'];

                        $newsImgUD = $_FILES['newImageUD']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["newImageUD"]["name"]);
                        move_uploaded_file($_FILES["newImageUD"]["tmp_name"], $target_file);


                        if (!update_news_page($cateID, $newsNameUD, $newsDescUD, $newsContentUD, $newsImgUD, $_GET['ma_tin'])) {
                            $mess = "Cập nhật bài viết thành công";
                        }
                    }
                    $newsItem = load_one_news($_GET['ma_tin']);
                }

                include './baiviet/update.php';
            } elseif (isset($_GET['add'])) {
                $mess = '';
                if (isset($_POST['addNews'])) {
                    $newsCate = $_POST['newsCategory'];
                    $newsName = $_POST['newsName'];
                    $newsDesc = $_POST['newsDesc'];
                    $newsContent = $_POST['newsContent'];
                    $newsImg = $_FILES['newsImage']['name'];
                    $target_dir = "../upload/"; //lấy từ thư mục upload
                    $target_file = $target_dir . basename($_FILES["newsImage"]["name"]);
                    move_uploaded_file($_FILES["newsImage"]["tmp_name"], $target_file);

                    if (!add_news($newsCate, $ma_taikhoan, $newsName, $newsDesc, $newsContent, $newsImg)) {
                        $mess = 'Thêm bài viết thành công';
                    }
                }
                include './baiviet/add.php';
            }
            break;

            // Tour Item
        case 'tourItem':

            if (isset($_GET['listtour'])) {

                // Delete Tour
                if (isset($_GET['deteletour'])) {
                    if (isset($_GET['ma_tour'])) {
                        delete_img_tour($_GET['ma_tour']);
                        delete_journeys($_GET['ma_tour']);
                        delete_info_tour($_GET['ma_tour']);
                    }
                }

                $selectTourCate = 0;
                $tourID = '';
                if(isset($_POST['findTourItem'])) {
                    $selectTourCate = $_POST['selectTourCate'];
                    $tourID = $_POST['tourID'];
                }

                // Panigation
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = load_all_tour_trip_count($selectTourCate, $tourID);
                $pageNum = pagination($itemNum, $countList);

                $list_tour = get_tour_trip($starItem, $itemNum, $selectTourCate, $tourID);

                include './tourdulich/list.php';
            } elseif (isset($_GET['updatetour'])) {
                if (isset($_GET['ma_tour'])) {
                    if (isset($_POST['updateTourbtn'])) {
                        // Update tour info
                        $tourNameUD = $_POST['tourNameUD'];
                        $localCategoryUD = $_POST['localCategoryUD'];
                        $sideTourUD = $_POST['sideTourUD'];
                        $dateNumUD = $_POST['dateNumUD'];
                        $tourDateStartUD = $_POST['tourDateStartUD'];
                        $tourTimeStartUD = $_POST['tourTimeStartUD'];
                        $tourDateEndUD = $_POST['tourDateEndUD'];
                        $localFocusUD = $_POST['localFocusUD'];
                        $tourPriceAdultUD = $_POST['tourPriceAdultUD'];
                        $tourPriceKidUD = $_POST['tourPriceKidUD'];
                        $tourNumpplUD = $_POST['tourNumpplUD'];
                        $tourSalesUD = $_POST['tourSalesUD'];
                        $tourDescUD = $_POST['tourDescUD'];


                        update_tour_info($localCategoryUD, $tourNameUD, $sideTourUD, $dateNumUD, $tourDateStartUD, $tourTimeStartUD, $tourDateEndUD, $tourPriceKidUD, $tourPriceAdultUD, $tourNumpplUD, $localFocusUD, $tourSalesUD, $_GET['ma_tour'], $tourDescUD);

                        // Update IMG
                        $hinh_anh = $_FILES['tourImageUD'];
                        for ($i = 0; $i < 9; $i++) {
                            if (empty($hinh_anh['name'][$i]) != 1) {
                                $idImg = $_POST['idImg'];
                                $target_dir = "../upload/"; //lấy từ thư mục upload
                                $target_file = $target_dir . basename($hinh_anh['name'][$i]);
                                move_uploaded_file($hinh_anh['tmp_name'][$i], $target_file);

                                update_img_tour($idImg[$i], $hinh_anh['name'][$i]);
                            }
                        }

                        // Update Journeys
                        $journeyID = $_POST['journeyID'];
                        $localTourSelectUD = $_POST['localTourSelectUD'];
                        $localTourNameUD = $_POST['localTourNameUD'];
                        $localDateinUD = $_POST['localDateinUD'];
                        $localTourMainUD = $_POST['localTourMainUD'];

                        $temp = 0;
                        foreach ($journeyID as $item) {
                            // echo $temp;
                            if ((empty($localTourSelectUD[$temp]) != 1) && (empty($localTourNameUD[$temp]) != 1) && (empty($localDateinUD[$temp]) != 1) && (empty($localTourMainUD[$temp]) != 1)) {
                                update_tour_journeys($localTourSelectUD[$temp], $localTourNameUD[$temp], $localDateinUD[$temp], $localTourMainUD[$temp], $journeyID[$temp]);
                                echo $temp;
                            }
                            $temp++;
                        }
                    }
                    $tourInfo = get_tour_info($_GET['ma_tour']);
                    $tourImg = get_img_tour($_GET['ma_tour']);
                    $tourJourneys = get_journeys($_GET['ma_tour']);
                }
                include './tourdulich/update.php';
            } elseif (isset($_GET['add'])) {
                $mess = '';
                if (isset($_POST['addTour'])) {
                    // Add Tour Information
                    $tourName = $_POST['tourName'];
                    $localCategory = $_POST['localCategory'];
                    $sideTour = $_POST['sideTour'];
                    $dateNum = $_POST['dateNum'];
                    $tourDateStart = $_POST['tourDateStart'];
                    $tourTimeStart = $_POST['tourTimeStart'];
                    $tourDateEnd = $_POST['tourDateEnd'];
                    $localFocus = $_POST['localFocus'];
                    $tourPriceAdult = $_POST['tourPriceAdult'];
                    $tourPriceKid = $_POST['tourPriceKid'];
                    $tourNumppl = $_POST['tourNumppl'];
                    $tourSales = $_POST['tourSales'];
                    $tourDesc = $_POST['tourDesc'];

                    // add_info_tour($localCategory, $tourName, $dateNum, $tourDateStart, $tourTimeStart, $tourPriceKid, $tourPriceAdult, $tourNumppl, $localFocus, $tourSales);
                    $matour = add_info_tour($localCategory, $tourName, $sideTour, $dateNum, $tourDateStart, $tourTimeStart, $tourDateEnd, $tourPriceKid, $tourPriceAdult, $tourNumppl, $localFocus, $tourSales, $tourDesc);
                    // add_info_tour($loai_tour, $tieu_de, $ma_mien, $goi_ngay, $ngay_khoihanh, $gio_khoihanh, $ngay_ve, $gia_treem, $gia_nguoilon, $soluong, $noi_tap_trung, $khuyen_mai, $gioi_thieu);
                    if(isset($matour) && $matour > 0) {
                        $mess = 'Thêm thành công';
                    }

                    // Upload IMG
                    if (isset($_FILES['tourImg1'])) {
                        $hinh_anh = $_FILES['tourImg1']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg1"]["name"]);
                        move_uploaded_file($_FILES["tourImg1"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg2'])) {
                        $hinh_anh = $_FILES['tourImg2']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg2"]["name"]);
                        move_uploaded_file($_FILES["tourImg2"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg3'])) {
                        $hinh_anh = $_FILES['tourImg3']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg3"]["name"]);
                        move_uploaded_file($_FILES["tourImg3"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg4'])) {
                        $hinh_anh = $_FILES['tourImg4']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg4"]["name"]);
                        move_uploaded_file($_FILES["tourImg4"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg5'])) {
                        $hinh_anh = $_FILES['tourImg5']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg5"]["name"]);
                        move_uploaded_file($_FILES["tourImg5"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg6'])) {
                        $hinh_anh = $_FILES['tourImg6']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg6"]["name"]);
                        move_uploaded_file($_FILES["tourImg6"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg7'])) {
                        $hinh_anh = $_FILES['tourImg7']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg7"]["name"]);
                        move_uploaded_file($_FILES["tourImg7"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg8'])) {
                        $hinh_anh = $_FILES['tourImg8']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg8"]["name"]);
                        move_uploaded_file($_FILES["tourImg8"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };

                    if (isset($_FILES['tourImg9'])) {
                        $hinh_anh = $_FILES['tourImg9']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["tourImg9"]["name"]);
                        move_uploaded_file($_FILES["tourImg9"]["tmp_name"], $target_file);

                        add_img_tour($hinh_anh, $matour);
                    };


                    // Hành trình tour
                    if (isset($_POST["localTourSelect"]) && (isset($_POST["localTourName"])) && (isset($_POST["localDatein"])) && (isset($_POST["localTourMain"]))) {
                        $localSelect = $_POST['localTourSelect'];
                        $localTourName = $_POST['localTourName'];
                        $localDatein = $_POST['localDatein'];
                        $localTourMain = $_POST['localTourMain'];
                        $listContent = [];

                        // Lọc ra các input có vulue khác rỗng để thêm vào mãng
                        for ($i = 0; $i < 7; ++$i) {
                            if ((empty($localTourName[$i]) != 1) && (empty($localSelect[$i]) != 1) && (empty($localDatein[$i]) != 1) && (empty($localTourMain[$i]) != 1)) {
                                $listContentOfDay = [$localSelect[$i], $localTourName[$i], $localDatein[$i], $localTourMain[$i]];
                                array_push($listContent, $listContentOfDay);
                            }
                        }

                        $temp = 0;
                        foreach ($listContent as $item) {
                            add__journeys($matour, $item[0], $item[1], $item[2], $item[3]);
                        }
                    }
                }

                include './tourdulich/add.php';
            }
            break;




            // User & Admin

        case 'user':
            if (isset($_GET['listuser'])) {
                if (isset($_GET['deleteaccount'])) {
                    if (isset($_GET['ma_taikhoan']) && ($_GET['ma_taikhoan'] > 0)) {
                        delete_account($_GET['ma_taikhoan']);
                    }
                }
                if(isset($_POST['search'])&&($_POST['search'])) {
                    $keyword=$_POST['keyword'];
                $email_acc=$_POST['email_acc'];
            }else{
                    $keyword='';
                    $email_acc='';
            }
            
            // Panigition
            $itemNum = 10;
            $starItem = 0;
            if (isset($_GET['page'])) {
                $starItem = ($_GET['page'] - 1) * $itemNum;
            }

            $countList = list_account_count();
            $pageNum = pagination($itemNum, $countList);

                $list_account = list_account($keyword,$email_acc, $starItem, $itemNum);
                include $account_path . 'list.php';
            
            } elseif (isset($_GET['listadmin'])) {
                //xóa
                if (isset($_GET['deleteadmin'])) {
                    if (isset($_GET['ma_taikhoan']) && ($_GET['ma_taikhoan'] > 0)) {
                        delete_account($_GET['ma_taikhoan']);
                    }
                }
                if(isset($_POST['search'])&&($_POST['search'])) {
                    $keyword=$_POST['keyword'];
                $email_acc=$_POST['email_acc'];
            }else{
                $keyword='';
                $email_acc='';
            }

                // Panigition
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }

                $countList = list_account_admin_count();
                $pageNum = pagination($itemNum, $countList);

                $list_account_admin = list_account_admin($keyword,$email_acc, $starItem, $itemNum);

                include $account_path . 'listadmin.php';
            } elseif (isset($_GET['add'])) {
                $mess = '';
                if (isset($_POST['add_admin'])) {
                    $hoten = $_POST['hoten'];
                    $matkhau = md5($_POST['matkhau']);
                    $cccd = $_POST['cccd'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $hinh_anh = $_FILES['hinh_anh']['name'];
                    $target_dir = "../upload/"; //lấy từ thư mục upload
                    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
                    //Add
                    if (!add_admin($hoten, $matkhau, $cccd, $sdt, $email, $hinh_anh)) {
                        $mess = 'Thêm thành công';
                    }
                }
                include $account_path . 'add.php';
            } elseif (isset($_GET['updateacc'])) {
                if (isset($_GET['ma_taikhoan']) && ($_GET['ma_taikhoan']) > 0) {
                    if (isset($_POST['update_admin'])) {
                        $mess = '';
                        $hoten = $_POST['hoten'];
                        $matkhau = md5($_POST['matkhau']);
                        $cccd = $_POST['cccd'];
                        $sdt = $_POST['sdt'];
                        $ma_taikhoan = $_GET['ma_taikhoan'];
                        $hinh_anh = $_FILES['hinh_anh']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                        move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);

                        if (!update_admin($hoten, $matkhau, $cccd, $sdt, $hinh_anh, $ma_taikhoan)) {
                            $mess = 'Cập nhật thành công';
                        }
                    }
                }

                $load_account = load_account($_GET['ma_taikhoan']);
                include $account_path . 'update.php';
            }

            break;

            // Bill Confirmateda
        case 'tourBill':
            if (isset($_GET['list'])) {
                $keyW = '';
                if(isset($_POST['findIdBill'])) {
                    $keyW = $_POST['idBillFd'];
                }

                // Panigition
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }

                $countList = get_all_bill_count();

                $pageNum = pagination($itemNum, $countList);
                $listBillConFirm = get_all_bill($keyW, $starItem, $itemNum);
                include './hoadon/list.php';
            } elseif (isset($_GET['detials'])) {
                // lấy mã hóa đơn 
                if (isset($_GET['ma_hd']) && ($_GET['ma_hd'] > 0)) {
                    $listBill = get_all_one($_GET['ma_hd']);
                    

                    // Panigition
                    $itemNum = 10;
                    $starItem = 0;
                    if (isset($_GET['page'])) {
                        $starItem = ($_GET['page'] - 1) * $itemNum;
                    }

                    $countList = get_one_Ticket_count($_GET['ma_hd']);

                    $pageNum = pagination($itemNum, $countList);

                    $listTicket = get_one_Ticket($_GET['ma_hd'], $starItem, $itemNum);
                    include './hoadon/billDetails.php';
                }
            }

            break;

            // Ticket
        case 'tourTicket':
            if (isset($_GET['list'])) {
                $selectTourCate = 0;
                $tourID = '';
                if(isset($_POST['findTourItem'])) {
                    $tourID = $_POST['tourID'];
                }

                // Panigation
                $itemNum = 10;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                $countList = load_all_tour_trip_count(0, $tourID);
                $pageNum = pagination($itemNum, $countList);

                $list_Ticket_All = get_tour_trip($starItem, $itemNum, $selectTourCate, $tourID);

                include './datve/list.php';

            } elseif (isset($_GET['details'])) {
                // láy mã tour
                if (isset($_GET['matour']) && ($_GET['matour'] > 0)) {
                    $ma_tour = $_GET['matour'];
                    // Panigition
                    $itemNum = 10;
                    $starItem = 0;
                    if (isset($_GET['page'])) {
                        $starItem = ($_GET['page'] - 1) * $itemNum;
                    }
        
                    $countList = get_one_Ticket_mt_count($_GET['matour']);
        
                    $pageNum = pagination($itemNum, $countList);
        
                    $list_ticket = get_one_Ticket_mt($_GET['matour'], $starItem, $itemNum);
                }


                include './datve/ticketDetails.php';
            }
            break;

            // Location
        default:
            if (isset($_GET['listLocal'])) {
                if (isset($_GET['deleteLocal'])) {
                    delete_local($_GET['ma_diadiem']);
                }
                // Panigition
                $itemNum = 15;
                $starItem = 0;
                if (isset($_GET['page'])) {
                    $starItem = ($_GET['page'] - 1) * $itemNum;
                }
                if(isset($_POST['search'])&&($_POST['search'])) {
                    $keyword=$_POST['keyword'];
            }else{
                $keyword='';
            }

                $countList = load_all_local($keyword);
                $pageNum = pagination($itemNum, $countList);

                include $diadiem_path . 'list.php';
            } elseif (isset($_GET['updateLocal'])) {
                if (isset($_GET['ma_diadiem'])) {
                    if (isset($_POST['updateLocal'])) {

                        $ten_diadiem = $_POST['localNameUD'];
                        $ma_mien = $_POST['localSideUD'];
                        $ma_tinh = $_POST['localIDUD'];
                        $mota = $_POST['localDescUD'];
                        $dia_diem = $_POST['localCheckFavariteUD'];
                        $hinh_anh = $_FILES['localImageUD']['name'];
                        $target_dir = "../upload/"; //lấy từ thư mục upload
                        $target_file = $target_dir . basename($_FILES["localImageUD"]["name"]);
                        move_uploaded_file($_FILES["localImageUD"]["tmp_name"], $target_file);

                        echo $ten_diadiem, $ma_mien, $ma_tinh, $mota, $hinh_anh;

                        if (!update_local($ten_diadiem, $ma_mien, $mota, $hinh_anh, $ma_tinh, $dia_diem, $_GET['ma_diadiem'])) {
                            $mess = 'Cập nhật thành công';
                        }
                    }
                    $localItem = load_one_local($_GET['ma_diadiem']);
                }
                include $diadiem_path . 'update.php';
            } else {
                $mess = '';
                if (isset($_POST['addLocal'])) {
                    $ten_diadiem = $_POST['localName'];
                    $ma_tinh = $_POST['localID'];
                    $ma_mien = $_POST['localSide'];
                    $mota = $_POST['localDesc'];
                    $dac_biet = $_POST['localCheckFavarite'];
                    $hinh_anh = $_FILES['localiMage']['name'];
                    $target_dir = "../upload/"; //lấy từ thư mục upload
                    $target_file = $target_dir . basename($_FILES["localiMage"]["name"]);
                    move_uploaded_file($_FILES["localiMage"]["tmp_name"], $target_file);

                    if (!add_local($ma_mien, $ten_diadiem, $mota, $ma_tinh, $hinh_anh, $dac_biet)) {
                        $mess = 'Thêm mới thành công thành công';
                    }
                }
                include $diadiem_path . 'add.php';
            }
            break;
    }
} else {
    header('location: ../index.php');
}

include './footer.php';
ob_end_flush();