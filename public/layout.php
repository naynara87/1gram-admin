<?php // routing controller
if($_GET){
	$route = $_GET['pages'] ? 'pages/' . $_GET['pages'] : 'partials/_main';
}else{
	$route = 'partials/_main';
}
?>

<!--begin::Main-->

		<?php include("partials/_main-header-mobile.php"); ?>
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper">
					<?php include("partials/_main-header.php"); ?>
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