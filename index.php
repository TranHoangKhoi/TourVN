<?php 
    include'./view/header.php';

    if(isset($_GET['call']) && ($_GET['call'] != '')) {
        $call = $_GET['call'];
        switch($call) {
            case 'intro':
                include'./view/introduce.php';
                break;
            case 'hotline':
                include'./view/hotLine.php';
                break;

            default: 
                include'./view/home.php';
                break;
        }
    }else {       
        include'./view/home.php';
    }
    
    include'./view/footer.php';
?>