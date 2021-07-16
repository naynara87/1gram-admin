<div class="modal fade bg-dark-o-50" id="mainTest-03" tabindex="-1" aria-labelledby="titleInput" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered px-5" role="document" style="max-width:600px; ">
        <div class="modal-content overflow-hidden">
            <div class="modal-header border-0">
                <h5 class="modal-title font-weight-bold"></h5>
                <button type="button" class="close ox-close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times fa-sm" aria-hidden="true"></i>
                </button>
            </div>
            <!-- begin:: modal-body -->
            <div class="modal-body py-0">
                <p class="ex_tit">OX 퀴즈</p>
                <div class="ex_box">
                    <p class="ex_ask">뉴턴은 <strong>만유 인력의 법칙</strong>을 발견했습니다.</p>
                    <div class="ex_answer">
                        <div class="ox-list">
                            <div class="ox-box true">
                                <label class="sr-only">참</label>
                                <img src="./assets/media/1gram-img/btn/O.png" class="on">
                                <img src="./assets/media/1gram-img/btn/O_clicked.png" class="off">
                            </div>
                            <div  class="ox-box false">
                                <label class="sr-only">거짓</label>
                                <img src="./assets/media/1gram-img/btn/X.png" class="on">
                                <img src="./assets/media/1gram-img/btn/X_clicked.png" class=off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oxResultBox">
                    <div class="progress_wrap displayFlex_between flex-wrap flex-sm-nowrap">
                        <div class="progress displayFlex_between ox_progress py-10"> <!-- 오답인 경우 클래스 progress_moved 추가 -->
                            <div class="progress_bar">
                                <span class="progress_star text-warning" style="background-image:url('assets/media/1gram-img/ico_star.png')"></span>
                            </div>
                            <div class="progress_score oxScore"></div>
                        </div>
                        <p class="progress_info oxScoreTxt"></p>
                    </div>
                </div>
            </div>
            <!-- end:: modal-body -->
            <div class="modal-footer text-center py-2 justify-content-center mb-5 border-0"></div>
        </div>
    </div>
</div>


<script>
$(".quiz-btn-3").on("click", function () {
    $('#mainTest-03').show();
});

//메인 OX 클릭 활성화
$(".ox-box").on("click", function () {
    console.log('click');
    $(this).addClass("active");
    $(this).removeClass("muted");
    $(this).siblings().removeClass("active");
    $(this).siblings().addClass("muted");
});

//메인 O 결과시 결과값
$(".ox-box.true").on("click", function () {
    $(".btn-ox-reload").hide();
    $(".ox_progress").removeClass("progress_stop");
    $(".ox_progress").addClass("progress_moved");
    $(".oxScore").html('<span>1</span>/1');
    $(".oxScoreTxt").html('총 <span class="font-weight-bold">1</span>개 중 <span class="font-weight-bold">1</span>개를 획득하셨습니다.');
    $(".oxResultBox").show();
    return false;
});

//메인 X 결과시 결과값
$(".ox-box.false").on("click", function () {
    $(this).closest(".modal-content").children(".modal-footer").hide();
    $(".ox_progress").removeClass("progress_moved");
    $(".ox_progress").addClass("progress_stop");
    $(".oxScore").html('<span>0</span>/1');
    $(".oxScoreTxt").html('총 <span class="font-weight-bold">1</span>개 중 <span class="font-weight-bold">0</span>개를 획득하셨습니다.');
    $(this).closest(".modal-content").children(".modal-footer").show();
    $(this).closest(".modal-content").children(".modal-footer").html('<button class="btn btn-warning font-weight-bold btn-lg px-10 rounded-pill btn-ox-reload">다시 도전하기 <i class="ki ki-reload float-right pr-0 pl-2"></i></button>');    
    
    $(".btn-ox-reload").on("click", function () {
        $(".oxResultBox").hide();
        $(this).closest(".modal-content").children(".modal-footer").html('');
    $(".ox-box").removeClass("muted");
    $(".ox-box").removeClass("active");
    });
    return false;
});


// var clicked = 0;
// $(".ox-box").on("click",function(){
//     if( clicked <= 0){    
//         console.log('click1');
//         $(this).addClass("active");
//         $(this).removeClass("muted");
//         $(this).siblings().removeClass("active");
//         $(this).siblings().addClass("muted");
//     }
//     else if( clicked >=1 ){    
//         event.preventDefault(); 
//     }
//     clicked ++;
// 	});
</script>