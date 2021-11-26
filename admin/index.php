<?php
    include'./header.php';

    if($_GET['ql'] && $_GET['ql'] != '') {
        $ql = $_GET['ql'];
        switch($ql) {
            case 'local':
                if(isset($_GET['listLocal'])) {
                    include'./diadiem/list.php';
                }elseif (isset($_GET['updateLocal'])) {
                    include'./diadiem/update.php';
                }elseif(isset($_GET['add'])) {
                    include'./diadiem/add.php';
                }
                break;
            case 'localSide':
                if(isset($_GET['listSide'])) {
                    include'./vungmien/list.php';
                }elseif (isset($_GET['updateSide'])) {
                    include'./vungmien/update.php';
                }elseif(isset($_GET['add'])) {
                    include'./vungmien/add.php';
                }
                break;
            case 'tourCate':
                if(isset($_GET['listCate'])) {
                    include'./danhmuctour/list.php';
                }elseif (isset($_GET['updateCate'])) {
                    include'./danhmuctour/update.php';
                }elseif(isset($_GET['add'])) {
                    include'./danhmuctour/add.php';
                }
                break;
            case 'newsCate':
                if(isset($_GET['listnewsCate'])) {
                    include'./danhmuctintuc/list.php';
                }elseif (isset($_GET['updatenewsCate'])) {
                    include'./danhmuctintuc/update.php';
                }elseif(isset($_GET['add'])) {
                    include'./danhmuctintuc/add.php';
                }
                break;
            case 'newsPage':
                if(isset($_GET['listnewsPage'])) {
                    include'./baiviet/list.php';
                }elseif (isset($_GET['updatenewsPage'])) {
                    include'./baiviet/update.php';
                }elseif(isset($_GET['add'])) {
                    include'./baiviet/add.php';
                }
                break;
            case 'tourItem':
                if(isset($_GET['listtour'])) {
                    include'./tourdulich/list.php';
                }elseif (isset($_GET['updatetour'])) {
                    include'./tourdulich/update.php';
                }elseif(isset($_GET['add'])) {
                    include'./tourdulich/add.php';
                }
                break;
            case 'user':
                if(isset($_GET['listuser'])) {
                    include'./user/listuser.php';
                }elseif (isset($_GET['listadmin'])) {
                    include'./user/listadmin.php';
                }elseif(isset($_GET['add'])) {
                    include'./user/add.php';
                }elseif(isset($_GET['updateacc'])) {
                    include'./user/update.php';
                }
                break;
            case 'tourBill':
                if(isset($_GET['list'])) {
                    include'./hoadon/list.php';
                }
                break;
            case 'tourTicket':
                if(isset($_GET['list'])) {
                    include'./datve/list.php';
                }
                break;
            
        }
    }
    
    include'./footer.php';
?>