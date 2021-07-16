<div class="modal fade bg-dark-o-50" id="bbcPreview" tabindex="-1" aria-labelledby="bbcPreview" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl px-5" role="document" style="max-width: 1200px;">
        <div class="modal-content overflow-hidden">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">미리보기</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times fa-sm" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="tab p-5">
                    <ul class="nav nav-fill nav-pills w-100 nav-light-success" id="myTab1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link py-5 border border-success" id="pc-mode-tab" data-toggle="tab" href="#pc-mode">
                                <span class="nav-icon">
                                    <span class="svg-icon svg-icon-2x">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Devices/Display3.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <polygon fill="#000000" opacity="0.3" points="5 7 5 15 19 15 19 7">
                                                </polygon>
                                                <path
                                                    d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z"
                                                    fill="#000000" opacity="0.3"></path>
                                                <path
                                                    d="M5,7 L5,15 L19,15 L19,7 L5,7 Z M5.25,5 L18.75,5 C19.9926407,5 21,5.8954305 21,7 L21,15 C21,16.1045695 19.9926407,17 18.75,17 L5.25,17 C4.00735931,17 3,16.1045695 3,15 L3,7 C3,5.8954305 4.00735931,5 5.25,5 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">PC 미리보기</span>
                            </a>
                        </li>
                        <li class="nav-item mr-0 ml-2">
                            <a class="nav-link active py-5 border border-success" id="mobile-mode-tab" data-toggle="tab" href="#mobile-mode"
                                aria-controls="profile">
                                <span class="nav-icon">
                                    <span class="svg-icon svg-icon-2x">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/Devices/Android.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M7.5,4 L7.5,19 L16.5,19 L16.5,4 L7.5,4 Z M7.71428571,2 L16.2857143,2 C17.2324881,2 18,2.8954305 18,4 L18,20 C18,21.1045695 17.2324881,22 16.2857143,22 L7.71428571,22 C6.76751186,22 6,21.1045695 6,20 L6,4 C6,2.8954305 6.76751186,2 7.71428571,2 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
                                                <polygon fill="#000000" opacity="0.3"
                                                    points="7.5 4 7.5 19 16.5 19 16.5 4"></polygon>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">MOBILE 미리보기</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="preview px-5 pb-5">
                    <div class="tab-content" id="myTabContent1">
                        <div class="tab-pane fade" id="pc-mode" role="tabpanel" aria-labelledby="pc-mode-tab">
                            <!-- begin::pc preivew -->
                            <iframe src="cms/preview/student-attend.php" class="w-100 h-600px rounded" frameborder="0"
                                framespacing="0" marginheight="0" marginwidth="0"></iframe>
                            <!-- end::pc preivew-->
                        </div>
                        <div class="tab-pane fade active show text-center" id="mobile-mode" role="tabpanel"
                            aria-labelledby="mobile-mode-tab">
                            <!--  begin::mobile preivew-->
                            <iframe src="cms/preview/student-attend.php" class="w-375px h-600px rounded" frameborder="0"
                                framespacing="0" marginheight="0" marginwidth="0"></iframe>
                            <!-- end::mobile preivew-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>