<div class="content d-flex flex-column flex-column-fluid bg-white justify-content-center">
    <div class="container align-self-center">
            <div class="row justify-content-center">
                <div class="col-12" style="max-width:500px">
                <h1 class="text-primary text-center my-5 mt-sm-2 display-3"><strong>로그인</strong></h1>
                    <p class="font-size-h5 text-center mb-8">쉽고 편리하게 강의를 저작해 보세요!​</p>
                    <div class="card">
                        <div class="card-body">
                            <div class="px-3">
                                <form method="POST" action="" role="form">
                                    <input name="_token" type="hidden" value="">
                                    <div class="form-group input-group-lg">
                                        <label for="username">이메일</label>
                                        <input type="text" class="form-control" name="username" id="username" required="" placeholder="이메일을 입력하세요." data-parsley-error-message="이메일을 입력하세요.">
                                    </div>
                                    <div class="form-group input-group-lg">
                                        <label for="userpassword">비밀번호</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" required="" placeholder="비밀번호를 입력하세요." data-parsley-error-message="비밀번호를 입력하세요.">
                                    </div>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox">
                                        <span></span>
                                        <a class="text-dark-75 text-hover-primary px-2">이메일 저장</a>
                                    </label>
                                    
                                    <div class="mt-4 mb-5">
                                        <button class="btn btn-primary btn-block font-weight-bold btn-lg" type="button" onclick="location.href='login.php'">로그인</button>
                                    </div>
                                    <hr>
                                    <div class="pt-5 text-center">
                                        <h5 class="font-size-lg font-weight-bold my-5">SNS 간편로그인</h5>
                                        <ul class="list-inline">
                                            <li class="list-inline-item mr-2">
                                                <a href="javascript::void()" class="social-list-item text-white" data-provider="facebook">
                                                    <img src="./assets/media/logos/facebook.svg" alt="facebook" class="w-50px">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white" data-provider="kakao">
                                                    <img src="./assets/media/logos/kakao.svg" alt="kakao" class="w-50px">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white" data-provider="google">
                                                    <img src="./assets/media/logos/googleplus.svg" alt="naver" class="w-50px"> 
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="text-secondary font-size-lg">아직 1gram의 회원이 아니신가요? <a href="?pages=/register/sign-up" class="font-weight-boldtext-primary"><u>회원가입하기</u></a> </p>
                    </div>
                </div>
            </div>
        </div>
</div>