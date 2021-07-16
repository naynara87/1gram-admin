<div class="content d-flex flex-column flex-column-fluid">
    <!--begin::Subheader-->
    <div class="subheader subheader-transparent py-6 py-lg-8">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap w-100">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap justify-content-between w-100">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">콘텐츠 등록</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">수업</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">콘텐츠 등록</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
                <p>수업을 구성할 콘텐츠를 등록합니다.</p>
            </div>
            <!--end::Info-->

        </div>
    </div>

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Page Layout-->
            <div class="card card-custom mb-3">
                <div class="card-body p-5">
                    <ul class="nav nav-fill nav-pills w-100" id="myTab1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active py-5 px-0" id="home-tab-1" data-toggle="tab" href="#youtube"
                                aria-controls="youtube">
                                <span class="nav-icon">
                                    <i class="fab fa-youtube"></i>
                                </span>
                                <span class="nav-text font-weight-bold">
                                    YOUTUBE</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 px-0" id="share-tab-1" data-toggle="tab" href="#share"
                                aria-controls="share">
                                <span class="nav-icon">
                                    <i class="fas fa-share-alt-square"></i>
                                </span>
                                <span class="nav-text font-weight-bold">자료나눔</span>
                            </a>
                        </li>
                        <!-- 생략 <li class="nav-item">
                            <a class="nav-link py-5 px-0" id="pc-tab-1" data-toggle="tab" href="#pc" aria-controls="pc">
                                <span class="nav-icon">
                                    <i class="fas fa-desktop"></i>
                                </span>
                                <span class="nav-text font-weight-bold">내 PC</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <!--end::Page Layout-->
            <div class="tab-content" id="myTabContent1">
                <!-- youtube 검색 -->
                <div class="tab-pane fade active show" id="youtube" role="tabpanel" aria-labelledby="youtube-tab-1">
                    <div class="card card-custom p-5 mb-5">
                        <div class="card-body">
                            <img src="./assets/media/1gram-img/onlineclass.png" class="mx-auto d-block" alt=""
                                style="width: 30%; min-width: 200px;">
                            <h5 class="text-center py-5">검색을 통해 <b>Youtube 콘텐츠</b>를
                                활용해서 손쉽게 <u>인터랙티브 강의</u>를 저작할 수 있습니다.
                            </h5>
                            <div class="row align-items-center flex-column">
                                <div class="col-12 col-sm-8 col-md-6 mx-auto px-0">

                                    <div class="quick-search border border-primary rounded">
                                        <!--begin:Form-->
                                        <form method="get" class="quick-search-form">
                                            <div class="input-group pr-3 py-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24">
                                                                    </rect>
                                                                    <path
                                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3">
                                                                    </path>
                                                                    <path
                                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                        fill="#000000" fill-rule="nonzero">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control font-size-h5-lg"
                                                    placeholder="검색어를 입력하세요." "="">
                                                            </div>
                                                        </form>
                                                        <!--end::Form-->
                                                        <!--begin::Scroll-->
                                                        <div class=" quick-search-wrapper scroll ps" data-scroll="true"
                                                    data-height="325" data-mobile-height="200"
                                                    style="height: 325px; overflow: hidden;">
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0"
                                                        style="left: 0px; width: 0px;">
                                                    </div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                    <div class="ps__thumb-y" tabindex="0"
                                                        style="top: 0px; height: 0px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Scroll-->
                                    </div>
                                </div>
                                <!-- begin:검색키워드 -->
                                <ul class="list-inline list-group-horizontal mx-auto mt-2">
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#창체</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#진로</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#국어</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#영어</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#수학</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#사회</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#과학</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#초등</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#중등</a></li>
                                    <li class="list-inline-item mx-0"><a href="#none"
                                            class="btn btn-clean btn-text-primary btn-sm">#인성교육</a></li>
                                </ul>
                                <!-- end:검색키워드 -->
                            </div>
                            <div class="d-flex justify-content-center mt-5 mx-auto">
                                <a href="http://new.1gram.cc/front/download/manual_video.mp4" data-lity=""  target="_blank"
                                    class="d-block rounded btn-light w-auto btn-clean d-inline-flex align-items-center btn-lg mr-2">
                                    영상 매뉴얼
                                </a>
                                <a href="http://new.1gram.cc/front/download/1gram_manual.pdf" data-lity="" href="#" target="_blank"
                                    class="d-block btn-light w-auto btn-clean d-inline-flex align-items-center btn-lg rounded">
                                    문서 매뉴얼
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-custom p-5">
                        <div class="card-body">
                            <img src="./assets/media/1gram-img/noresult.svg" class="mx-auto d-block mt-10" alt=""
                                style="width: 10%; min-width: 100px;">
                            <h5 class="text-center py-5"><span class="text-danger">""</span>에 대한 검색결과가 없습니다.</h5>
                        </div>
                    </div>
                    <div class="card card-custom p-30 mt-5">
                        <div class="card-body">
                           <!-- begin::로딩시 들어가는 화면 -->
                            <!-- end::로딩시 들어가는 화면 -->
                        </div>
                        <!-- begin::로딩애니메이션 -->
                        <div class="load-wrap">
                            <div class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img src="./assets/media/logos/logo-m2.svg" alt="logo">
                            <div class="load-6">
                                <div class="letter-holder">
                                <div class="l-1 letter">L</div>
                                <div class="l-2 letter">o</div>
                                <div class="l-3 letter">a</div>
                                <div class="l-4 letter">d</div>
                                <div class="l-5 letter">i</div>
                                <div class="l-6 letter">n</div>
                                <div class="l-7 letter">g</div>
                                <div class="l-8 letter">.</div>
                                <div class="l-9 letter">.</div>
                                <div class="l-10 letter">.</div>
                                </div>
                            </div>
                        </div>
                        <!-- end::로딩애니메이션 -->
                    </div>
                    <div class="card card-custom mt-5 mb-10">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-6">
                            <h3 class="card-title align-items-center">
                                <span class="card-label font-weight-bolder font-size-h4 text-dark-75 w-200px">
                                    <span class="svg-icon svg-icon-primary">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-18-122719/theme/demo1/dist/../src/media/svg/icons/General/Like.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                    fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11"
                                                    rx="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    인기영상
                                    <span class="text-muted mt-3 font-weight-bold font-size-lg ml-2">추천
                                        검색어</span>
                                </span>
                            </h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#"
                                        class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Text/Dots.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1">
                                                    <rect x="14" y="9" width="6" height="6" rx="3" fill="black"></rect>
                                                    <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                        fill-opacity="0.7"></rect>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span
                                                    class="text-primary text-uppercase font-weight-bolder font-size-sm">Add
                                                    new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Event</span>
                                                    <span class="navi-link-badge">
                                                        <span
                                                            class="label label-light-danger label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-graph-1"></i>
                                                    </span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Post</span>
                                                    <span class="navi-link-badge">
                                                        <span
                                                            class="label label-light-success label-rounded font-weight-bolder">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <div class="row">
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-primary position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-primary position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Files/File-done.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path
                                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <path
                                                            d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">
                                                초등1 영어</h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">Lorem Ipsum is
                                                simply dummy
                                                text of the printing and industry.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-danger position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-danger position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                        <path
                                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">초등3
                                                수학
                                            </h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">There are many
                                                variations
                                                of passages of Lorem Ipsum available.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-success position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-success position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/General/Thunder-move.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                                            fill="#000000"></path>
                                                        <path
                                                            d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">초등6
                                                과학
                                            </h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">Contrary to
                                                popular
                                                belief,
                                                Lorem Ipsum is not simply random text.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-info position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-info position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Alarm-clock.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z"
                                                            fill="#000000"></path>
                                                        <path
                                                            d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                        <path
                                                            d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">중등
                                                영어
                                            </h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">If you are
                                                going to
                                                use a
                                                passage of Lorem Ipsum, you need.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-primary position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-primary position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Files/File-done.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path
                                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <path
                                                            d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">
                                                초등1 영어</h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">Lorem Ipsum is
                                                simply dummy
                                                text of the printing and industry.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-danger position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-danger position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                        <path
                                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">초등3
                                                수학
                                            </h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">There are many
                                                variations
                                                of passages of Lorem Ipsum available.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-success position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-success position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/General/Thunder-move.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                                            fill="#000000"></path>
                                                        <path
                                                            d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">초등6
                                                과학
                                            </h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">Contrary to
                                                popular
                                                belief,
                                                Lorem Ipsum is not simply random text.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <div class="col-3">
                                    <!--begin::Item-->
                                    <div
                                        class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b align-items-stretch">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
                                            <span
                                                class="svg-icon svg-icon-4x svg-icon-info position-absolute opacity-15">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"
                                                    viewBox="0 0 70 70" fill="none">
                                                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                        <path
                                                            d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="svg-icon svg-icon-lg svg-icon-info position-absolute">
                                                <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Alarm-clock.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z"
                                                            fill="#000000"></path>
                                                        <path
                                                            d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                        <path
                                                            d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="ml-1">
                                            <h3 class="text-dark-75 font-weight-bolder font-size-lg">중등
                                                영어
                                            </h3>
                                            <p class="m-0 text-dark-50 font-weight-bold">If you are
                                                going to
                                                use a
                                                passage of Lorem Ipsum, you need.</p>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!-- 유튜브 검색 시 나오는 화면 -->
                    <div class="card card-custom">
                        <div class="card-header border-0 pt-6">
                            <div
                                class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap w-100">
                                <h3 class="card-title">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75 w-200px">
                                        <span class="svg-icon svg-icon-primary">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-18-122719/theme/demo1/dist/../src/media/svg/icons/Media/Youtube.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M4.22266882,4 L19.8367728,4.00001353 C21.3873185,4.00001353 22.6823897,5.1816009 22.8241881,6.72564925 C22.9414021,8.00199653 23.0000091,9.40113909 23.0000091,10.9230769 C23.0000091,12.7049599 22.9196724,14.4870542 22.758999,16.26936 L22.7589943,16.2693595 C22.6196053,17.8155637 21.3235899,19 19.7711155,19 L4.22267091,19.0000022 C2.6743525,19.0000022 1.38037032,17.8217109 1.23577882,16.2801587 C1.07859294,14.6043323 1,13.0109461 1,11.5 C1,9.98905359 1.07859298,8.39566699 1.23577893,6.7198402 L1.23578022,6.71984032 C1.38037157,5.17828994 2.67435224,4 4.22266882,4 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M11.1821576,14.8052934 L15.5856084,11.7952868 C15.8135802,11.6394552 15.8720614,11.3283211 15.7162299,11.1003494 C15.6814583,11.0494808 15.6375838,11.0054775 15.5868174,10.970557 L11.1833666,7.94156929 C10.9558527,7.78507001 10.6445485,7.84263875 10.4880492,8.07015268 C10.4307018,8.15352258 10.3999996,8.25233045 10.3999996,8.35351969 L10.3999996,14.392514 C10.3999996,14.6686564 10.6238572,14.892514 10.8999996,14.892514 C11.000689,14.892514 11.0990326,14.8621141 11.1821576,14.8052934 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        Youtube 검색
                                    </span>
                                </h3>
                                <!--begin::Details-->
                                <div class="input-group align-items-center justify-content-end w-sm-50 ">
                                    <div class="input-icon w-250px">
                                        <input type="text" class="form-control " placeholder="검색어를 입력하세요">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/General/Search.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3">
                                                    </path>
                                                    <path
                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class="input-group-append ml-1">
                                        <button class="btn btn-primary font-weight-bold rounded" type="button"
                                            style="min-width:55px;">검색</button>
                                    </div>
                                </div>
                                <!--end::Details-->
                            </div>
                        </div>
                        <!-- 자료나눔 컨텐츠 -->
                        <div class="card-body d-flex flex-column-fluid">

                            <!--begin::Page Layout-->
                            <div class="d-flex flex-row">

                                <!--begin::Content-->
                                <div class="flex-row-fluid">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left">
                                                            <a href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <button class="btn font-weight-bold btn-primary btn-shadow" data-toggle="modal" data-target="#sharePreview">인터랙션 만들기</button>
                                                            <button class="btn font-weight-bold btn-warning btn-shadow ml-2" data-toggle="modal" data-target="#titleInput">인터랙션 만들기</button>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Pagination-->
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="d-flex flex-wrap mr-3">
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-double-left icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-left icon-xs"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-right icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-double-right icon-xs"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <select
                                                class="form-control form-control-sm font-weight-bold border-0 bg-light-primary"
                                                style="width: 75px;">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Pagination-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Page Layout-->

                        </div>
                    </div>
                    <!-- //유튜브 검색 시 나오는 화면 -->
                </div>
                <!-- //youtube 검색 -->
                <!-- 자료나눔 -->
                <div class="tab-pane fade" id="share" role="tabpanel" aria-labelledby="share-tab-1">
                    <div class="card card-custom">
                        <div class="card-header border-0 pt-6">
                            <div
                                class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap w-100">
                                <h3 class="card-title">
                                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75 w-150px">
                                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-18-122719/theme/demo1/dist/../src/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        자료나눔 검색
                                    </span>
                                </h3>
                                <!--begin::Details-->
                               
                                <div class="d-flex align-items-center">
                                                    <div class="d-flex flex-wrap">
                                                        <select class="form-control mr-1 my-1" name="select" tabindex="null" style="width:90px;">
                                                            <option>초등학교</option>
                                                            <option>중학교</option>
                                                            <option>고등학교</option>
                                                            <option>공통</option>
                                                        </select>
                                                        <select class="form-control mr-1 my-1" name="select" tabindex="null" style="width:70px;">
                                                            <option>학년</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <select class="form-control mr-1 my-1" name="select" tabindex="null" style="width:75px;">
                                                            <option>학기</option>
                                                            <option>1학기</option>
                                                            <option>2학기</option>
                                                            <option>공통</option>
                                                        </select>
                                                        <select class="form-control mr-1 my-1" name="select" tabindex="null" style="width:130px;">
                                                            <option>교과</option>
                                                            <option>국어</option>
                                                            <option>수학</option>
                                                            <option>사회/역사/도덕</option>
                                                        </select>
                                                        <div class="input-icon mr-1 my-1">
                                                            <input type="text" class="form-control" placeholder="검색어를 입력하세요">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/General/Search.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3">
                                                                        </path>
                                                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <button class="btn btn-primary my-1 font-weight-bold" type="button" style="width:55px;">검색</button>
                                                    </div>
                                                </div>
                                
                                <!--end::Details-->
                            </div>
                        </div>
                        <!-- 자료나눔 컨텐츠 -->
                        <div class="card-body d-flex flex-column-fluid">

                            <!--begin::Page Layout-->
                            <div class="d-flex flex-row">

                                <!--begin::Content-->
                                <div class="flex-row-fluid">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch lecture-box">
                                                <!--begin::Body-->
                                                <div class="card-body text-center py-3 px-5 ">
                                                    <div class="product-img overlay rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                                alt="thumbnail"
                                                                class="img-fluid mx-auto d-block lec_title_code">
                                                            </div>
                                                        <div class="overlay-layer align-items-end justify-content-center pb-4">
                                                            <a href="https://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn font-weight-bold btn-primary btn-shadow btn-prv">
                                                                <div class="btn-wrapper"><i class="flaticon2-magnifier-tool"></i><span class="icon-text">미리보기</span></div>
                                                            </a>
                                                            <a class="btn font-weight-bold btn-warning btn-shadow ml-2 btn-intr" data-toggle="modal" data-target="#titleInput" href="none">
                                                                <div class="btn-wrapper"><i class="flaticon2-cube"></i><span class="icon-text">인터랙션 만들기</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 text-center" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                                        <h5 class="mb-3 ellipsis-multi text-left"><a
                                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                                class="text-dark text-hover-primary">초등
                                                                사회 4학년 1학기 우리 지역의
                                                                문화유산
                                                                세계유산에 대해 알아보자</a></h5>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Pagination-->
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="d-flex flex-wrap mr-3">
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-double-left icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-left icon-xs"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-right icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="fa fa-angle-double-right icon-xs"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <select
                                                class="form-control form-control-sm font-weight-bold border-0 bg-light-primary"
                                                style="width: 75px;">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Pagination-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Page Layout-->

                        </div>
                    </div>
                    
                </div>
                <!-- //자료나눔 -->
                <!-- 내 pc 생략
                <div class="tab-pane fade" id="pc" role="tabpanel" aria-labelledby="pc-tab-1">
                    <div class="card card-custom p-9">
                        <form action="/upload-target" drop-zone="" id="file-dropzone"
                            class="dropzone dropzone-default dropzone-primary dz-clickable py-30 w-100">
                            <div class="dropzone-msg dz-message needsclick">
                                <span class="svg-icon svg-icon-primary svg-icon-5x">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                fill="#000000" opacity="0.3"></path>
                                            <path
                                                d="M8.54301601,14.4923287 L10.6661,14.4923287 L10.6661,16.5 C10.6661,16.7761424 10.8899576,17 11.1661,17 L12.33392,17 C12.6100624,17 12.83392,16.7761424 12.83392,16.5 L12.83392,14.4923287 L14.9570039,14.4923287 C15.2331463,14.4923287 15.4570039,14.2684711 15.4570039,13.9923287 C15.4570039,13.8681299 15.41078,13.7483766 15.3273331,13.6563877 L12.1203391,10.1211145 C11.934804,9.91658739 11.6185961,9.90119131 11.414069,10.0867264 C11.4020553,10.0976245 11.390579,10.1091008 11.3796809,10.1211145 L8.1726869,13.6563877 C7.98715181,13.8609148 8.00254789,14.1771227 8.20707501,14.3626578 C8.29906387,14.4461047 8.41881721,14.4923287 8.54301601,14.4923287 Z"
                                                fill="#000000"></path>
                                        </g>
                                    </svg>
                                </span>
                                <h3 class="dropzone-msg-title mt-3">업로드할 파일을 드래그 앤 드롭하세요.
                                </h3>
                                <span class="dropzone-msg-desc d-block">최대 파일 크기 : 250Mbyte I 권장 파일 포맷 :
                                    mp4(h.264/avc)<br>

                                    권장 해상도 : HD(1280X720), Full HD(1920X1080)<br>

                                    그 외(avi, mpg, mov 등) 포맷은 변환 속도가 현저히 떨어질 수 있습니다.</span>
                                <a class="btn btn-light-primary font-weight-bold dz-clickable mt-5 btn-lg">파일선택</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- //내 pc -->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>