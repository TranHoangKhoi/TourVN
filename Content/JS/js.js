function checkLocal() {
    var localList = document.querySelector('#loCalListStarJS');
    if(localList) {
        var localSpan = document.querySelector('#localStartBox');
        if(localList) {
            var loCalValueBox = document.querySelector('#loCalValueStart');
            var locals = localList.querySelectorAll('.content__section-local--item');
            locals.forEach(function(item) {
                item.onclick = function() {
                    localSpan.innerText = item.innerText;
                    loCalValueBox.setAttribute('value', item.innerText);
                }
            })
        }
    }
    
}

function checkOutLocal() {
    var localList = document.querySelector('#loCalListEndJS');
    if(localList) {
        var localEndSpan = document.querySelector('#localEndBox');
        if(localList) {
                var loCalValueBox = document.querySelector('#loCalValueEnd');
                var localEnd = localList.querySelectorAll('.content__section-local--item');
                localEnd.forEach(function(item) {
                    item.onclick = function() {
                        localEndSpan.innerText = item.innerText;
                        loCalValueBox.setAttribute('value', item.innerText);
                    }
                })
        }
    }
}

function seLectTionHeader() {
    var seLectTion = document.querySelectorAll('.header__selection-header--block');
    if(seLectTion) {
        var conTents = document.querySelectorAll('.conTenTapJS');
        seLectTion.forEach(function(item, index) {
            var conTent = conTents[index];
            item.onclick = function() {
                document.querySelector('.header__selection-header--block.active').classList.remove('active');
                document.querySelector('.conTenTapJS.active').classList.remove('active');
                
                conTent.classList.add('active');
                this.classList.add('active');
            }
        }) ;
    }
}

function cateGorySile() {
    var slideList = document.querySelector('.category__list');
    if(slideList) {
    var slideItems = slideList.querySelectorAll('.category__item');
    var prevBtn = document.querySelector('.category__btn-left');
    var nextBtn = document.querySelector('.category__btn-right');
    
    var slideItemLenght = slideItems[0].offsetWidth;
    var slideItemNum = slideItems.length;
    var slideListLenght = slideList.offsetWidth;
    var slideItemGutter = slideItems[0].style.marginRight = 20;

    var sliderLenght = ((slideItemLenght * slideItemNum) - slideListLenght ) + (slideItemGutter * (slideItemNum - 1)); 
    var positionX = 0;

    nextBtn.onclick = function() {
        if(positionX > -sliderLenght) {
            positionX -= slideItemLenght;
            if((positionX + sliderLenght) < slideItemLenght) {
                positionX = -sliderLenght;
            }
            slideList.style.transform = `translateX(${positionX}px)`;
        }
    }

    prevBtn.onclick = function() {
        if(positionX < 0) {
            positionX += slideItemLenght;
            if((positionX > 0) || (positionX > -slideItemLenght)) {
                positionX = 0;
            }
            slideList.style.transform = `translateX(${positionX}px)`;
            
        }
    }
    }
}

function bookTicket() {
    var changeAdult = document.querySelector('#JSchangeAdult');
    if(changeAdult) {
        var changeKid = document.querySelector('#JSchangeKid');
        var slotTourItem =  document.querySelector('#JSslot');
        var slotTourNum = Number(slotTourItem.innerText);

        // Btn Adult Form
        var changeAdultMinus = changeAdult.querySelector('.js__minus-btn--adults');
        var changeAdultNum = changeAdult.querySelector('.js__num-btn--adults');
        var changeAdultPlus = changeAdult.querySelector('.js__add-btn--adults');

        // Btn Kid Form
        var changeKidMinus = changeKid.querySelector('.js__minus-btn--kids');
        var changeKidNum = changeKid.querySelector('.js__num-btn--kids');
        var changeKidPlus = changeKid.querySelector('.js__add-btn--kids');


        var customerAdultsBox = document.querySelector('#JSCustomerAdultsBox');
        var customerKidsBox = document.querySelector('#JSCustomerKidsBox');

        // Form Adult
        changeAdultPlus.onclick = function() {
            addNumAdultsForm();
        }

        changeAdultMinus.onclick = function() {
            minNumAdultsForm();
        }

        function minNumAdultsForm() {
            var numAdult = Number(changeAdultNum.innerText);
            if(numAdult > 1) {
                changeAdultNum.innerText = numAdult - 1;
                
                var formAdultActiveNum = (document.querySelectorAll('.js__form-adults').length) - 1;
                var formAdultActive = document.querySelectorAll('.js__form-adults')[formAdultActiveNum];

                    customerAdultsBox.removeChild(formAdultActive);
            }
        }

        function addNumAdultsForm() {
            var numAdult = Number(changeAdultNum.innerText);
            var numKid = Number(changeKidNum.innerText);
            var numAll = numKid + numAdult;
            if(numAll < slotTourNum) {
                changeAdultNum.innerText = numAdult + 1;

                if(customerAdultsBox) {
                    var formAdult = document.createElement('div');
                    formAdult.classList.add('info__customer-adults--form', 'js__form-adults');
                    formAdult.innerHTML = `
                    <div class="info__customer-adults--form-item info__customer-adults--form-text">
                                                            <label for="" class="info__customer-adults--label">Họ tên</label>
                                                            <input type="text" class="info__customer-adults--control" placeholder="Họ và tên">
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Giới tính</label>
                                                            <select name="" id="" class="info__customer-adults--control">
                                                                <option value="">Giới tính</option>
                                                                <option value="male">Nam</option>
                                                                <option value="female">Nữ</option>
                                                            </select>
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Ngày sinh</label>
                                                            <input type="date" class="info__customer-adults--control">
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item w-100">
                                                            <label for="" class="info__customer-adults--label">Số căn cước công dân</label>
                                                            <input type="number" class="info__customer-adults--control" placeholder="CCCD">
                                                        </div>

                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                                <label for="" class="info__customer-adults--label">Tỉnh / TP</label>
                                                                <select name="" id="" class="info__customer-adults--control">
                                                                    <option value="">Tỉnh/TP</option>
                                                                    <option value="male">Nam</option>
                                                                    <option value="female">Nữ</option>
                                                                </select>
                                                            </div>
        
                                                            <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                                <label for="" class="info__customer-adults--label">Quận / Huyện</label>
                                                                <select name="" id="" class="info__customer-adults--control">
                                                                    <option value="">Quận/Huyện</option>
                                                                    <option value="male">Nam</option>
                                                                    <option value="female">Nữ</option>
                                                                </select>
                                                            </div>
        
                                                            <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                                <label for="" class="info__customer-adults--label">Phường Xã</label>
                                                                <select name="" id="" class="info__customer-adults--control">
                                                                    <option value="">Phường Xã</option>
                                                                    <option value="male">Nam</option>
                                                                    <option value="female">Nữ</option>
                                                                </select>
                                                            </div>
        
                                                            <div class="info__customer-adults--form-item info__customer-adults--form-select-text">
                                                                <label for="" class="info__customer-adults--label">Địa chỉ</label>
                                                                <input type="text" class="info__customer-adults--control" placeholder="VD: 271/Nguyễn Văn Linh">
                                                            </div>
                    `;

                    customerAdultsBox.appendChild(formAdult);
                }
            }
        }

        // Form Kid
        changeKidPlus.onclick = function() {
            addNumKidsForm();
        }

        changeKidMinus.onclick = function() {
            var numKid = Number(changeKidNum.innerText);
            if(numKid > 0) {
                changeKidNum.innerText = numKid - 1;

                var formKidActiveNum = (document.querySelectorAll('.js__form-kid').length) - 1;
                var formKidActive = document.querySelectorAll('.js__form-kid')[formKidActiveNum];

                console.log(numKid);
                customerKidsBox.removeChild(formKidActive);
                if(numKid == 1 ){
                    var kidTitle = document.querySelector('.js__form-kid--title');
                    customerKidsBox.removeChild(kidTitle);
                }
            }
        }

        function addNumKidsForm() {
            var numKid = Number(changeKidNum.innerText);
            var numAdult = Number(changeAdultNum.innerText);
            var numAll = numKid + numAdult;
            console.log(numKid)

            if(numAll < slotTourNum) {
                changeKidNum.innerText = numKid + 1;
                if(customerKidsBox) {
                    var kidTitle = document.querySelector('.js__form-kid--title');
                    if(!kidTitle) {
                        var formKidAddTitle = document.createElement('div');
                        formKidAddTitle.classList.add('info__customer-adults--title', 'js__form-kid--title');
                        formKidAddTitle.innerHTML = `<h4>Trẻ em</h4>`;

                        customerKidsBox.appendChild(formKidAddTitle);
                    }
                    var formKid = document.createElement('div');
                    formKid.classList.add('info__customer-adults--form', 'js__form-kid');
                    formKid.innerHTML = `
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-text">
                                                            <label for="" class="info__customer-adults--label">Họ tên</label>
                                                            <input type="text" class="info__customer-adults--control">
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Giới tính</label>
                                                            <select name="" id="" class="info__customer-adults--control">
                                                                <option value="">Giới tính</option>
                                                                <option value="male">Nam</option>
                                                                <option value="female">Nữ</option>
                                                            </select>
                                                        </div>
        
                                                        <div class="info__customer-adults--form-item info__customer-adults--form-select">
                                                            <label for="" class="info__customer-adults--label">Ngày sinh</label>
                                                            <input type="date" class="info__customer-adults--control">
                                                        </div>
                    `;
                    customerKidsBox.appendChild(formKid);
                }
            }
        }
    }
}

function selectForm() {
    var taps = document.querySelectorAll('.JS-Form-Tap');
    var formControls = document.querySelectorAll('.JS-Form-Control');
    taps.forEach(function(item, index) {
        var formControl = formControls[index];
        item.onclick = function() {
            document.querySelector('.JS-Form-Tap.active').classList.remove('active');
            document.querySelector('.JS-Form-Control.active').classList.remove('active');
            
            formControl.classList.add('active');
            this.classList.add('active');
        }
    }) ;
}