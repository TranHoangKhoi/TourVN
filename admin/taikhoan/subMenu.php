<div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="?ql=user&listuser" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['listuser'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách tài khoản
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=user&listadmin" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['listadmin'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách admin
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=user&add" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['add'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Thêm mới tài khoản admin
                    </a>
                </li>

                <?php
                    if(isset($_GET['updateacc'])) { ?>
                        <li class="sub__nav-item">
                            <a href="" class="sub__nav-item--link active">
                                Cập nhật tài khoản
                            </a>
                <?php } ?>
            </ul>
        </div>