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
			<div class="tab-pane fade active show" id="cs_menuTab-4" role="tabpanel" aria-labelledby="cs_menuTab-4">
				<!--begin::제휴문의 쓰기-->
<div class="card mt-10 border-0">
		<div class="card-header">
			<h2 class="font-weight-bold d-flex align-items-center">
				<span class="svg-icon svg-icon-success svg-icon-2x mr-2">
					<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Pencil.svg--><svg
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
						height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path
								d="M10.5,8 L6,19 C6.0352633,19.1332661 6.06268417,19.2312688 6.08226261,19.2940083 C6.43717645,20.4313361 8.07642225,21 9,21 C10.5,21 11,19 12.5,19 C14,19 14.5917308,20.9843119 16,21 C16.9388462,21.0104588 17.9388462,20.3437921 19,19 L14.5,8 L10.5,8 Z"
								fill="#000000" />
							<path d="M11.3,6 L12.5,3 L13.7,6 L11.3,6 Z M14.5,8 L10.5,8 L14.5,8 Z" fill="#000000" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				문의하기
			</h2>
		</div>
		<div class="card-body">
			<form>
				<div class="form-group row">
					<label class="col-2 col-form-label font-weight-bold font-size-lg">제목</label>
					<div class="col-10">
						<input type="text" class="form-control form-control-lg" placeholder="제목을 입력하세요.">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label font-weight-bold">내용</label>
					<div class="col-10">
						<textarea class="form-control" rows="10" placeholder="내용을 입력하세요."></textarea>
					</div>
				</div>
				<div class="form-group row mb-0">
					<label class="col-2 col-form-label font-weight-bold">첨부파일</label>
					<div class="col-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label selected" for="customFile">첨부파일 없음</label>
						</div>
						<spen class="form-text text-muted">이미지 파일(GIF, PNG, JPG)을 기준으로 이미지당 10MB 이하, 최대 2개까지 등록
							가능합니다.<br>
							영상인 경우, 메일로 발송 부탁드립니다. 이메일주소 : service@1gram.cc</spen>
					</div>
				</div>
			</form>
		</div>
		<!--begin::버튼 -->
		<div class="card-footer d-flex justify-content-between mt-4">
			<a href="?pages=/footer-articles/cs" type="button"
				class="btn btn-outline-success font-weight-bold btn-lg px-6"><i
					class="ki ki-bold-sort icon-nm"></i>목록보기</a>
			<div class="btn-group">
				<button type="reset" class="btn btn-secondary rounded font-weight-bold btn-lg px-6">취소</button>
				<a href="?pages=/footer-articles/support/inquire-read" type="button" class="btn btn-success rounded ml-2 font-weight-bold btn-lg px-6">저장</a>
			</div>
		</div>
		<!--end::버튼 -->
	</div>

<!--end::제휴문의 쓰기-->
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


