  <main class="container">
      <?php include 'subMenu.php' ?>
      <div class="content__body">
          <div class="content__tap active">
              <div class="content__tap-heading">
                  <h3 class="content__tap-heading-text">Thêm mới danh mục tour</h3>
              </div>
              <div class="content__tap-main">
                  <form action="index.php?ql=tourCate&add" class="form-box" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <div class="form-field">
                              <label for="categoryName" class="form-label">Tên danh mục</label>
                              <input type="text" required id="categoryName" name="categoryName" class="input-control" placeholder="VD: Tour biển đảo">
                          </div>
                          <span class="test-masage"></span>
                      </div>

                      <div class="form-group">
                          <div class="form-field">
                              <label for="localiMage2" class="form-label">Hình ảnh</label>
                              <label for="localiMage2" class="form-sub-label">Hình ảnh dùng làm ảnh đại diện danh mục</label>
                              <input type="file" required id="localiMage2" name="localiMage2" class="input-control-img">
                          </div>
                          <span class="test-masage"></span>
                      </div>

                      <div class="form-group">
                          <div class="form-field">
                              <label for="categoryDesc" class="form-label">Mô tả</label>
                              <textarea name="categoryDesc" required id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Mô tả"></textarea>
                          </div>
                          <span class="test-masage"></span>
                      </div>

                      <div class="form-group">
                          <input type="submit" class="btn btn-form" name="themmoi" value="Thêm">
                      </div>
                    <?php
                        if(isset($mess) && $mess != '') {
                    ?>
                    <div class="mess-form success">
                        <span>
                            <i><ion-icon name="checkbox-outline"></ion-icon></i>
                            <?php echo $mess?>
                        </span>
                    </div>
                    <?php } ?>
                  </form>
              </div>
          </div>
      </div>

  </main>