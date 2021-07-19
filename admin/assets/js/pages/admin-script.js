/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ../demo1/src/js/pages/admin-script.js ***!
  \*********************************************/
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


//드롭 업로드
// single file upload
$('#file-dropzone').dropzone({
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 1,
    maxFilesize: 25, // MB
    acceptedFiles: "mp4,avi,mpg,mov",
    addRemoveLinks: true,
    accept: function (file, done) {
        if (file.name == "justinbieber.jpg") {
            done("업로드에 실패하였습니다..");
        } else {
            done();
        }
    }
});

//알람
$(function () {
    $(".btn_copy").click(function (e) {
        Swal.fire("복사되었습니다", "", "success");
    });
    $(".btn_delete").click(function (e) {
        Swal.fire({
            title: "삭제하시겠습니까?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "확인",
            cancelButtonText: "취소",
            customClass: {
                confirmButton: "btn btn-primary font-weight-bold btn-lg",
                cancelButton: "btn btn-default font-weight-bold btn-lg"
            }
        });
    });
});
/******/ })()
;
//# sourceMappingURL=admin-script.js.map