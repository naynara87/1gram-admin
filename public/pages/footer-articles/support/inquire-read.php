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
			<div class="tab-pane fade" id="cs_menuTab-3" role="tabpanel" aria-labelledby="cs_menuTab-3">
				<?php include("pages/footer-articles/support/faq.php"); ?>
			</div>
			<!--end::자주묻는질문-->
			<!--begin::공지사항-->
			<div class="tab-pane fade" id="cs_menuTab-4" role="tabpanel" aria-labelledby="cs_menuTab-4">
			    <?php include("pages/footer-articles/support/notice-list.php"); ?>
            </div>
			<!--begin::이벤트-->
			<div class="tab-pane fade" id="cs_menuTab-5" role="tabpanel" aria-labelledby="cs_menuTab-5">
				<?php include("pages/footer-articles/support/event-list.php"); ?>
			</div>
			<!--end::이벤트-->
			<!--begin::제휴문의-->
			<div class="tab-pane fade active show" id="cs_menuTab-6" role="tabpanel" aria-labelledby="cs_menuTab-6">
			    <!--begin::제휴문의 읽기-->
					<div class="card mt-10 border-0">
						<div class="card-header">
							<h2 class="font-weight-bold d-flex align-items-center">
								문의내용
							</h2>
						</div>
						<div class="card-body">
							<form>
								<div class="form-group row">
									<div class="col-12">
										<p class="col-form-label font-weight-bold h5" id="readTitle">문의합니다.</p>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-12">
										<p class="col-form-label font-weight-bold h5" id="readContent">
											1gram과 제휴하고자합니다.
											귀사와 협업을 하고자 연락하게 되었습니다.
										</p>
									</div>
								</div>
								<div class="form-group row mb-0">
									<div class="col-12">
										<div class="image-input-wrapper symbol-label" id="readFile"
											style="background-image: url(assets/media/1gram-img/default-image.png)"></div>
									</div>
								</div>
							</form>
						</div>
						<!--begin::버튼 -->
						<div class="card-footer d-flex justify-content-between mt-4">
							<div class="btn-group">
								<!-- <a href="?pages=/footer-articles/support/inquire-write" class="btn btn-light-success rounded font-weight-bold btn-lg px-6">수정하기</a> -->
							</div>
							<a href="?pages=/footer-articles/cs" class="btn btn-outline-success font-weight-bold btn-lg px-6">
								<i class="ki ki-bold-sort icon-nm"></i>목록보기</a>
						</div>
						<!--end::버튼 -->
					</div>
				<!--end::제휴문의 읽기-->
			</div>
			<!--end::제휴문의-->
		</div>
		<!-- begin::1:1문의 탭 -->
	</div>
</div>



