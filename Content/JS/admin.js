function showTapConTent(liClass, tapClass) {
    var liItems = document.querySelectorAll(liClass);
    var tapItems = document.querySelectorAll(tapClass);
    
    liItems.forEach(function(liItem, index) {
        var tapItem = tapItems[index];
        liItem.onclick = function() { 
            document.querySelector(liClass+'.active').classList.remove('active');
            document.querySelector(tapClass+'.active').classList.remove('active');

            tapItem.classList.add('active');
            this.classList.add('active');
        }
    })
}

function showContentTour() {
    var date = document.querySelector('#localNum');
    var tourContentBox = document.querySelector('.tour__content');
    date.onchange = function() {
        if(tourContentBox.querySelectorAll('.form-group')) {
            // console.log(tourContentBox.querySelectorAll('.form-group'));
            (tourContentBox.querySelectorAll('.form-group')).forEach(function(item, index) {
                tourContentBox.removeChild(item);
            })
        }

        var numDate = Number(date.value);
        for (var i = 0; i < numDate; i++) {
            var formContent = document.createElement('div');
            formContent.classList.add('form-group');
            formContent.innerHTML = `
                    <div class="form-field">
                        <label for="localTour" class="form-label">Địa điểm ${i + 1}</label>
                        
                        <label for="localTourSelect" class="form-sub-label">Chọn địa điểm đến</label>
                        <select name="localTourSelect" required id="localTourSelect" class="input-control-select">
                            <option value="">Chọn địa điểm</option>
                            <option value="1">Cần Thơ</option>
                            <option value="2">Đà Nẵng</option>
                            <option value="3">Hà Nội</option>
                            <option value="4">Phú quốc</option>
                            <option value="5">Kiên Giang</option>
                        </select>
                        <div class="line"></div>
                        <label for="localTourName" class="form-sub-label">Tiêu đề ngày ${i + 1}</label>
                        <textarea name="localTourName" required id="" cols="30" rows="10" class="input-control--textarea-sm" placeholder="VD: Ngày ${i + 1} sẽ đi đâu"></textarea>
                        <div class="line"></div>
                        <label for="localDatein" class="form-sub-label">Ngày đến</label>
                        <input type="date" required id="localDatein" name="localDatein" class="input-control">
                        <div class="line"></div>
                        <label for="localTourMain" class="form-sub-label">Mô tả hành trình</label>
                        <textarea id="content${i + 1}" name="localTourMain" required id="" cols="30" rows="10" class="input-control--textarea" placeholder="Mô tả hành trình cụ thể của ngày ${i + 1}"></textarea>
                    </div>
                    <span class="test-masage"></span>
            `;
            tourContentBox.appendChild(formContent);    
        }


    }
}