<div class="content d-flex flex-column flex-column-fluid">
    <!--begin::Subheader-->
    <div class="subheader subheader-transparent py-6 py-lg-8">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap w-100">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap justify-content-between w-100">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">강의관리</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">연구실</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">강의관리</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
                <p>선생님들이 직접 저작한 강의를 자유롭게 활용할 수 있도록
                    함께 나누는 공간입니다.</p>
            </div>
            <!--end::Info-->

        </div>
    </div>


    <div class="subheader py-2 py-lg-6 subheader-transparent">
        <div class="container d-flex align-items-center flex-wrap flex-sm-nowrap justify-content-sm-between">
            <!--begin::Details-->
            <div class="d-flex align-items-center">
                <div class="d-flex flex-wrap">
                    <div class="input-icon mr-1 my-1">
                        <input type="text" class="form-control" placeholder="검색어를 입력하세요" style="min-width:200px;">
                        <span class="svg-icon">
                            <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/General/Search.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path
                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                        fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <button class="btn btn-primary my-1" type="button" style="width:55px;">검색</button>
                </div>
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::새폴더-->
                <a href="#" data-toggle="modal" data-target="#folderReg" class="btn btn-warning font-weight-bolder font-size-sm w-100px">
                    <span class="svg-icon svg-icon-md">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                <path
                                    d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                    fill="#000000"></path>
                            </g>
                        </svg>
                    </span>
                    새폴더</a>
                <!-- end::새폴더-->
                <!--begin::수업배포하기-->
                <button id="pubAlertDefalt" class="btn btn-primary font-weight-bolder font-size-sm px-5 ml-2">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Home/Book-open.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z"
                                    fill="#000000"></path>
                                <path
                                    d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z"
                                    fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span> 수업 배포하기</button>
                <!-- end::수업배포하기-->
                <!-- begin::버튼추가 학생관리 -->
                <!-- <a href="?cms=/lab/class"
                    class="btn btn-info font-weight-bolder font-size-sm px-5 ml-2">
                    <span class="svg-icon svg-icon-md">
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                <path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                    </span> 학생관리
                </a> -->
                <!-- end::버튼추가 학생관리 -->
                <button class="btn btn-outline-dark ml-2 btn-icon btn_list" title="리스트 정렬"><i class="ki ki-bold-sort"></i></button>
                <button class="btn btn-outline-dark ml-1 btn-icon btn_grid active" title="그리드 정렬"><i class="ki ki-menu-grid"></i></button>
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Page Layout-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->

                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid">
                    <!--begin::Row-->
                    <div class="row lecDataBox-filter-wrap">
                        <!--begin::Col폴더-->
                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2 check-box" style="visibility: hidden;">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline">
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <a href="#none" class="lecDataBox-folder d-flex align-items-center justify-content-center flex-column py-lg-15 py-md-5 py-10">
                                        <span class="svg-icon svg-icon-primary svg-icon-8x">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Files/Folder-cloud.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M8.63657261,16.4632487 C7.65328954,15.8436137 7,14.7480988 7,13.5 C7,11.5670034 8.56700338,10 10.5,10 C12.263236,10 13.7219407,11.3038529 13.9645556,13 L15,13 C16.1045695,13 17,13.8954305 17,15 C17,16.1045695 16.1045695,17 15,17 L10,17 C9.47310652,17 8.99380073,16.7962529 8.63657261,16.4632487 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h5 class="text-dark my-5">공유된 강의</h5>
                                    </a>

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col폴더-->
                        <!--begin::Col이전-->
                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2" style="visibility: hidden;">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <a href="#none"
                                        class="lecDataBox-folder d-flex align-items-center justify-content-center flex-column py-lg-15 py-md-5 py-10">
                                        <span class="svg-icon svg-icon-primary svg-icon-8x">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Communication/Reply.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M21.4451171,17.7910156 C21.4451171,16.9707031 21.6208984,13.7333984 19.0671874,11.1650391 C17.3484374,9.43652344 14.7761718,9.13671875 11.6999999,9 L11.6999999,4.69307548 C11.6999999,4.27886191 11.3642135,3.94307548 10.9499999,3.94307548 C10.7636897,3.94307548 10.584049,4.01242035 10.4460626,4.13760526 L3.30599678,10.6152626 C2.99921905,10.8935795 2.976147,11.3678924 3.2544639,11.6746702 C3.26907199,11.6907721 3.28437331,11.7062312 3.30032452,11.7210037 L10.4403903,18.333467 C10.7442966,18.6149166 11.2188212,18.596712 11.5002708,18.2928057 C11.628669,18.1541628 11.6999999,17.9721616 11.6999999,17.7831961 L11.6999999,13.5 C13.6531249,13.5537109 15.0443703,13.6779456 16.3083984,14.0800781 C18.1284272,14.6590944 19.5349747,16.3018455 20.5280411,19.0083314 L20.5280247,19.0083374 C20.6363903,19.3036749 20.9175496,19.5 21.2321404,19.5 L21.4499999,19.5 C21.4499999,19.0068359 21.4451171,18.2255859 21.4451171,17.7910156 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h5 class="text-dark my-5">이전으로 가기</h5>
                                    </a>

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col이전-->
                        <!--begin::Col전체-->
                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2" style="visibility: hidden;">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <a href="#none"
                                        class="lecDataBox-folder d-flex align-items-center justify-content-center flex-column py-lg-15 py-md-5 py-10">
                                        <span class="svg-icon svg-icon-primary svg-icon-8x">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Home/Home.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h5 class="text-dark my-5">홈 이동</h5>
                                    </a>

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col전체-->
                        <!--begin::Col폴더추가-->
                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <a href="#none"
                                        class="lecDataBox-folder lecDataBox-folder d-flex align-items-center justify-content-center flex-column py-lg-15 py-md-5 py-10">
                                        <span class="svg-icon svg-icon-warning svg-icon-8x">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Files/Group-folders.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h5 class="my-5 text-truncate text-dark w-100" data-toggle="tooltip" data-theme="dark" data-placement="top" title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            강의 중복생성 테스트(3/19) 강의 강의 중복생성 테스트(3/19) 강의
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col폴더추가-->
                        <!--begin::Col폴더추가-->
                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon">
                                                                <i class="la la-edit"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <a href="#none"
                                        class="lecDataBox-folder d-flex align-items-center justify-content-center flex-column py-lg-15 py-md-5 py-10">
                                        <span class="svg-icon svg-icon-warning svg-icon-8x">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Files/Group-folders.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <h5 class="my-5 text-truncate text-dark w-100" data-toggle="tooltip" data-theme="dark" data-placement="top" title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            강의 중복생성 테스트(3/19) 강의 강의 중복생성 테스트(3/19) 강의
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col폴더추가-->
                        <!--begin::Col-->
                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox"  data-card="true" id="kt_card_3">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2" >
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                        <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">한줄 제목 초등 사회 4학년</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-danger font-size-11 m-1">종료</span>
                                    </div>
                                </div>
                                <!--end::Body-->
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-3 col-lg-4 col-sm-6 lecDataBox">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                        <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"  data-toggle="tooltip" title="" data-original-title="이미지 바꾸기"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                        <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                       <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative">
                                        <a href="#none" data-toggle="modal" data-target="#bbcPreview">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </a>
                                    </div>
                                    <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top" title=""
                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                        <h5 class="mb-3 ellipsis-multi text-left text-hover-primary"><a
                                                href="javascript:void(0)" data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                지역의
                                                문화유산
                                                세계유산에 대해 알아보자</a></h5>
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                    </div>
                                    <div> <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                       <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative">
                                        <a href="#none" data-toggle="modal" data-target="#bbcPreview">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </a>
                                    </div>
                                    <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top" title=""
                                        data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                        <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                class="text-dark text-hover-primary">초등 사회 4학년 1학기 우리
                                                지역의
                                                문화유산
                                                세계유산에 대해 알아보자</a></h5>
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                    </div>
                                    <div> <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                       <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                       <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                       <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <div class="card card-custom gutter-b card-stretch  lecture-box">
                                <!--begin::Body-->
                                <div class="card-body text-center py-3 px-5">
                                    <!-- check -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                            <input type="checkbox" name="select" value="1">
                                            <span></span>
                                        </label>
                                        <div class="dropdown dropdown-inline" >
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Text/Dots.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1">
                                                            <rect x="14" y="9" width="6" height="6" rx="3" fill="black">
                                                            </rect>
                                                            <rect x="3" y="9" width="6" height="6" rx="3" fill="black"
                                                                fill-opacity="0.7">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi navi-hover navi-active navi-accent">

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareMove">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-square-o"></i>
                                                            </span>
                                                            <span class="navi-text">이동하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="cms/preview/student-enter.php" class="navi-link" target="_blank">
                                                            <span class="navi-icon">
                                                                <i class="la la-desktop"></i>
                                                            </span>
                                                            <span class="navi-text">미리보기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link modify_btn">
                                                                            <span class="navi-icon"><i class="lar la-edit"></i></span>
                                                                            <span class="navi-text">수정하기</span>
                                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link copy_btn">
                                                            <span class="navi-icon">
                                                                <i class="la la-link"></i>
                                                            </span>
                                                            <span class="navi-text">링크 복사하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link" data-toggle="modal"  data-target="#shareSelect">
                                                            <span class="navi-icon">
                                                                <i class="la la-share-alt-square"></i>
                                                            </span>
                                                            <span class="navi-text">공유하기</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-separator mt-3 opacity-70 remove_btn"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link text-danger remove_btn" data-card-tool="remove">
                                                            <span class="navi-icon">
                                                                <i class="la la-trash-o text-danger"></i>
                                                            </span>
                                                            <span class="navi-text text-danger">삭제하기</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //check -->
                                    <div class="product-img position-relative" data-toggle="modal"
                                        data-target="#bbcPreview">
                                        <div class="img-box rounded">
                                            <img src="https://www.1gram.cc/storage/image/lecture/thumbnail/2021/2/17/4080faa0-70f4-11eb-9117-194bc8bd39a0.jpg"
                                                alt="" class="img-fluid mx-auto d-block lec_title_code"
                                                data-code="96e5f7ae"
                                                data-link="https://www.1gram.cc/student/class/96e5f7ae">
                                        </div>
                                       <div class="mt-4 text-center" data-toggle="tooltip" data-theme="dark" data-placement="top"
                                            title="" data-original-title="초등 사회 4학년 1학기 우리 지역의 문화유산 세계유산에 대해 알아보자">
                                            <h5 class="ellipsis-multi text-left"><a href="javascript:void(0)"
                                                    data-code="96e5f7ae"
                                                    data-link="https://www.1gram.cc/student/class/96e5f7ae?share=true"
                                                    class="text-dark text-hover-primary">111초등 사회 4학년 1학기 우리
                                                    지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해 알아보자 지역의 문화유산 세계유산에 대해
                                                    알아보자</a></h5>
                                        </div>

                                    </div>

                                    <div class="class-status mt-3">
                                        <p class="text-muted">종료일 : 2021-06-30</p>
                                        <span class="badge badge-success font-size-11 m-1">운영중</span>
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
                            <a href="#" class="btn btn-icon btn-sm  bg-white mr-2 my-1">
                                <i class="fa fa-angle-double-left icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm  bg-white mr-2 my-1">
                                <i class="fa fa-angle-left icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">1</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">2</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">3</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">4</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">5</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">6</a>
                            <a href="#" class="btn btn-icon btn-sm  bg-white mr-2 my-1">
                                <i class="fa fa-angle-right icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-sm  bg-white mr-2 my-1">
                                <i class="fa fa-angle-double-right icon-xs"></i>
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <select class="form-control font-weight-bold border-0 bg-white"
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
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>


