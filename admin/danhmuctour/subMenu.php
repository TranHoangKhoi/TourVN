<div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="?ql=tourCate&add" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['add'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Thêm mới danh mục tour
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=tourCate&listCate" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['listCate'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách danh mục tour
                    </a>
                </li>

                <?php
                    if(isset($_GET['updateCate'])) { ?>
                        <li class="sub__nav-item">
                            <a href="" class="sub__nav-item--link active">
                                Cập nhật địa điểm
                            </a>
                <?php } ?>
            </ul>
        </div>