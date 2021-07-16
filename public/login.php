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
		<!-- begin:위치 모션 -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- end:위치 모션 -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>




	</head>

	<!--end::Head-->
	<?php // routing controller
		if($_GET){
			$route = $_GET['pages'] ? 'pages/' . $_GET['pages'] : 'partials/_main';
		}else{
			$route = 'partials/_main';
		}
	?>
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed">

		<!--begin::Main-->

		<?php include("partials/_main-header-mobile.php"); ?>
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper">
					<?php include("partials/_main-header_signIn.php"); ?>
					<!--begin::Content-->
					<?php include($route . ".php"); ?>
					<!--end::Content-->

					<?php include("partials/_main-footer.php"); ?>
				</div>

				<!--end::Wrapper-->
			</div>

			<!--end::Page-->
		</div>


        <!--end::Main-->		
		<?php include("partials/_extras/kakao_btn.php"); ?>
		<?php include("partials/_extras/scrolltop.php"); ?>
		
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="./assets/plugins/global/plugins.bundle.js"></script>
		<script src="./assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="./assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<script src="./assets/js/pages/features/forms/widgets/select2.js"></script>
		
		<script src="./assets/js/pages/lity.js"></script>
		<script src="./assets/js/pages/main.js"></script>
		 
		<script src="./assets/js/pages/slick.js"></script>

		<script>
			AOS.init({
				easing: 'ease-in-out-sine'
			});		
			$('.auto-play').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
            });	
		</script>
	</body>

	<!--end::Body-->
	<!--begin:: 메인인터렉션 모달 -->
<?php include("cms/modal/main-test-01.php"); ?>
<?php include("cms/modal/main-test-02.php"); ?>
<?php include("cms/modal/main-test-03.php"); ?>
<!--end::메인인터렉션 모달-->		

</html>