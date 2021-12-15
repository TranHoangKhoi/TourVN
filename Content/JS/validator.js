// Cách sử dụng
// Validator({
//     form: '#form-1',
//     formGroupElement: '.form-group',
//     errorElement: '.test-masage', 
//     rules: [
//         Validator.isRequired('#fullname', 'Mời bạn nhập vào đầy đủ họ và tên'),
//         Validator.isRequired('#email', 'Mời bạn nhập vào email'),
//         Validator.isRequired('#avarta', 'Mời bạn nhập vào email'),
//         Validator.isEmail('#email'),
//         Validator.isRequired('#password', 'Mời bạn nhập vào mật khẩu'),
//         Validator.isMinLength('#password', 6),
//         Validator.isRequired('#password_confirmation', 'Mời bạn nhập vào xác nhận mật khẩu'),
//         Validator.isConFirmed('#password_confirmation',function() {
//              return document.querySelector('#form-1 #password').value;
//         }, 'Xác nhận mật khẩu không chính xác'),
//         Validator.isRequired('input[name="genders"]', 'Mời bạn nhập trường này'),
//         Validator.isRequired('#provice', 'Mời bạn chọn tỉnh thành'),
//     ],
//  // Dành cho submit bằng API (Thường không dùng đến)
//     onSubmit: function(data) {
//         console.log(data);
//     }
// });

// -------------------------------------------------------------------------------

// Hàm validator (Cách 1)
function Validator(options) {
    // Tạo object rỗng để chứa các rules
    var ruleSelector = {};
    // Hàm lấy ra thẻ cha
    function getParrent(element, selector) {
        while (element.parentElement) {
            if(element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    // Hàm xử lý hành động validate
    function validate(inputElement, rule) {
        var formGroupElement = getParrent(inputElement, options.formGroupElement);
        var errorElement = formGroupElement.querySelector(options.errorElement);
        var errorMessage;

        // Lập qua các rule
        var rules = ruleSelector[rule.selector];
        for (var i = 0; i < rules.length; i++) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default: 
                    errorMessage = rules[i](inputElement.value);
            };  
            if(errorMessage) break;                                                                            
        }

        if(errorMessage) {
            errorElement.innerText = errorMessage;
            formGroupElement.classList.add('invalid');
        } else {
            errorElement.innerText = '';
            formGroupElement.classList.remove('invalid');
        }
        return !errorMessage;
    }

    // Lấy thẻ Form
    var formElement = document.querySelector(options.form);
    if(formElement) {
        // Xử lý onsubmit
        formElement.onsubmit = function(e) {
            var inValid = true;
            options.rules.forEach(function(rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var formValid = validate(inputElement, rule);
                if(!formValid) {
                    inValid = false;
                    e.preventDefault();
                }
            });
            if(inValid) {
                if(typeof options.onSubmit === 'function') {
                    var formEnableInput = formElement.querySelectorAll('[name]');
                    var formValues = Array.from( formEnableInput).reduce(function(values, input) {
                        // Niếu là checkbox, select, radio... thì sẽ chọn các input được checked
                        switch (input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;

                            case 'checkbox':
                                if(!input.matches(':checked')){
                                    values[input.name] = '';
                                    return values;
                                } 

                                if(!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                    values[input.name].push(input.value);
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }
                        return values;
                    }, {});
                    options.onSubmit(formValues);
                } else {
                    formElement.submit();
                }
            }
        }

        // Chạy qua các rule
        options.rules.forEach(function(rule) {
            // Truyền các rule và đối tượng object
            if(Array.isArray(ruleSelector[rule.selector])) {
                ruleSelector[rule.selector].push(rule.test);
            } else {
                ruleSelector[rule.selector] = [rule.test];
            }

            // Lấy ra các input
            var inputElements = formElement.querySelectorAll(rule.selector);
            // Lập qua các input
            Array.from(inputElements).forEach(function(inputElement) {
                // Xử lý onblur
                inputElement.onblur = function() {
                    validate(inputElement, rule);
                }
                // Xử lý oninput
                inputElement.oninput = function() {
                    var formGroupElement = getParrent(inputElement, options.formGroupElement);
                    var errorElement = formGroupElement.querySelector(options.errorElement);

                    errorElement.innerText = '';
                    formGroupElement.classList.remove('invalid');
                }
            })
        });
    }
}

// Các rule 
Validator.isRequired = function(selector, message) {
    return {
        selector,
        test: function(value) {
            return value ? undefined : message || 'Mời bạn nhập trường này';
        },
    }
}

Validator.isEmail = function(selector, message) {
    return {
        selector,
        test: function(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Email không hợp lệ';
        },
    }
}

Validator.isMinLength = function(selector, length) {
    return {
        selector,
        test: function(value) {
            return value.length >= length ? undefined : `Bạn phải nhập ít nhất ${length} ký tự`;
        }
    }
}

Validator.isConFirmed = function(selector, getConFirmed, message) {
    return {
        selector,
        test: function(value) {
            return value === getConFirmed() ? undefined : message || 'Giá trị không hợp lệ';
        }
    }
}