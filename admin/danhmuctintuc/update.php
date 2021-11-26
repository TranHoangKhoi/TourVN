<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật danh mục tin tức</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" class="form-box">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="categoryName" class="form-label">Tên danh mục</label>
                                <input type="text" id="categoryName" name="categoryName" class="input-control" placeholder="VD: Cẩm nang du lịch">
                            </div>
                            <span class="test-masage"></span>
                        </div>
                    
                        <div class="form-group">
                            <button class="btn btn-form">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>