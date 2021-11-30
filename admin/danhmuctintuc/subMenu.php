<div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="?ql=newsCate&add" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['add'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Thêm mới danh mục tin tức
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=newsCate&listnewsCate" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['listnewsCate'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách danh mục tin tức
                    </a>
                </li>

                <?php
                    if(isset($_GET['updatenewsCate'])) { ?>
                        <li class="sub__nav-item">
                            <a href="" class="sub__nav-item--link active">
                                Cập nhật danh mục tin tức
                            </a>
                <?php } ?>
            </ul>
        </div>