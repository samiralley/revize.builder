<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Site Name</title>
	<meta name="description" content="">
	<meta name="robots" content="index, follow">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<!-- #bootstrap css and fonts -->
	<link href="_assets_/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<!-- #bootstrap js + popper js -->
	<script src="_assets_/plugins/popperjs/popper.min.js"></script>
	<script src="_assets_/plugins/bootstrap/js/bootstrap.min.js"></script>

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

<body id="sign-in-form" class="vh-100 px-4 px-lg-0">
	<div class="position-fixed bottom-0 start-0 mb-3 ms-3">
		<?php include "includes/theme-switcher.php"; ?>
	</div>
	<button type="button" class="btn btn-link text-dark text-decoration-none position-absolute top-0 start-0 d-none d-xl-flex align-items-center"><i class="bi bi-arrow-left me-2 fs-4"></i>Back</button>
	<div class="vh-100 position-absolute top-0 end-0 d-none d-xl-block overflow-hidden" style="width:25%;background:url(_assets_/images/login-bg.jpg) center center/ cover no-repeat">
		<div class="img-overlay position-absolute" style="height:50%;width:100%;background: rgb(0,0,0);
		background: linear-gradient(186deg, rgba(0, 0, 0, 0.7) 0%, rgba(0,0,0,0) 100%); ">
		</div>

		<div class="position-absolute top-0 end-0 me-3 mt-3">
			<span class="text-white pt-2 d-inline-flex position-relative" style="top:6px">Designed with <i class="bi bi-heart-fill mx-1"></i> by</span>
			<svg xmlns="http://www.w3.org/2000/svg" width="88.906" height="22.281" viewBox="0 0 88.906 22.281">
				<path fill-rule:="" fill="#ffffff" evenodd;="" id="revizelogo" class="cls-1" d="M0.93,22H5.49v-5.94a6.067,6.067,0,0,1,1.3-4.29,4.7,4.7,0,0,1,3.585-1.38h0.24V5.624a4.6,4.6,0,0,0-3.24.9,6.688,6.688,0,0,0-1.89,2.64V5.924H0.93V22Zm14.73-9.3a4.666,4.666,0,0,1,1.155-2.49,3.062,3.062,0,0,1,2.325-.93,2.99,2.99,0,0,1,2.31.945A4.443,4.443,0,0,1,22.53,12.7H15.66Zm7.74,8.865a8.092,8.092,0,0,0,2.76-2.2l-2.61-2.31a6.939,6.939,0,0,1-1.86,1.26,5.083,5.083,0,0,1-2.04.39,4.085,4.085,0,0,1-2.565-.8,3.84,3.84,0,0,1-1.365-2.355H26.91q0.03-.33.045-0.63t0.015-.57a11.548,11.548,0,0,0-.465-3.285,8.058,8.058,0,0,0-1.44-2.79A7.081,7.081,0,0,0,22.62,6.344a7.834,7.834,0,0,0-3.48-.72,7.626,7.626,0,0,0-5.73,2.46,8.237,8.237,0,0,0-1.635,2.67,8.994,8.994,0,0,0-.585,3.24v0.06a8.708,8.708,0,0,0,.63,3.375,7.906,7.906,0,0,0,1.755,2.625,7.738,7.738,0,0,0,2.67,1.71,9.164,9.164,0,0,0,3.345.6A8.561,8.561,0,0,0,23.4,21.569Zm10.35,0.555h4.14l6.33-16.2H39.48l-3.63,10.77-3.6-10.77H27.42ZM45.57,22h4.56V5.924H45.57V22ZM45.45,4.154h4.8V0.1h-4.8v4.05ZM52.38,22H66.36v-3.69H58.02l8.34-9.18V5.924H52.65v3.69h8.04l-8.31,9.18V22ZM72,12.7a4.666,4.666,0,0,1,1.155-2.49,3.062,3.062,0,0,1,2.325-.93,2.99,2.99,0,0,1,2.31.945,4.443,4.443,0,0,1,1.08,2.475H72Zm7.74,8.865a8.092,8.092,0,0,0,2.76-2.2l-2.61-2.31a6.939,6.939,0,0,1-1.86,1.26,5.083,5.083,0,0,1-2.04.39,4.085,4.085,0,0,1-2.565-.8,3.84,3.84,0,0,1-1.365-2.355h11.19q0.03-.33.045-0.63t0.015-.57a11.548,11.548,0,0,0-.465-3.285,8.058,8.058,0,0,0-1.44-2.79,7.081,7.081,0,0,0-2.445-1.935,7.834,7.834,0,0,0-3.48-.72,7.626,7.626,0,0,0-5.73,2.46,8.237,8.237,0,0,0-1.635,2.67,8.994,8.994,0,0,0-.585,3.24v0.06a8.708,8.708,0,0,0,.63,3.375,7.906,7.906,0,0,0,1.755,2.625,7.738,7.738,0,0,0,2.67,1.71,9.164,9.164,0,0,0,3.345.6A8.561,8.561,0,0,0,79.739,21.569ZM85.019,22h4.83V17.2h-4.83V22Z" transform="translate(-0.938 -0.094)"></path>
			</svg>
		</div>
	</div>

	<main class="form-signin d-flex m-auto vh-100">
		<div class="col col-sm-8 col-md-5 col-xl-3 m-auto">
			<form>
				<h1 class="h5 fw-bold mb-3">Sign in to revize.</h1>

				<div class="form-floating">
					<input type="email" class="form-control border-bottom" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating">
					<input type="password" class="form-control" id="password" placeholder="Password">
					<label for="password">Password</label>
					<i class="bi bi-eye position-absolute top-50 end-0 translate-middle-y fs-4 me-3 cursor-pointer" id="showpass" onclick="showPass()"></i>
				</div>

				<script>
					function showPass() {
						var x = document.getElementById("password");
						if (x.type === "password") {
							x.type = "text";
						} else {
							x.type = "password";
						}
					}
				</script>

				<div class="d-flex align-items-center my-3">
					<div class="form-check text-start">
						<input class="form-check-input me-2 rounded-1" type="checkbox" value="remember-me" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">
							Remember me
						</label>
					</div>
					<button type="button" class="btn btn-link text-dark text-decoration-none ms-auto p-0" data-bs-toggle="modal" data-bs-target="#forgotModal">
						Forgot Password?
					</button>
				</div>
				<button class="btn btn-primary w-100" type="submit">Sign in</button>
				<p class="mt-5 mb-3 text-muted small">© <?php echo date("Y"); ?> revize. By continuing, you confirm that you agree to our <a href="https://www.revize.com/privacy_policy.php">Privacy Policy</a> and <a href="https://www.revize.com/terms.php">Terms of Use</a></p>
			</form>
		</div>
	</main>

	<!-- Modal -->
	<div class="modal fade" id="forgotModal" tabindex="-1" aria-labelledby="forgotModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header border-0 p-5 pb-0">
					<h1 class="fw-bold h4 mt-2">Forgot Password?</h1>
					<button type="button" class="btn-close m-3 position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-5 pt-0">
					<p>Enter your email address or username and we’ll send you instructions to reset your password.</p>
					<p class="form-"></p>
					<label for="emailResetInput" class="form-label">Username or email</label>
					<input type="text" class="form-control" id="emailResetInput" />
					<button type="button" class="btn btn-primary mt-2">Submit</button>
				</div>
			</div>
		</div>
	</div>

	<script src="_assets_/js/scripts.js"></script>
</body>

</html>