<?php include "includes/head.php"; ?>
<!-- #note no editing on smaller devices -->
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column vh-100 position-fixed bg-white d-xl-none" style="z-index:1099">
	<main class="px-3 container m-auto">
		<h1>Sorry <i class="bi bi-emoji-smile-upside-down ms-1"></i></h1>
		<p class="mb-4">You must be on a larger screen to use the revize. footer builder</p>
		<a href="#" class="btn btn-light">Login</a>
		<a href="#" class="btn btn-light">Go home</a>
		<a href="game.php" class="btn btn-dark border-dark bg-dark"><i class="bi bi-joystick me-2"></i>Play tic tac toe</a>
	</main>

	<footer class="mt-auto text-primary">
		<p class="m-0 small text-muted">&copy; <?php echo date("Y"); ?> by revize.,<a href="https://www.revize.com/terms.php" target="_blank">Terms of use</a></p>
	</footer>
</div>
<!-- #note no editing on smaller devices -->

<div class="rz-admin-wrap d-flex flex-column h-100">
	<div class="header">
		<?php include "includes/header.php"; ?>
	</div><!-- /.header -->
	<div class="rz-admin-inner d-lg-flex flex-fill overflow-auto">

		<?php include "includes/leftbar.php"; ?>

		<div class="center-col-wrap w-100 d-flex flex-column">
			<div class="d-flex align-items-center justify-content-between border-bottom px-4 py-3">
				<h1 class="h4 m-0">Footer Builder</h1>
				<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 bg-success lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg text-white"></i></span>Create a new footer</a>
			</div><!-- /.d-flex -->
			<div class="center-col-inner overflow-auto flex-fill p-4">
				<div class="col-lg-12 m-auto">

					<div class="footer-created mb-4">
						<div class="d-flex flex-wrap gap-1 align-items-center pb-3">
							<h5>Editing: Footer Name</h5>
							<div class="w-100 d-xl-none"></div>
							<a href="" class="ms-auto btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Export</a>
						</div>
						<div class="p-3 border rounded">
							<div class="footer-top d-flex gap-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-image fs-5 me-2"></i>Logo
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-textarea-resize fs-5 me-2"></i>Input
									</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-textarea-resize fs-5 me-2"></i>Input
									</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-mailbox-flag fs-5 me-2"></i>Contact
									</div>
								</div><!-- /.p-3 -->
							</div><!-- /.footer-top -->
							<div class="footer-middle d-flex gap-2 my-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Social
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-textarea-resize fs-5 me-2"></i>Input
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Socials
									</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-geo-alt fs-5 me-2"></i>Location
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-geo-alt fs-5 me-2"></i>Location
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Socials
									</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Middle right</div>
								</div><!-- /.p-3 -->
							</div><!-- /.footer-middle -->
							<div class="footer-bottom d-flex gap-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Socials
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Socials
									</div>									
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-textarea-resize fs-5 me-2"></i>Input
									</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Socials
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-translate fs-5 me-2"></i>Translate
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Socials
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-translate fs-5 me-2"></i>Translate
									</div>
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-collection-play fs-5 me-2"></i>Socials
									</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
										<i class="bi bi-mailbox-flag fs-5 me-2"></i>Contact
									</div>
								</div><!-- /.p-3 -->
							</div><!-- /.footer-bottom -->
						</div><!-- /.p-3 -->
					</div><!-- /.footer-created -->

					<div class="footer-created mb-4">
						<div class="d-flex flex-wrap gap-1 align-items-center pb-3">
							<h5>Editing: Footer Name</h5>
							<div class="w-100 d-xl-none"></div>
							<a href="" class="ms-auto btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Export</a>
						</div>
						<div class="p-3 border rounded">
							<div class="footer-top d-flex gap-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Top left</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Top center</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Top right</div>
								</div><!-- /.p-3 -->
							</div><!-- /.footer-top -->
							<div class="footer-middle d-flex gap-2 my-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Middle left</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">Middle center</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Middle right</div>
								</div><!-- /.p-3 -->
							</div><!-- /.footer-middle -->
							<div class="footer-bottom d-flex gap-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Bottom left</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Bottom center</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Bottom right</div>
								</div><!-- /.p-3 -->
							</div><!-- /.footer-bottom -->
						</div><!-- /.p-3 -->
					</div><!-- /.footer-created -->
					
				</div><!-- /.col-lg-12 -->
			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->

		<div class="right-col-wrap col-12 col-lg-3 d-flex flex-column border-start">

			<div class="right-col-header">
				<div class="border-bottom border-1 p-4 bg-body">
					<h5>Footer Elements</h5>
					<p class="m-0">Drag elements and place them where you want in the footer</p>
				</div>
			</div><!-- /.right-col-header -->

			<div class="rz-meta-box p-4 border-bottom">
				<form class="w-100 align-self-center position-relative" role="search" aria-label="Elements Search" aria-labelledby="Search Site">
					<input class="form-control cursor-pointer ps-3" type="search" placeholder="Filter..." autocomplete="off">
					<button class="btn btn-link position-absolute top-50 end-0 translate-middle-y gap-3 ps-0 lh-1 d-flex align-items-center" aria-label="Search" tabindex="0"><span class="vr d-inline-flex align-self-center" style="height:1rem "></span><i class="bi bi-search"></i></button>
				</form>
			</div><!-- /.rz-meta-box -->

			<div class="right-col-inner overflow-auto flex-fill d-flex flex-column">

				<div class="col p-4">
					<div class="rz-meta-box row row-cols-xl-1 g-2" id="draggableElements">

						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-image fs-5 me-2"></i>Logo
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-search fs-5 me-2"></i>Toggle
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-textarea-resize fs-5 me-2"></i>Input
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-translate fs-5 me-2"></i>Translate
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-universal-access-circle fs-5 me-2"></i>ADA
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-link-45deg fs-5 me-2"></i>Buttons
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-geo-alt fs-5 me-2"></i>Location
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-plus-slash-minus fs-5 me-2"></i>Font Sizer
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-brightness-low fs-5 me-2"></i>Weather
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-collection-play fs-5 me-2"></i>Social
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-textarea-t fs-5 me-2"></i>RTE
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-exclamation-circle fs-5 me-2"></i>Alert
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-hr fs-5 me-2"></i>Divider
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-mailbox-flag fs-5 me-2"></i>Contact
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-envelope fs-5 me-2"></i>Subscription
							</div>
						</div>

					</div><!-- /.rz-meta-box -->
				</div><!-- /.col -->

			</div><!-- /.right-col-inner -->

			<div class="rz-meta-box mt-auto shadow-sm border-top p-4 bg-body sticky-bottom">
				<div class="row row-cols-md-2 g-2 flex-wrap">
					<div class="mw-max-content">
						<a href="" class="btn w-100 btn-primary d-flex align-items-center justify-content-center">Save</a>
					</div>

					<div class="mw-max-content">
						<a href="" class="btn w-100 btn-outline-light d-flex align-items-center justify-content-center">Save as draft</a>
					</div>
				</div><!-- /.row -->
			</div><!-- /.rz-meta-box -->

		</div><!-- /.right-col-wrap -->

	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>