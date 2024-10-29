<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Site Name</title>
	<meta name="description" content="">
	<meta name="robots" content="index, follow">
	<meta name="theme-color" content="#4516ff" />

	<!-- #jquery -->
	<script src="_assets_/js/all.js"></script>

	<!-- #lightGallery css -->
	<link href="_assets_/plugins/lightGallery-master/dist/css/lightgallery-bundle.min.css" rel="stylesheet">

	<!-- #bootstrap css and fonts -->
	<link href="_assets_/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<!-- #font awesome css -->
	<link href="_assets_/fonts/font-awesome/css/all.min.css" rel="stylesheet">

	<!-- #tiny sider css -->
	<link href="_assets_/plugins/tiny-slider/dist/tiny-slider.css" rel="stylesheet">

	<!-- #aos css-->
	<link href="_assets_/plugins/aos/src/css/aos.min.css" rel="stylesheet">

	<!-- #layout css -->
	<link href="_assets_/css/layout.css" rel="stylesheet">

	<!-- #favicons -->
	<link rel="shortcut icon" href="_assets_/images/favicon.ico">
	<link rel="apple-touch-icon" href="_assets_/images/touch-icon.png">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@handle">
	<meta name="twitter:creator" content="@handle">
	<meta name="twitter:title" content="Site Name">
	<meta name="twitter:description" content="Page description">
	<meta name="twitter:image" content="https://link-to-image.png">

	<meta property="og:url" content="https://siteurl.com/">
	<meta property="og:title" content="Site Name">
	<meta property="og:description" content="Page description">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://link-to-image.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="2000">
	<meta property="og:image:height" content="1000">

</head>

<body id="intranet" class="user-logged-in"><!-- add user-logged-in class to test buttons and remove after sending to enabler -->

<div class="border-start border-primary border-5 h-100 bg-body vh-100 bg-opacity-10">
	<div class="d-lg-flex h-100 gap-lg-4">
		<div class="col-left w-50 d-none d-lg-flex bg-primary align-items-start" style="background:url(_assets_/images/intranet.jpg) center center / cover no-repeat;">
		</div><!-- /.col-left -->
		<div class="col-right w-100 h-100 align-content-center">
			<form class="m-auto has-edit-buttons" style="max-width:100%;width:400px;">
				<div class="center-top">
					<div class="rz-btns-container">
						<span class="rzBtn rzBtn-sm">Manage users</span>
					</div>				
				</div>
				<img src="_assets_/images/logo.png" alt="Logo" class="w-25 mb-3">
				<h1 class="h4 fw-bold mb-5">Sign in to view this page</h1>
				<!-- <p class="mb-4 small d-flex"><i class="bi bi-info-circle me-2 flex-shrink-0 text-danger fs-5"></i>You must have an account set up by an administrator to login and view this page</p> -->
				<div class="mb-3">
					<label for="intranetUsername" class="form-label fw-bold">Username</label>
					<input type="email" class="form-control" id="intranetUsername">
				</div>
				<div class="mb-3">
					<label for="intranetPassword" class="form-label fw-bold">Password</label>
					<input type="password" class="form-control" id="intranetPassword">
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Remember me</label>
				</div>
				<button type="submit" class="btn btn-primary w-100 rounded-pill p-3 fw-bold">Sign in</button>
				<div class="mt-5 mb-0 d-flex"><i class="bi bi-lock me-2 flex-shrink-0 text-success fs-5"></i>
				<p><strong>Forgot your password?</strong><br><span class="small">If you have forgotten your password, please contact your administrator for assistance.</span></div>
			</form>
		</div><!-- /.col-right -->
	</div><!-- /.d-flex -->
</div><!-- /.border-start -->

	<script src="_assets_/plugins/revizeWeather/js/revizeWeather.min.js"></script>
	<script src="_assets_/js/scripts.js"></script>

</body>

</html>