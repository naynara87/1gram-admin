<div class="content d-flex flex-column flex-column-fluid bg-white justify-content-center">
    <div class="container align-self-center">
                <div class="row justify-content-center">
                    <div class="col-sm-12" style="max-width:600px">
                    <h1 class="text-primary text-center my-5 mt-sm-2 display-3"><strong>회원가입​</strong></h1>
                    <p class="font-size-h5 text-center mb-8">쉽고 편리하게 강의를 저작해 보세요!</p>
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="p-2">
                                    <ul class="nav nav-pills nav-justified" role="tablist" style="display:none">
                                        <li class="nav-item">
                                            <a class="nav-link registTabBtn active" data-toggle="tab" href="javascript:void(0);" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">선생님 가입하기</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link registTabBtn " data-toggle="tab" href="javascript:void(0);" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">학생 가입하기</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-3 text-muted">
                                        <form method="POST" action="https://www.1gram.cc/cms/register" accept-charset="UTF-8" class="form-horizontal custom-validation " role="form" id="regist-form" encrypt="multipart/form-data"><input name="_token" type="hidden" value="wge0SD8bfl6E8zqg5qZhvm7kHlwXAvzHjVl7v09C">

                                        <input type="hidden" name="type" id="type" value="T">
                                        <input type="hidden" name="job" id="job" value="">
                                        <input type="hidden" id="is_ok" value="">

                                        <input type="hidden" name="username" id="username" value="">



                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            <div class="form-group">
                                                <label for="username">이메일</label>
                                                <div class="input-group" title="Using format option">
                                                    <input type="text" class="form-control input-group-lg" name="user_mail_id" id="user_mail_id" placeholder="이메일" required="">
                                                    <div class="input-group-append">
                                                        <a class="btn btn-light-primary font-weight-bold">중복확인</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="userpassword">비밀번호</label>
                                                <input type="password" class="form-control input-group-lg" name="password" id="userpassword" required="" placeholder="영문/숫자/특수문자 조합 8자 이상" data-parsley-required-message="비밀번호를 입력하세요." data-parsley-pattern="/^(?=.*[a-zA-z])(?=.*[0-9])(?=.*[$`~!@$!%*#^?&amp;\\(\\)\-_=+]).{8,}$/" data-parsley-pattern-message="비밀번호는 영문, 숫자, 특수문자(` ~ ! @ # $ % ^ &amp; * ( ) - _ = +)를 포함해서 8자 이상 입력해주세요.">
                                            </div>

                                            <div class="form-group">
                                                <label for="userpassword">비밀번호 확인</label>
                                                <input type="password" class="form-control input-group-lg" name="password_confirm" id="password_confirm" required="" placeholder="비밀번호 확인" data-parsley-equalto="#userpassword" data-parsley-error-message="입력하신 비밀번호와 일치하지 않습니다.">
                                            </div>

                                            <div class="form-group">
                                                <label for="userpassword">회원성명</label>
                                                <input type="text" class="form-control  input-group-lg" name="name" id="name" required="" placeholder="성명 입력" data-parsley-error-message="성명을 입력하세요.">
                                            </div>

                                            <div class="form-group">
                                                <label for="grade">소속학교</label>
                                                <select class="form-control select2 form-control-lg" id="kt_select2_6" name="param">
                                                    <option label="Label"></option>
                                                </select>
                                            </div>

                                            <div class="form-group 1gram_option" style="display:none">
                                                <label for="grade">학년</label>
                                            </div>
                                            <label class="checkbox mb-5">
                                                <input type="checkbox" required="">
                                                <span></span>
                                                <div class="text-dark-75 px-2">1gram의 <a href="?pages=/footer-articles/terms" class="text-primary font-weight-bold" target="_blank">이용약관</a>과 <a href="?pages=/footer-articles/privacy"  class=" font-weight-bold text-primary" target="_blank">개인정보 처리방침</a>에 대한 내용을 모두 확인하였으며, 이에 동의합니다.</div>
                                            </label>
                                            <button class="btn btn-primary btn-block font-weight-bold btn-lg" type="button" onclick="location.href='login.php'">1gram 가입하기</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-secondary font-size-lg">이미 1gram 회원이신가요? <a href="?pages=/register/sign-in" class="font-weight-boldtext-primary"><u> 로그인하기 </u></a> </p>
                        </div> 
                    </div>
                </div>
            </div>
</div>