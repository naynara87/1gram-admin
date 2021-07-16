<?php // routing controller
if($_GET){
	$route = $_GET['cms'] ? 'cms/' . $_GET['cms'] : 'partials/_content';
}else{
	$route = 'partials/_content';
}
?>
<!--begin::Main-->

		<?php include("partials/_header-mobile.php"); ?>
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<?php include("partials/_aside.php"); ?>

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<?php include("partials/_header.php"); ?>

					<!--begin::Content-->
						<?php include($route . ".php"); ?>
					<!--end::Content-->

					<?php include("partials/_footer.php"); ?>
				</div>

				<!--end::Wrapper-->
			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->
		<!--begin:: 수업 미리보기 모달창 -->
		<?php include("cms/preview/modal-box.php"); ?>
        <!--end:: 수업 미리보기 모달창 -->
		<!--begin:: 제목설정 -->
		<?php include("cms/modal/title-input.php"); ?>
        <!--end:: 제목설정 -->
		<!--begin:: 자료나눔 미리보기 -->
		<?php include("cms/modal/share-select.php"); ?>
        <!--end:: 자료나눔 미리보기 -->
		<!--begin:: 자료나눔 미리보기 -->
		<?php include("cms/modal/share-move.php"); ?>
        <!--end:: 자료나눔 미리보기 -->
		<!--begin:: 폴더 등록 모달 -->
		<?php include("cms/modal/folder-reg.php"); ?>
        <!--end:: 폴더 등록 모달 -->
		<!--begin:: 배포시 옆으로 나오는 모달 -->
		<?php include("cms/modal/publish_panel.php"); ?>
        <!--end:: 배포시 옆으로 나오는 모달 -->
		<!--begin:: 클래스 등록 모달 -->
		<?php include("cms/modal/class-reg.php"); ?>
        <!--end:: 클래스 등록 모달 -->
		<!--begin:: 클래스 선택 모달 -->
		<?php include("cms/modal/class-select.php"); ?>
        <!--end:: 클래스 선택 모달 -->
		
		<!--begin:: 학생분석 도움말 모달 -->
		<?php include("cms/modal/analysis-help.php"); ?>
        <!--end:: 학생분석 도움말 모달 -->
		<!--begin:: 학생분석 코멘트 -->
		<?php include("cms/modal/analysis-comment.php"); ?>
        <!--end:: 학생분석 코멘트 -->
		<!--begin:: 학생분석 현황 -->
		<?php include("cms/modal/analysis-status.php"); ?>
        <!--end:: 학생분석 현황 -->

		