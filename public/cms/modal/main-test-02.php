<div class="modal fade bg-dark-o-50" id="mainTest-02" tabindex="-1" aria-labelledby="titleInput" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered px-5" role="document" style="max-width:600px; ">
        <div class="modal-content overflow-hidden">
            <div class="modal-header border-0">
                
                <h5 class="modal-title font-weight-bold"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times fa-sm" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body py-0">
                <p class="ex_tit">빈칸 채우기</p>
                <div class="ex_box">
                    <p class="ex_ask">빈칸에 알맞은 단어를 입력해주세요.</p>
                    <div class="ex_answer">
                        지구가 사과를 끌어당기는 힘을
                        <div class="inputbox qnaInput"> <!-- 정답인 경우 클래스 correct 추가 -->
                            <input class="form-control" type="text" id="q_answer" name="q_answer" maxlength="5" autofocus="autofocus">
                        </div>
                        이라고 합니다.
                    </div>
                </div>
                <div class="qaResultBox">
                    <div class="progress_wrap displayFlex_between flex-wrap flex-sm-nowrap">
                        <div class="progress displayFlex_between qna_progress progress_stop py-10"> <!-- 오답인 경우 클래스 progress_stop 정답일 경우 progress_moved 추가 -->
                            <div class="progress_bar">
                                <span class="progress_star text-warning" style="background-image:url('assets/media/1gram-img/ico_star.png')"></span>
                            </div>
                            <div class="progress_score qnaScore"><span>0</span>/1</div>
                        </div>
                        <p class="progress_info qnaScoreTxt">총 <span class="font-weight-bold">1</span>개 중 <span class="font-weight-bold">0</span>개를 획득하셨습니다.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center py-2 justify-content-center mb-5 border-0">
                <a href="#none" class="btn btn-ex font-weight-bold btn-lg px-15 rounded-pill btnQna">확인</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(".btnQna").on("click", function(){
        var q_answer = $("#q_answer").val();
        if ( q_answer=="" )
        {
            alert('빈칸에 알맞은 단어를 입력해주세요.');
            $("#q_answer").focus();
            return false;
        }
        else
        {
            if ( q_answer != "중력")
            {
                $(this).closest(".modal-content").children(".card-footer").hide();
                $("#q_answer").attr("disabled","true");
                $(".qnaInput").removeClass("correct");
                $(".qnaInput").addClass("incorrect");
                $(".qna_progress").removeClass("progress_moved");
                $(".qna_progress").addClass("progress_stop");
                $(".qnaScore").html('<span>0</span>/1');
                $(".qnaScoreTxt").html('총 <span class="font-weight-bold">1</span>개 중 <span class="font-weight-bold">0</span>개를 획득하셨습니다.');
                $(".qaResultBox").show();
                $(this).closest(".modal-content").children(".modal-footer").html('<button class="btn btn-warning font-weight-bold btn-lg px-10 rounded-pill btn-qa-reload">다시 도전하기 <i class="ki ki-reload float-right pr-0 pl-2"></i></button>');
            }
            else
            {   
                $(this).closest(".modal-content").children(".card-footer").hide();
                $("#q_answer").attr("disabled","true");
                $(".qnaInput").removeClass("incorrect");
                $(".qnaInput").addClass("correct");
                $(".qna_progress").removeClass("progress_stop");
                $(".qna_progress").addClass("progress_moved");
                $(".qnaScore").html('<span>1</span>/1');
                $(".qnaScoreTxt").html('총 <span class="font-weight-bold">1</span>개 중 <span class="font-weight-bold">1</span>개를 획득하셨습니다.');
                $(".qaResultBox").show();
                $(this).closest(".modal-content").children(".modal-footer").html('');
            }
        }
        $(".btn-qa-reload").on("click", function () {
            $(".qnaInput").removeClass("incorrect");
            $(".qnaInput").removeClass("correct");
            $(".qaResultBox").hide();
            $("#q_answer").attr("disabled","false");
            $(this).closest(".modal-content").children(".modal-footer").html('<a href="#none" class="btn btn-ex font-weight-bold btn-lg px-15 rounded-pill btnQna">확인</a>');
        });
    });
    
</script>