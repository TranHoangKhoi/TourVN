<!-- Footer -->
<footer class="footer">

    </footer>
    <script src="../Content/JS/admin.js"></script>
    <script src="../Content/JS/validator.js"></script>
    <script src="../admin/ckeditor/ckeditor.js"></script>
    <script>
        // showTapConTent('.sub__nav-item', '.content__tap');
        // showContentTour();
        CKEDITOR.replace('content1');
        CKEDITOR.replace('content2');
        CKEDITOR.replace('content3');
        CKEDITOR.replace('content4');
        CKEDITOR.replace('content5');
        CKEDITOR.replace('content6');
        CKEDITOR.replace('content7');
        CKEDITOR.replace('contentNews');
        CKEDITOR.replace('newsContenUD');
    </script>

    <script>
        Validator({
            form: '#formAddAccAdmin',
            formGroupElement: '.form-group',
            errorElement: '.test-masage', 
            rules: [
                Validator.isRequired('#nameAdmin', 'Mời bạn nhập vào họ và tên'),
                Validator.isRequired('#adminPass', 'Mời bạn nhập vào mật khẩu'),
                Validator.isMinLength('#adminPass', 6),
                Validator.isRequired('#adminPassConFrim', 'Mời bạn nhập vào trường này'),
                Validator.isConFirmed('#adminPassConFrim',function() {
                return document.querySelector('#formAddAccAdmin #adminPass').value;
                }, 'Xác nhận mật khẩu không chính xác'),
                Validator.isMinLength('#adminPassConFrim', 6),
                Validator.isRequired('#adminCCCD', 'Mời bạn nhập vào số CCCD'),
                Validator.isMinLength('#adminCCCD', 12),
                Validator.isRequired('#adminPhone', 'Mời bạn nhập vào số điện thoại'),
                Validator.isMinLength('#adminPhone', 10),
                Validator.isRequired('#adminEmail', 'Mời bạn nhập vào email'),
                Validator.isEmail('#adminEmail'),
                Validator.isRequired('#adminImg', 'Mời bạn chọn hình đại diện'),
            ],
        });
    </script>
</body>
</html>