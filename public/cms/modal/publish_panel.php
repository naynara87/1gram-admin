<!--begin::Demo Panel-->
<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
        <h4 class="font-weight-bold m-0 d-flex align-items-center">
                <span class="svg-icon svg-icon-primary svg-icon-2x mr-2">
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
                                <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                </span>    
                수업 배포하기
        </h4>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content d-flex align-items-start flex-column" style="height: calc( 100% - 50px );"">
        
        <!--begin::Purchase-->
        <div class="offcanvas-body w-100 mb-auto">
            <a href="#" class="btn btn-block btn-danger font-weight-bold btn-lg  mb-5" data-toggle="modal" data-target="#classSelect"><i class="la la-chalkboard-teacher pb-1"></i>클래스 선택</a>
            <ul class="class-select-list">
                <li class="class-group">1학년 A(4명)</li>
                <li class="class-group">2학년 B(3명)</li>
                <li class="class-group">3학년 C(9명)</li>
            </ul>
            <a href="#" class="btn btn-block btn-outline-danger font-weight-bold btn-lg  mb-5"><i class="la la-external-link-alt"></i>클래스룸 배포</a>
            <a href="#" class="btn btn-block btn-outline-info font-weight-bold btn-lg mb-5 copy_btn"><i class="la la-link"></i>링크 복사하기</a>
        </div>
        <div class="offcanvas-footer w-100">
            <button class="btn btn-block btn-info btn-shadow font-weight-bold btn-lg" id="publish_confirm">연구실로 이동</button>
            <!-- href="?cms=/lab/main -->
        </div>
        <!--end::Purchase-->
    </div>
    <!--end::Content-->
</div>