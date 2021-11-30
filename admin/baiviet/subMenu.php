<div class="content__header">
            <ul class="sub__nav-list">
                <li class="sub__nav-item">
                    <a href="?ql=newsPage&add" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['add'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Thêm mới bài viết
                    </a>
                </li>

                <li class="sub__nav-item">
                    <a href="?ql=newsPage&listnewsPage" class="sub__nav-item--link 
                    <?php
                            if(isset($_GET['listnewsPage'])) {
                                echo 'active';
                            }
                    ?>
                    ">
                        Danh sách bài viết
                    </a>
                </li>

                <?php
                    if(isset($_GET['updatenewsPage'])) { ?>
                        <li class="sub__nav-item">
                            <a href="" class="sub__nav-item--link active">
                                Cập nhật bài viêt
                            </a>
                <?php } ?>
            </ul>
        </div>