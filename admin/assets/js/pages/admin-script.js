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

//chart1
$(function () {
    var options = {
        series: [{
            name: "접속자",
            data: ['0', '1', '2', '0', '0', '0', '16', '5', '12', '7', '10', '11', '3', '4', '14', '6', '11', '2', '0', '1', '50', '60', '20', '5']
        }],
        chart: {
            toolbar: {
                show: false
            },
            height: 500,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'],
        }
    };

    var chart = new ApexCharts(document.querySelector("#userChart_01"), options);
    chart.render();
});
/******/ })()
;
//# sourceMappingURL=admin-script.js.map