<!-- add -->
<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Thêm mới vùng miền</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" class="form-box">
                        <div class="form-group">
                            <div class="form-field">
                                <label for="localSide" class="form-label">Tên vùng miền</label>
                                <input type="text" id="localSide" name="localSide" class="input-control" placeholder="VD: Miền Nam">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="localSideDersc" class="form-label">Mô tả</label>
                                <textarea name="localSideDersc" id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Mô tả về vùng miền đó"></textarea>
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