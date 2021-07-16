<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader subheader-transparent py-6 py-lg-8">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap w-100">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap justify-content-between w-100">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">배포하기</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">수업</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">배포하기</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
                <p>인터랙티브 수업을 저장하고 배포합니다.</p>
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--begin::배포 내용박스-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form_1" novalidate="novalidate" action='#'>
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <!-- begin:배포 내용 -->
                            <div class="card-body">
                                <!-- begin:수업명 -->
                                <div class="form-group row fv-plugins-icon-container">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label font-weight-bold">수업명</label>
                                    <div class="col-md-10">
                                        <input class="form-control form-control-lg is-invalid" type="text" id="title" name="title"
                                            placeholder="수업명을 입력하세요." required=""
                                            data-parsley-required-message="수업명을 입력해 주세요.">
                                        <div class="invalid-feedback">수업명을 입력해 주세요.</div>
                                    </div>
                                </div>
                                <!-- begin:수업소개 -->
                                <div class="form-group row fv-plugins-icon-container">
                                    <label for="example-text-input" class="col-md-2 col-form-label font-weight-bold">수업
                                        소개</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control form-control-lg" id="lecture_description_editor"
                                            name="lecture_description_editor" rows="3" required=""
                                            placeholder="수업에 대한 소개를 입력하세요."
                                            data-parsley-required-message="수업 소개를 입력해 주세요."></textarea>
                                        <div class="fv-plugins-message-container"></div>
                                    </div>
                                </div>
                                <!-- begin:영상내용 -->
                                <div class="inter_movie_box fv-plugins-icon-container">
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                            class="col-md-2 col-form-label font-weight-bold">제목</label>
                                        <div class="col-md-10">
                                            <input class="form-control form-control-lg" type="text" inline-data="true"
                                                name="movie_title" placeholder="제목을 입력하세요." required=""
                                                data-parsley-required-message="동영상 제목을 입력하셔야 합니다.">
                                            <input type="hidden" name="url" inline-data="true"
                                                value="http://new.1gram.cc/bubble/embed/380">
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label font-weight-bold">영상</label>
                                        <div class="col-md-10">
                                            <div class="video-container">
                                                <iframe  src="http://new.1gram.cc/bubble/embed/380" frameborder="0" allowfullscreen="allowfullscreen" iframe_uuid="ef74c8d6-cf78-4dc1-ae80-1db87955b7e0"></iframe>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input"
                                            class="col-md-2 col-form-label font-weight-bold">설명</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control form-control-lg" rows="4" name="movie_desc"
                                                inline-data="true" placeholder="동영상 설명을 입력하세요." required=""
                                                data-parsley-required-message="동영상 설명을 입력하세요."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- begin:대표이미지 등록 -->
                                <div class="form-group row fv-plugins-icon-container">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label font-weight-bold">대표이미지 등록</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-changed symbol symbol-100 symbol-2by3" id="kt_image_2" >
                                            <div class="image-input-wrapper symbol-label" style="background-image: url(assets/media/1gram-img/default-image.png)"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="이미지 바꾸기">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="profile_avatar_remove" />
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="이미지 삭제">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- begin:수업기간 -->
                                <div class="form-group row fv-plugins-icon-container">
                                    <label for="example-text-input"
                                        class="col-md-2 col-form-label font-weight-bold">수업기간</label>
                                    <div class="col-xl-10 col-12">
                                        <div class="input-daterange" id="kt_datepicker_5">
                                            <div class="start-date float-left">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-lg" name="start"
                                                        placeholder="yyyy/mm/dd">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text border">
                                                            <i class="la la-calendar-check-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback">수업명을 입력해 주세요.</div>
                                            </div>
                                            <div class="input-group-append float-left">
                                                <span class="input-group-text bg-white border-0">
                                                    ~
                                                </span>
                                            </div>
                                            <div class="end-date float-left">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-lg" name="end"
                                                        placeholder="yyyy/mm/dd">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text border">
                                                            <i class="la la-calendar-check-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback">수업명을 입력해 주세요.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- begin:수업기간 -->


                            </div>
                            <!-- end::배포 내용 -->
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                           
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <button data-toggle="modal" data-target="#bbcPreview" type="button"
                                    class="btn btn-outline-success btn-lg font-weight-bold bg-white btn-hover-success">미리보기</button>

                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-light btn-lg w-80px mr-2 font-weight-bold btn-shadow-hover rounded bg-white">취소</button>
                                    <button type="button" 
                                        class="btn btn-primary btn-lg w-80px font-weight-bold btn-shadow-hover rounded mr-2"
                                        name="submitButton" id="interSave">저장</button>
                                    <button type="button"
                                        class="btn btn-success btn-lg w-120px font-weight-bold btn-shadow-hover rounded"
                                        id="kt_demo_panel_toggle">배포하기</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::배포 내용박스-->
</div>