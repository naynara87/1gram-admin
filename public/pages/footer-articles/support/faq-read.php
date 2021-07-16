<div class="content d-flex flex-column flex-column-fluid bg-white pt-0">
	<?php include("pages/footer-articles/cs-menu.php"); ?>
	<div class="container">
		<div class="tab-content mt-5">
			<!--begin::1:1문의 탭-->
			<div class="tab-pane fade" id="cs_menuTab-1" role="tabpanel" aria-labelledby="cs_menuTab-1">
				<?php include("pages/footer-articles/support/custom-inquire-list.php"); ?>
			</div>
			<!--end::1:1문의 탭-->
			<!--begin::사용방법-->
			<div class="tab-pane fade" id="cs_menuTab-2" role="tabpanel" aria-labelledby="cs_menuTab-2">
				<?php include("pages/footer-articles/support/tutorial.php"); ?>
			</div>
			<!--end::사용방법-->
			<!--begin::자주묻는질문-->
			<div class="tab-pane fade active show" id="cs_menuTab-3" role="tabpanel" aria-labelledby="cs_menuTab-3">
				<!--begin::faq-읽기-->
				<div class="card mt-10 border-0">
					<div class="card-header">
						<h2 class="font-weight-bold d-flex align-items-center">
							서비스 론칭 기념 이벤트 (12/21~12/31)
						</h2>
						<div class="d-flex justify-content-between flex-wrap pt-5">
							<div class="d-flex align-items-center">
								<div class="symbol symbol-circle symbol-40 mr-3">
									<img alt="Pic" src="../../assets/media/logos/logo-m.svg">
								</div>
								<h5 class="card-label text-dark">1gram 관리자</h5>
							</div>
							<span class="regDate mt-5">등록일: 2021.2.11</span>
						</div>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group row mb-0">
								<div class="col-12">
									<p class="font-size-h5">
										'나눔공간'은 '강의나눔'과 '자료나눔' 2가지 메뉴로 구성돼있습니다.<br>
										'강의나눔'은 선생님들께서 저작한 강의를 자유롭게 공유하고 활용할 수 있는 공간입니다.<br>
										원하는 강의를 클릭한 후 '강의 담기'버튼을 클릭하면, 나의 '강의관리'메뉴의 '공유 받은 폴더'에서 확인할 수 있으며,<br>
										추가로 수정 및 학생들에게 배포할 수 있습니다.<br>
										'자료나눔'은 1gram에서 선생님들께 유용한 콘텐츠를 선별해서 모아놓은 공간입니다.<br>
										원하는 콘텐츠를 클릭한 후 '인터랙션 추가'버튼을 클릭하면 나만의 강의를 저작할 수 있습니다.<br>
									</p>
								</div>
							</div>
						</form>
					</div>
					<!--begin::버튼 -->
					<div class="card-footer d-flex justify-content-between mt-4">
						<div class="btn-group">
							<!-- <a href="?pages=/footer-articles/support/inquire-write" type="button" class="btn btn-warning rounded font-weight-bold btn-lg px-6">수정하기</a> -->
						</div>
						<a href="?pages=/footer-articles/cs"
							class="btn btn-outline-success font-weight-bold btn-lg px-6"><i
								class="ki ki-bold-sort icon-nm"></i>목록보기</a>

					</div>
					<!--end::버튼 -->
				</div>
				<!--end::faq-읽기-->
			</div>
			<!--end::자주묻는질문-->
			<!--begin::공지사항-->
			<div class="tab-pane fade" id="cs_menuTab-4" role="tabpanel" aria-labelledby="cs_menuTab-4">
			<?php include("pages/footer-articles/support/notice-list.php"); ?>
			</div>
			<!--end::공지사항-->
			<!--begin::이벤트-->
			<div class="tab-pane fade" id="cs_menuTab-5" role="tabpanel" aria-labelledby="cs_menuTab-5">
				<?php include("pages/footer-articles/support/event-list.php"); ?>
			</div>
			<!--end::이벤트-->
			<!--begin::제휴문의-->
			<div class="tab-pane fade" id="cs_menuTab-6" role="tabpanel" aria-labelledby="cs_menuTab-7">
				<?php include("pages/footer-articles/support/inquire-list.php"); ?>
			</div>
			<!--end::제휴문의-->
		</div>
		<!-- begin::1:1문의 탭 -->
	</div>
</div>