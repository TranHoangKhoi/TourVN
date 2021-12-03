<div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="?ql=tourItem&add" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['add'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Thêm mới tour du lịch
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=tourItem&listtour" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['listtour'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách tour du lịch
                    </a>
                </li>

                <?php
                    if(isset($_GET['updatetour'])) { ?>
                        <li class="sub__nav-item">
                            <a href="" class="sub__nav-item--link active">
                                Cập nhật tour du lịch
                            </a>
                <?php } ?>
            </ul>
        </div>