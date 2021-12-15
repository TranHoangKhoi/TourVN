<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="shortcut icon" href="../Content/IMG/BG/logo.png">
    <link rel="stylesheet" href="../Content/CSS/grid.css">
    <link rel="stylesheet" href="../Content/CSS/base.css">
    <link rel="stylesheet" href="../Content/CSS/main.css">
    <link rel="stylesheet" href="../Content/CSS/layout.css">
    <link rel="stylesheet" href="../Content/CSS/admin.css">
    <link rel="stylesheet" href="../Content/CSS/responsive.css">
</head>

<body>
    <header class="header">
        <nav class="header__nav">
            <div class="header__logo">
                <a href="index.php" class="header__logo-image">
                    <img src="../Content/IMG/BG/Untitled-2.png" alt="" class="header__logo-image--img">
                </a>
                <div class="header__logo-body">
                    <h3 class="header__logo-name">TOUR VN</h3>
                    <p class="header__logo-status">
                        <i class="">
                            <ion-icon name="wifi"></ion-icon>
                        </i>
                        online
                    </p>
                </div>
            </div>
            <ul class="header__nav-list">
                <?php if(isset($_GET['ql'])) {
                    $url = $_GET['ql'];
                } ?>

                <li class="header__nav-item">
                    <a href="?ql=local&add" class="header__nav-link 
                        <?php
                        if (!isset($_GET['ql']) || ($_GET['ql'] == 'local')) {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                        <ion-icon name="pin"></ion-icon>
                        </i>
                        Địa điểm
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=localSide&add" class="header__nav-link
                        <?php
                        if ($url === 'localSide') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                            <ion-icon name="map"></ion-icon>
                        </i>
                        Vùng miền
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=tourCate&add" class="header__nav-link
                        <?php
                        if ($url === 'tourCate') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                            <ion-icon name="paper"></ion-icon>
                        </i>
                        Danh mục tuor
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=newsCate&add" class="header__nav-link
                        <?php
                        if ($url === 'newsCate') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                            <ion-icon name="today"></ion-icon>
                        </i>
                        Danh mục tin tức
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=newsPage&add" class="header__nav-link
                        <?php
                        if ($url === 'newsPage') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                        <ion-icon name="create"></ion-icon>
                        </i>
                        Bài viết
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=tourItem&add" class="header__nav-link
                        <?php
                        if ($url === 'tourItem') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                            <ion-icon name="bus"></ion-icon>
                        </i>
                        Tour du lịch
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=user&listuser" class="header__nav-link
                        <?php
                        if ($url === 'user') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                            <ion-icon name="contacts"></ion-icon>
                        </i>
                        Tài Khoản
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=tourBill&list" class="header__nav-link 
                        <?php
                        if ($url === 'tourBill') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                            <ion-icon name="print"></ion-icon>
                        </i>
                        Hóa đơn
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="?ql=tourTicket&list" class="header__nav-link
                        <?php
                        if ($url === 'tourTicket') {
                            echo 'active';
                        }
                        ?>
                    ">
                        <i class="header__nav-icon">
                            <ion-icon name="cash"></ion-icon>
                        </i>
                        Quản lý vé
                    </a>
                </li>
                <li class="header__nav-item">
                    <a href="../index.php" class="header__nav-link warn">
                        <i class="header__nav-icon">
                            <ion-icon name="power"></ion-icon>
                        </i>
                        Trở về trang web
                    </a>
                </li>
            </ul>
        </nav>
    </header>