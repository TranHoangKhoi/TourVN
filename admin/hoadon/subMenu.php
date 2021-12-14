<div class="content__header">
    <ul class="sub__nav-list">
        <li class="sub__nav-item">
            <a href="index.php?ql=tourBill&list" class="sub__nav-item--link 
                    <?php
                    if (isset($_GET['list'])) {
                        echo 'active';
                    }
                    ?>
                    ">
                Danh sách hóa đơn
            </a>
        </li>

        <?php
        if (isset($_GET['detials'])) { ?>
            <li class="sub__nav-item">
                <a href="#" class="sub__nav-item--link active">
                    Chi tiết hóa đơn
                </a>
            <?php } ?>
    </ul>
</div>