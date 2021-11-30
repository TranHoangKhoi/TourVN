         <div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="?ql=local&add" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['add']) || (!isset($_GET['ql']))) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Thêm mới địa điểm
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=local&listLocal" class="sub__nav-item--link
                    <?php
                            if(isset($_GET['listLocal'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách các địa điểm
                    </a>
                    
                </li>

                    <?php
                            if(isset($_GET['updateLocal'])) { ?>
                                <li class="sub__nav-item">
                                    <a href="" class="sub__nav-item--link active">
                                        Cập nhật địa điểm
                                    </a>
                    <?php } ?>
                    
                </li>
            </ul>
        </div>