/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ../demo1/src/js/pages/my-script.js ***!
  \******************************************/
// 툴팁활성화
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
$(function () {
    $('.custom-file-input').on('change', function () {
        var fileName = $(this).val();
        console.log(fileName);
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    // lecture-box 체크박스 선택시 border파랑으로 생김
    $("input:checkbox[name='imageCheck']").off("click");
    $("input:checkbox[name='imageCheck']").on("click", function () {
        console.log('체크박스');
        var checkedBool = $(this).prop("checked");
        var _target = $(this).parents('.card');
        if (checkedBool == false) {
            _target.removeClass("border");
            _target.removeClass("border-primary");
        } else {
            $(this).prop("checked", true);
            _target.addClass("border");
            _target.addClass("border-primary");
        }
    });
});
/******/ })()
;
//# sourceMappingURL=my-script.js.map