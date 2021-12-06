// Address Account
$(document).ready(function() {
    $('.provinceAcc').change(function() {
        var id = $('.provinceAcc').val();
        $.post('./model/diachi.php', {provinceid: id}, function(data) {
            $('.districtAcc').html(data);
        });
    })
})
$(document).ready(function() {
    $('.districtAcc').change(function() {
        var id = $('.districtAcc').val();
        $.post('./model/diachi.php', {wardid: id}, function(data) {
            $('.wardAcc').html(data);
        });
    })
})

// OnInput
$(document).ready(function() {
    // $('.provinceAcc').change(function() {
        var id = $('.provinceAcc').val();
        var idQuan = $('.idDis').val();

        $.post('./model/diachi.php', {provinceid: id, disid: idQuan}, function(data) {
            $('.districtAcc').html(data);
        });
    // })
})
$(document).ready(function() {
    // $('.districtAcc').change(function() {
        var id = $('.idDis').val();
        var idPhuong = $('.idWard').val();
    
        $.post('./model/diachi.php', {wardid: id, wardidAcc: idPhuong}, function(data) {
            $('.wardAcc').html(data);
        });
    // })
});

// Address Usser
// $(document).ready(function() {
//     var slot = document.querySelector('#JSslot');
//     var slotNum = Number(slot.innerText);
    
//     for (var i = 1; i <= slotNum; i++) {
//         var provinceItem =  $(`.provinceUS${i}`);
//         // console.log(provinceItem);
//         $(`.provinceUS${i}`).change(function() {
//             console.log(provinceItem.val());
//             var temp = 1;
//             var id = $(`.provinceUS${i}`).val();
//             $.post('./model/diachi.php', {provinceid: id}, function(data) {
//                 $(`.districtUS${i}`).html(data);
//                 // console.log($(`.provinceUS1`).val());
//             });
//         })
//     }
// })