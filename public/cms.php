<!DOCTYPE html>
<html lang="ko">

	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>1gram</title>
		<meta name="description" content="1gram" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" >
		<!--end::Fonts-->


		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="./assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="./assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="./assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes(used by all pages)-->
		<link href="./assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="./assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="./assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="./assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>

	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">

		<?php include("cms-layout.php"); ?>

		<?php include("partials/_extras/scrolltop_bottom.php"); ?>
		
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="./assets/plugins/global/plugins.bundle.js"></script>
		<script src="./assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="./assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->



		<!--begin::프로필사진 교체.js-->
		<?php 
		    if($_GET['cms'] == '/mypage'){
				echo '<!--begin::Page Vendors(used by this page)-->
				<script src="./assets/js/pages/custom/profile/profile.js"></script>
				<!--end::Page Vendors-->';
			}
		?><!--end::프로필사진 교체.js-->
		<script src="./assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
		<script src="./assets/js/pages/custom-sweetalert2.js"></script>
		<?php 
		    if($_GET['cms'] == '/lesson/publish/edit/e1'){
				echo '<script src="./assets/js/pages/features/forms/widgets/select2.js"></script>';
				echo '<script src="./assets/js/pages/features/forms/widgets/bootstrap-datepicker.js"></script>';
				echo '<script src="./assets/js/pages/custom/user/add-user.js"></script>';
				echo '<script src="./assets/js/pages/features/file-upload/image-input.js"></script>';
			}
		?>
		
		<!-- <script src="./assets/js/pages/widgets.js"></script> -->
		<script src="./assets/js/pages/my-script.js"></script> 
		
		<!-- begin::유튜브 미리보기 라이트 박스-->
		<?php 
		    if($_GET['cms'] == '/lesson/main'){
				echo '<script src="./assets/js/pages/lity.js"></script>';
			}
		?>
		<?php 
		    if($_GET['cms'] == '/share/data-share'){
				echo '<script src="./assets/js/pages/lity.js"></script>';
			}
		?>
		<!-- end::유튜브 미리보기 라이트 박스-->
		
		<!-- begin::태그달기-->
		<?php 
		    if($_GET['cms'] == '/lab/class'){
				echo '<script src="./assets/js/pages/features/forms/widgets/select2.js"></script>';
				echo '<script src="./assets/js/pages/features/forms/widgets/tagify.js"></script>';
				echo '<script src="./assets/js/pages/features/forms/validation/form-controls.js"></script>';
			}
		?><!-- end::태그달기-->

		<!-- <script src="./assets/js/pages/features/cards/tools.js"></script> -->

		
		<!-- begin::daterange-->
		<?php 
		    if($_GET['cms'] == '/lab/analysis'){
				echo '<script src="./assets/js/pages/features/forms/widgets/bootstrap-daterangepicker.js"></script>';
			}
		?><!-- end::daterange-->
		
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/js/pages/features/datatables/basic/basic.js"></script>


	</body>

	<!--end::Body-->
</html>