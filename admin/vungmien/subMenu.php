<div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="?ql=localSide&add" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['add'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Thêm mới vùng miền
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=localSide&listSide" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['listSide'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                    Danh sách các vùng miền
                    </a>
                </li>
                
                <?php
                    if(isset($_GET['updateSide'])) { ?>
                         <li class="sub__nav-item">
                            <a href="" class="sub__nav-item--link active">
                                Cập nhật vùng miền
                            </a>
                <?php } ?>
            </ul>
        </div>