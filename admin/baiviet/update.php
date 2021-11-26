<main class="container">
        <?php include'subMenu.php' ?>

        <div class="content__body">
            <div class="content__tap active">
                <div class="content__tap-heading">
                    <h3 class="content__tap-heading-text">Cập nhật bài viết</h3>
                </div>
                <div class="content__tap-main">
                    <form action="" class="form-box">

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsCategory" class="form-label">Loại tin tức</label>
                                <select name="newsCategory" id="" class="input-control-select">
                                    <option value="">Chọn loại tin tức</option>
                                    <option value="1">Cảm nang du lịch</option>
                                    <option value="2">Kinh nghiệm du lịch</option>
                                    <option value="3">Tin tức du lịch</option>
                                </select>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsName" class="form-label">Tiêu đề bài viết</label>
                                <input type="text" id="newsName" name="newsName" class="input-control" placeholder="VD: Tháng 11 12 đi du lịch ở đâu? Top 10 điển đến hot cuối năm">
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsDesc" class="form-label">Tóm tắt bài viêt</label>
                                <textarea name="newsDesc" id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="VD: Khi những cơn gió lạnh đầu đông tràn về cũng là lúc du lịch trong nước trở nên sôi động hơn. Khắp nơi mọi trên dãy đất hình chữ S Việt Nam khoác lên mình chiếc áo mới đẹp lạ kỳ. Và nếu bạn vẫn đang băn khoăn tìm kiếm một địa điểm du lịch thú vị vào dịp cuối năm tháng 11 12 này, đừng bỏ lỡ top 10 sau đây nhé!"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="newsContent" class="form-label">Nội dung bài Viết</label>
                                <textarea name="newsContent" id="" cols="30" rows="10" maxlength="300" class="input-control--textarea" placeholder="Nội dung bài viết"></textarea>
                            </div>
                            <span class="test-masage"></span>
                        </div>


                        
                        <div class="tour__content">
                            

                        </div>



                        <div class="form-group">
                            <button class="btn btn-form">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </main>