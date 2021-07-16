
<!--begin::Header-->
<div id="kt_header" class="header header-fixed">

<!--begin::Container-->
<div class="container-fluid d-flex align-items-stretch justify-content-between">

	<!--begin::Header Menu Wrapper-->
	<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

		<!--begin::Header Menu-->
		<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">

			<!--begin::Header Nav-->
			<div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
<!--begin::Info-->
<div class="d-flex align-items-center flex-wrap mr-1">

	<!-- begin::사이드바 접는 버튼 -->
	<button class="brand-toggle btn btn-sm px-0 active d-none d-lg-block" id="kt_aside_toggle">
		<span class="svg-icon svg-icon svg-icon-xl">
			<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-left.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24"></polygon>
					<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)">
					</path>
					<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)">
					</path>
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</button>
	<!--end::사이드바 접는 버튼-->
	<!--begin::Page Heading-->
	<ul class="nav" data-remember-tab="tab_id" role="tablist">
		<li class="nav-item">
			<a href="?cms=/lesson/main" class="nav-link font-weight-bold my-1 font-size-h5 px-sm-4 px-3
			<?php echo strpos($_GET['cms'], 'lesson') ? 'active' : '';  ?>
			">수업</a>
		</li>
		<li class="nav-item">
			<a href="?cms=/lab/main" class="nav-link font-weight-bold my-1 font-size-h5 px-md-4 px-2
			<?php echo strpos($_GET['cms'], 'lab') ? 'active' : '';  ?>
			">연구실</a>
		</li>
		<li class="nav-item">
			<a href="?cms=/share/class-share" class="nav-link font-weight-bold my-1 font-size-h5 px-sm-4 px-3
			<?php echo strpos($_GET['cms'], 'share') ? 'active' : '';  ?>
			">나눔공간</a>
		</li>
	</ul>
	<!--end::Page Heading-->
</div>
<!--end::Info-->

</div>
			<!--end::Header Nav-->
		</div>

		<!--end::Header Menu-->
	</div>

	<!--end::Header Menu Wrapper-->

	<!--begin::Topbar-->
	<div class="topbar">

		<!--begin::Topbar-->
<div class="d-flex align-items-center flex-wrap">
	<div class="d-flex">
		
		<!--begin::Notifications-->
		<div class="dropdown">
			<!--begin::Toggle-->
			<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
				<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
					<span class="svg-icon svg-icon-xl svg-icon-primary">
						<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-03-15-144509/theme/demo5/dist/../src/media/svg/icons/General/Notifications1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"></path>
								<rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"></rect>
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
					<span class="pulse-ring"></span>
					<span class="label label-sm label-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-1 mr-1">13</span>
				</div>
			</div>
			<!--end::Toggle-->
			<!--begin::Dropdown-->
			<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
				<form>
					<div class="tab-content">

						<!--begin::Tabpane-->
						<div class="tab-pane active" id="topbar_notifications_events" role="tabpanel">
							<!--begin::Nav-->
							<div class="navi navi-hover scroll ps--active-y" data-scroll="true" style="max-height: 300px; overflow-y: scroll;">
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>1</strong> 강의가 강의 관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>2</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>3</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>4</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>5</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>6</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>7</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>8</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>9</strong> 강의가
												강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>10</strong>
												강의가 강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>11</strong>
												강의가 강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>12</strong>
												강의가 강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>13</strong>
												강의가 강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
								<!--end::Item-->
								<!--begin::Item-->
								<span href="#" class="navi-item alert">
									<div class="navi-link">
										<div class="navi-text">
											<div class="font-weight-bold"><strong>14</strong>
												강의가 강의
												관리에 저장 되었습니다.</div>
											<div class="text-muted">23분 전</div>
										</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="fa fa-times"></i>
												</span>
											</button>
										</div>
									</div>

								</span>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Tabpane-->

					</div>
				</form>
			</div>
			<!--end::Dropdown-->
		</div>
		<!--end::Notifications-->
		<!--begin::User-->
		<div class="btn-group dropdown">
			<a href="?cms=/mypage" class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2 rounded" >
				<span class="bg-secondary rounded">
					<img class="h-30px w-30px rounded-sm" src="./assets/media/svg/avatars/014-girl-7.svg" alt="">
				</span>
				<span class="text-dark-50 pl-3 font-weight-bolder font-size-base mr-1 font-size-h5 d-none d-sm-inline">나윤주</span>
				<span class="text-muted font-weight-bold font-size-base d-none d-sm-inline mt-1">선생님</span>
			</a>
		</div>
		<div class="btn btn-clean btn-lg btn-icon" title="로그아웃">
			<a href="index.php" class="navi-link">
				<span class="navi-icon mr-0" >
					<i class="fas fa-sign-out-alt text-primary"></i>
				</span>
			</a>
		</div>

		<!--end::User-->
	</div>
</div>
<!--end::Topbar-->
	</div>

	<!--end::Topbar-->
</div>

<!--end::Container-->
</div>

<!--end::Header-->