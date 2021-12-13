<div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="index.php?ql=tourTicket&list" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['list'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách đặt vé theo tour
                    </a>
                </li>

                <?php
                    if(isset($_GET['details'])) { ?>
                        <li class="sub__nav-item">
                            <a href="#" class="sub__nav-item--link active">
                                Danh sách vé
                            </a>
                <?php } ?>
            </ul>
        </div>